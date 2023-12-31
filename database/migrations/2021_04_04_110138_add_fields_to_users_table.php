<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->integer('role_id');
            
            $table->string('phone_number',100)->nullable();
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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->integer('role_id');
            $table->string('address',1000)->nullable();
            $table->string('phone_number',100)->nullable();
            $table->string('department',100)->nullable();
            $table->string('image')->nullable();
            $table->string('education',100)->nullable();
            $table->text('description')->nullable();
        });
    }
}
