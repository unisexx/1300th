<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserserviceTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userservice_types', function (Blueprint $table) {
          $table->increments('id');
          $table->string('code', 100);
          $table->string('name', 200);
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
        Schema::drop('userservice_types');
    }
}
