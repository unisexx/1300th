<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tickets extends Model
{
  use SoftDeletes;

  protected $fillable = array(
              'subj_ticket_number'
              ,'subj_ticket_ref_id'
              ,'subj_notify_date'
              // ,'subj_notify_time'
              ,'subj_status'
              ,'notify_users_id'
              ,'notify_channels_id'
              ,'notify_cable_types_id'
              ,'notify_category_infos_id'
              ,'notify_dept_infos_id'
              ,'notify_anonymous'
              ,'notify_prefixs_id'
              ,'notify_name'
              ,'notify_lastname'
              ,'notify_secondname'
              ,'notify_id_card'
              ,'notify_countries_id'
              ,'notify_provinces_id'
              ,'notify_amphoes_id'
              ,'notify_tumbons_id'
              ,'notify_tel'
              ,'notify_channel_knows_id'
              ,'event_date'
              // ,'event_time'
              ,'event_title'
              ,'event_location'
              ,'event_countries_id'
              ,'event_provinces_id'
              ,'event_amphoes_id'
              ,'event_tumbons_id'
              ,'event_summary'
              ,'risks_id'
              ,'risks_detail'
              ,'conclude_users_id'
              ,'conclude_positions_id'
              ,'conclude_notify_date'
              ,'conclude_date'
              // ,'conclude_time'
              ,'conclude_detail'
  );

  protected $dates = ['deleted_at'];
}
