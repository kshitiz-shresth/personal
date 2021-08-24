<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRashifalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rashifals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('today_nepali_date')->nullable();
            $table->text('title')->nullable();
            $table->longText('rashifal')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rashifals');
    }
}
