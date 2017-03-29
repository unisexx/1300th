<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPermissionGroupIdAndDepartmentsIdAndPositionIdAndUsernameAndTelColumsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->integer('permission_groups_id')->after('id');
          $table->integer('departments_id')->after('permission_groups_id');
          $table->integer('positions_id')->after('departments_id');
          $table->string('username', 100)->after('email');
          $table->string('tel', 200)->after('password');
          $table->tinyInteger('status');
          $table->softDeletes()->after('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
