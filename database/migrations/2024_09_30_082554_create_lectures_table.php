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
        Schema::create('lectures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('week_no');
            $table->string('title')->unique();
            $table->string('title_slug')->unqiue();
            $table->text('description');
            $table->longtext('objective')->nullable();
            $table->longtext('instruction')->nullable();
            $table->text('module_src')->nullable();
            $table->longText('questions')->nullable();
            $table->longText('labs')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lectures');
    }
};
