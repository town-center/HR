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
        Schema::create('advanceds', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('birth_place')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('current_address')->nullable();
            $table->set('family_situation', ['married', 'single','divorces ','widower '])->nullable();
            $table->integer('telephone')->nullable();
            $table->integer('mobile_phone')->nullable();
            $table->set('military_status', ['completed', 'notCompleted','exempt'])->nullable();
            $table->date('date')->nullable();

            $table->unsignedBigInteger('department_id')->nullable();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');

            $table->string('job_title')->nullable();
            $table->string('hourly_wage')->nullable();
            $table->integer('count_day_work')->nullable();
            $table->integer('year')->nullable();
            $table->date('start_training')->nullable();
            $table->date('end_training')->nullable();
            $table->date('start_day')->nullable();
            $table->integer('count_daily_work')->nullable();
            $table->double('salary')->nullable();
            $table->text('notes')->nullable();
            $table->text('recommendation')->nullable();
            $table->integer('step')->default('1');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('advanceds');
    }
};
