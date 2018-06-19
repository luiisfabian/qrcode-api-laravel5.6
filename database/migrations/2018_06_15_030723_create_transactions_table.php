<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id'); //saber quien esta comprando
            $table->integer('qrcode_owner_id')->nullable();
            $table->integer('qrcode_id');
            $table->integer('payment_method')->nullable();    //diferentes medios de pagos, paypal, credit card, etc        
            $table->longText('message')->nullable(); // mensaje de 
            $table->float('amount', 10, 4);
            $table->string('status')->default('initiated');	
            $table->softDeletes();
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
        Schema::dropIfExists('transactions');
    }
}
