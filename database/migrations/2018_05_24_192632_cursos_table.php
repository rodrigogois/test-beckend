<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 150);
            $table->string('category', 150);
            $table->string('description', 150);
            $table->decimal('price', 10,2);
            $table->dateTime('start');
            $table->dateTime('finish');
            $table->integer('address_id');
            $table->integer('consultant_id');
            

            $table->foreign('address_id', 'fk_cursos_address_id')
                ->references('id')->on('address')
                ->onDelete('no action')
                ->onUpdate('no action');

                $table->foreign('consultant_id', 'fk_cursos_consultant_id')
                ->references('id')->on('consultant')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
