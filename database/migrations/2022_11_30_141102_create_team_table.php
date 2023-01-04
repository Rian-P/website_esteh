<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team', function (Blueprint $table) {
            $table->id();
            $table->string ('image')->default("");
            $table->string('name');
            $table->string('title');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('jabatan');
            $table->string('pendidikan');
            $table->string('keterangan1');
            $table->string('keterangan2');
            $table->string('keterangan3');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
           
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
        Schema::dropIfExists('team');
    }
}
