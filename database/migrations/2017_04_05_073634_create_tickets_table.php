<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subj_ticket_number');
            $table->integer('subj_ticket_ref_id');
            $table->timestamp('subj_notify_date');
            $table->timestamp('subj_notify_time');
            $table->integer('subj_status');
            $table->integer('notify_users_id');
            $table->integer('notify_channels_id');
            $table->integer('notify_cable_types_id');
            $table->integer('notify_category_infos_id');
            $table->integer('notify_dept_infos_id');
            $table->integer('notify_anonymous');
            $table->integer('notify_prefixs_id');
            $table->string('notify_name', 200);
            $table->string('notify_lastname', 200);
            $table->string('notify_secondname', 200);
            $table->string('notify_id_card', 50);
            $table->integer('notify_countries_id');
            $table->integer('notify_provinces_id');
            $table->integer('notify_amphoes_id');
            $table->integer('notify_tumbons_id');
            $table->string('notify_tel', 100);
            $table->integer('notify_channel_knows_id');
            $table->timestamp('event_date');
            $table->timestamp('event_time');
            $table->string('event_title', 2000);
            $table->string('event_location', 2000);
            $table->integer('event_countries_id');
            $table->integer('event_provinces_id');
            $table->integer('event_amphoes_id');
            $table->integer('event_tumbons_id');
            $table->string('event_summary', 2000);
            $table->string('risk_id', 200);
            $table->string('risk_detail', 2000);
            $table->integer('conclude_users_id');
            $table->integer('conclude_positions_id');
            $table->timestamp('conclude_notify_date');
            $table->timestamp('conclude_date');
            $table->timestamp('conclude_time');
            $table->string('conclude_detail', 2000);
            $table->string('reserve_1', 200);
            $table->string('reserve_2', 200);
            $table->string('reserve_3', 200);
            $table->string('reserve_4', 200);
            $table->string('reserve_5', 200);
            $table->integer('reserve_6', 200);
            $table->integer('reserve_7', 200);
            $table->integer('reserve_8', 200);
            $table->timestamp('reserve_9');
            $table->timestamp('reserve_10');
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
        Schema::drop('tickets');
    }
}
