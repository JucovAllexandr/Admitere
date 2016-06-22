<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('obiect1');
            $table->integer('nota1');
            $table->string('obiect2');
            $table->integer('nota2');
            $table->string('obiect3');
            $table->integer('nota3');
            $table->string('obiect4');
            $table->integer('nota4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('notes');
    }
}
