<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductionOrderBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('production_order_bills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('raw_id')->unsigned();
            $table->bigInteger('process_id')->unsigned();
            $table->double('qty');
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('production_orders')->onDelete('cascade');
            $table->foreign('raw_id')->references('id')->on('raw_materials')->onDelete('restrict');
            $table->foreign('process_id')->references('id')->on('processes')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('production_order_bills');
    }
}
