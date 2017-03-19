<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTumbonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tumbons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('provinces_id');
            $table->integer('amphoes_id');
            $table->string('code', 100);
            $table->string('name', 100);
            $table->tinyInteger('status');
            $table->integer('seq');
            $table->integer('standard_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tumbons');
    }
}
