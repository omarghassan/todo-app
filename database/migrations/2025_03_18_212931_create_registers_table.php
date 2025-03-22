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
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table ->string('email')->unique();
            $table ->string('full_name');
            $table ->string('password');
            $table ->enum('gender',['male', 'female']);
            $table ->enum('age_group',['below_18','18_25','26_35','36_45','46_55','above_55']);
            $table ->enum('education_level',['school','university','post_graduate']);
            $table ->text('interests');
            $table ->string('phone')->nullable();
            $table ->string('address')->nullable();
            $table ->boolean('work')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registers');
    }
};
