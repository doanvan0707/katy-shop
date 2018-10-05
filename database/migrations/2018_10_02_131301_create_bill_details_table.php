<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_datails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('qtt');
            $table->double('unit_price', 8, 2); 
            $table->integer('id_bill')->nullabel()->unsigned();
            $table->foreign('id_bill')->references('id')->on('bills');
            $table->integer('id_product')->nullable()->unsigned();
            $table->foreign('id_product')->references('id')->on('products');
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
        Schema::dropIfExists('bill_datails');
    }
}
