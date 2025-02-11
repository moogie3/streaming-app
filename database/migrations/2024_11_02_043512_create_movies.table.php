<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('trailer');
            $table->string('movie');
            $table->string('casts');
            $table->string('categories');
            $table->string('small_thumbnail');
            $table->string('big_thumbnail');
            $table->date('release_date');
            $table->text('about');
            $table->string('short_about');
            $table->string('duration');
            $table->boolean('featured');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};