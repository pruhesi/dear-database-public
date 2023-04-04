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
        Schema::create('sale_quote_lines', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('product_guid');
            $table->text('sku');
            $table->text('name');
            $table->decimal('quantity', 12, 4);
            $table->decimal('price', 12, 4);
            $table->decimal('discount', 12, 2);
            $table->decimal('tax', 12, 4);
            $table->decimal('average_cost', 12, 4);
            $table->text('tax_rule');
            $table->text('comment')->nullable();
            $table->decimal('total', 12, 4);
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
        Schema::dropIfExists('sale_quote_lines');
    }
};
