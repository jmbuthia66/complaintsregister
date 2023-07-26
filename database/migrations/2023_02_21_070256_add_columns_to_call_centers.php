<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToCallCenters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('call_centers', function (Blueprint $table) {
            $table->string('policy_no',255);
            $table->string('client_no',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('call_centers', function (Blueprint $table) {
            $table->dropColumn('policy_no');
            $table->dropColumn('client_no');
        });
    }
}
