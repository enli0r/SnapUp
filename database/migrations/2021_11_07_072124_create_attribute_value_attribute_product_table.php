<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributeValueAttributeProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute_value_attribute_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('attribute_product_id');
            $table->unsignedBigInteger('attribute_value_id');

            $table->foreign('attribute_product_id')->references('id')->on('attribute_product');
            $table->foreign('attribute_value_id')->references('id')->on('attribute_values');

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
        Schema::dropIfExists('attribute_value_attribute_product');
    }
}
