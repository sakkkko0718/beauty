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
        Schema::create('posttreatments', function (Blueprint $table) {
            $table->id();
            $table->integer('post_id');
            $table->integer('treatment_id');
            $table->integer('count');
            $table->string('picture');
            $table->text('comment');
            $table->integer('review');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posttreatments');
    }
};
