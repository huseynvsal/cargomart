<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('storage');
            $table->text('website');
            $table->text('track');
            $table->text('category');
            $table->text('count');
            $table->text('price');
            $table->text('currency');
            $table->text('invoice');
            $table->text('information');
            $table->string('status')->default('new_order');
            $table->tinyInteger('liquid')->default(0);
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
        Schema::dropIfExists('orders');
    }
}
