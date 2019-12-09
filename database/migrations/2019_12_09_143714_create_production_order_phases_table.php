<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductionOrderPhasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('production_order_phases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('process_id')->unsigned();
            $table->bigInteger('machine_id')->unsigned();
            $table->text('description');
            $table->double('qty');
            $table->bigInteger('unit_id')->unsigned();
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('production_orders')->onDelete('cascade');
            $table->foreign('process_id')->references('id')->on('processes')->onDelete('restrict');
            $table->foreign('machine_id')->references('id')->on('machines')->onDelete('restrict');
            $table->foreign('unit_id')->references('id')->on('units')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('production_order_phases');
    }
}
