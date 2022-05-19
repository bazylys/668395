<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_book_store', function (Blueprint $table) {
            $table->foreignId('book_id')->references('id')->on('books');
            $table->foreignId('book_store_id')->references('id')->on('book_stores');
            $table->unsignedSmallInteger('count')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_store_books');
    }
};
