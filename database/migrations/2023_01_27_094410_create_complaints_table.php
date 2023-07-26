<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name',100)->nullable();
            $table->string('email',100)->nullable();
            $table->string('branch',100)->nullable();
            $table->string('priority',100)->nullable();
            $table->string('complaint',255)->nullable();
            $table->string('client_name',100)->nullable();
            $table->string('client_email',100)->nullable();
            $table->string('subject',100)->nullable();
            $table->string('department',100)->nullable();
        });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complaints');
    }
}
