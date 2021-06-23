<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->string('avatar')->nullable();
            $table->string('address')->nullable();;
            $table->string('email')->nullable();;
            $table->date('date');
            $table->integer('quantity');
            $table->float('total', 25, 2);
            $table->string('note')->nullable();
        });
    }
    public $timestamps = false;
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
