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
        Schema::create('purchase_stock_purchase_stock_line', function (Blueprint $table) {
            $table->uuid('purchase_stock_line_id');
            $table->uuid('purchase_stock_id');
            $table->foreign('purchase_stock_line_id')->references('id')->on('purchase_stock_lines');
            $table->foreign('purchase_stock_id')->references('id')->on('purchase_stocks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_stock_purchase_stock_line');
    }
};
