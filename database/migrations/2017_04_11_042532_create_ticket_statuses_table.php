<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('ticket_statuses', function (Blueprint $table) {
        $table->increments('id');
        $table->string('code', 100);
        $table->string('name', 200);
        $table->string('icon', 200);
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
      Schema::drop('ticket_statuses');
    }
}
