<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVariants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variants', function (Blueprint $table) {
            // This is an auto incrementing primary key
            $table->increments('id');
            // OPTIONALLY:
            // an item can have an SKU. This is a unique id and is great for a primary key, but there are ongoing debates in the MySQL community over this being a good or bad idea. Auto incrementing fields are easier to index after all.
            //
            // If you wanted to include an SKU you could do it by using the following:
            //$table->string('sku')->unique();
            // This is the garment size
            $table->string('size');
            // This is the garment brand
            $table->string('brand');
            // This is the garment type
            $table->string('type');
            // This is the garment colour
            $table->string('colour');
            // This is the garment design
            $table->string('design');
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
        Schema::drop('variants');
    }
}
