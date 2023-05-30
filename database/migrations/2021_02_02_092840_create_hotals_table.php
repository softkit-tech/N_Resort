<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotals', function (Blueprint $table) {
            $table->id();
            $table->string('room_number')->nullable();
            $table->string('room_title')->nullable();
            $table->string('detail')->nullable();
            $table->text('room_details')->nullable();
            $table->string('status')->nullable();
            $table->string('perday')->nullable();
            $table->string('childen')->nullable();
            $table->string('adult')->nullable();
            $table->string('room_rate')->nullable();
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
        Schema::dropIfExists('hotals');
    }
}
