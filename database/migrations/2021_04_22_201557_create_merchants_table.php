<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo')->nullable()->default('noimage.jpg');
            $table->mediumText('address')->nullable();
            $table->string('email')->nullable();
            $table->string('telephone')->nullable();
            $table->string('coordinates')->nullable();
            $table->string('type')->default('pharmacy');
            $table->enum('is_active', ['yes', 'no'])->default('yes');
            $table->enum('is_verified', ['yes', 'no'])->default('no');
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
        Schema::dropIfExists('merchants');
    }
}
