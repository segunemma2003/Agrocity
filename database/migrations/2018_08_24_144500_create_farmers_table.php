<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('phone');
            $table->string('gender');
            $table->string('town');
            $table->string('state');
            $table->string('lga');
            $table->string('support');
            $table->string('group');
            $table->string('land');
            $table->string('ward');
            $table->string('crop');
            $table->string('bank');
            $table->string('accountno');
            $table->string('bvn');
            $table->string('rname');
            $table->string('raddress');
            $table->string('rphone');
            //uploads
            $table->string('nepareferee');
            $table->string('pixreferee');
            $table->string('passport');
            $table->string('certificates');
            $table->string('idcard');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('farmers');
    }
}
