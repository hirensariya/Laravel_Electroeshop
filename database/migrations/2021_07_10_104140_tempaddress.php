<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tempaddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temptable', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('userid');
            $table->string('oname');
            $table->string('ophone');
            $table->string('oaddress');
            $table->string('oaddress2');
            $table->string('ocity');
            $table->string('odistric');
            $table->string('ozip');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
