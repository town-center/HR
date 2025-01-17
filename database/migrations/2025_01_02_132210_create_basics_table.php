<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void

    {
        Schema::create('basics', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('department_id')->nullable();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');

            $table->integer('duration_vacation')->nullable();
            $table->date('start_vacation')->nullable();
            $table->date('end_vacation')->nullable();
            $table->string('notes')->nullable();
            $table->boolean('manager_accept')->nullable();
            $table->boolean('security_manager_accept')->nullable();
            $table->time('start_hour')->default('00:00')->nullable();
            $table->time('end_hour')->default('00:00')->nullable();
            $table->date('request_date')->nullable();
            $table->date('start_work')->nullable();
            $table->double('financial_compensation')->nullable();
            $table->string('Job_title')->nullable();
            $table->integer('additional_hours')->nullable();
            $table->string('justifications_assignment')->nullable();
            $table->boolean('vice_chairman_accept')->nullable();
            $table->string('advance_value')->nullable();
            $table->string('discount_value')->nullable();
            $table->string('Entry')->nullable();
            $table->string('exit')->nullable();
            $table->integer('step')->default('1');

            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('form_types')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basics');
    }
};
