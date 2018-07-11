<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBilleteraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billetera', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigoUsuarioPk');
            $table->integer('saldo');
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
        Schema::dropIfExists('billetera');
    }

    public function usuarios()
    {
        return $this->belongsTo('App\User', 'codigoUsuarioPk');
    }
}
