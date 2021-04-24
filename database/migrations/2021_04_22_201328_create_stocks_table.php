<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->integer('merchant_id');
            $table->integer('product_id');
            $table->string('name');
            $table->mediumText('description')->nullable();
            $table->integer('quantity')->default(0);
            $table->integer('procurement_cost')->default(0);
            $table->integer('selling_price')->default(0);
            $table->enum('is_prescription_only', ['no', 'yes'])->default('no');
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
        Schema::dropIfExists('stocks');
    }
}
