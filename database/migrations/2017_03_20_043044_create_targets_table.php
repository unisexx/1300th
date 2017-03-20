<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTargetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('targets', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('parent_id');
          $table->string('code', 100);
          $table->string('name', 500);
          $table->integer('start_age');
          $table->integer('end_age');
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
        Schema::drop('targets');
    }
}
