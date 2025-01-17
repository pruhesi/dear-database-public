<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_order_purchase_order_line', function (Blueprint $table) {
            $table->uuid('purchase_order_line_id');
            $table->uuid('purchase_order_id');
            $table->foreign('purchase_order_line_id')->references('id')->on('purchase_order_lines');
            $table->foreign('purchase_order_id')->references('id')->on('purchase_orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_order_purchase_order_line');
    }
};
