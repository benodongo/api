<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            // This is an auto incrementing primary key
            $table->increments('id');
            // This is a string or integer provided by the customer
            $table->string('item_ref');
            // How many of this item are in this order?
            $table->integer('quantity');
            // This is a Forigin Key to the variants table, allowing us to know which of our item variants we want to provide in the order.
            $table->string('variant_id');
            // Timestamps are really useful for data monitoring. They let you see the created_at and updated_at times for the record.
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
        Schema::drop('items');
    }
}
