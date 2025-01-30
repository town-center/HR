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
        Schema::create('last_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('phone');
            $table->string('job');
            $table->string('place');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('reason_leaving');
            $table->unsignedBigInteger('adv_id');
            $table->foreign('adv_id')->references('id')->on('advanceds')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('last_jobs');
    }
};
