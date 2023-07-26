<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('call_centers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name',100)->nullable();
            $table->string('email',100)->nullable();
            $table->string('client_id',100)->nullable();
            $table->string('query_type',100)->nullable();
            $table->string('action',255)->nullable();
            $table->string('client_name',100)->nullable();
            $table->string('client_email',100)->nullable();
            $table->string('priority',100)->nullable();
            $table->string('status',100)->nullable();
            $table->string('date_closed',100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('call_centers');
    }
}
