<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('id');
            $table->date('order_date')->nullable();
            $table->date('arrived_date')->nullable();
            $table->string('status'); // Active,Pending,Approved,Finished, Cancelled
            
            $table->timestamps();

            //FK

            $table->integer('user_id')->unsigned(); //aqui se dira como se va a llamar en esta tabla
            //aqui se dice a quien tomara como referencia el user_id(tomara como referencia a "users") de esta tabla(carts), 
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
