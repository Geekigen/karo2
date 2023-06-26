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
        Schema::dropIfExists('fees');
        Schema::create('fees', function (Blueprint $table) {
            $table->id();
            $table->string('ammount');
            $table->string('adm');
            $table->foreign('adm')->references('adm')->on('students')->onDelete('cascade');
            $table->string('term');
            $table->string('status');
            $table->string('balance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fees');
    }
};
