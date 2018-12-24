<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotoProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_produks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_produk');
            $table->string('path');
            $table->string('thumbnail_path');
            $table->string('alt');
            $table->boolean('isFeatured');
            $table->string('sort_order');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photo_produks');
    }
}
