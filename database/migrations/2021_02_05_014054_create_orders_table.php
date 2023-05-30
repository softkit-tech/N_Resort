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
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('subtotal')->nullable();
            $table->string('total')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('tranction_id')->nullable();
            $table->string('bkash_number')->nullable();
            $table->string('status')->nullable();
            $table->string('adult')->nullable();
            $table->string('child')->nullable();
            $table->string('arrival_date')->nullable();
            $table->string('arrival_time')->nullable();
            $table->string('department_date')->nullable();
            $table->string('department_time')->nullable();
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
