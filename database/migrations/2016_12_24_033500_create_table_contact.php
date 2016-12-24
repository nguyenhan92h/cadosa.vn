<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('full_name');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email');
            $table->text('content')->nullable();
            $table->tinyInteger('health_advice')->default(0);
            $table->tinyInteger('nutrition_advice')->default(0);
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
        Schema::drop('contact');
    }
}
