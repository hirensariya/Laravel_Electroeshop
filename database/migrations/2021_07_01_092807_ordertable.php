<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ordertable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordertable', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('userid');
            $table->string('payid');
            $table->string('pid');
            $table->string('pname');
            $table->string('pqty');
            $table->string('pprice');
            $table->string('oname');
            $table->string('ophone');
            $table->string('oaddress');
            $table->string('oaddress2');
            $table->string('ocity');
            $table->string('odistric');
            $table->string('ozip');
            $table->timestamp('date');
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