<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('systems_id');
            $table->string('name', 500);
            $table->tinyInteger('action_view');
            $table->tinyInteger('action_add');
            $table->tinyInteger('action_edit');
            $table->tinyInteger('action_delete');
            $table->tinyInteger('action_extra1');
            $table->tinyInteger('action_extra2');
            $table->tinyInteger('action_extra3');
            $table->tinyInteger('action_extra4');
            $table->tinyInteger('action_extra5');
            $table->string('module', 500);
            $table->integer('seq');
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
        Schema::drop('permissions');
    }
}
