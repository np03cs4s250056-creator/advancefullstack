<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->string('address')->nullable()->change();
            $table->date('date_of_birth')->nullable()->change();
        });

        Schema::table('courses', function (Blueprint $table) {
            $table->text('description')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->string('address')->nullable(false)->change();
            $table->date('date_of_birth')->nullable(false)->change();
        });

        Schema::table('courses', function (Blueprint $table) {
            $table->text('description')->nullable(false)->change();
        });
    }
};