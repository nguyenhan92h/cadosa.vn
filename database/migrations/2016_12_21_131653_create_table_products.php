<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->string('code');
            $table->string('title');
            $table->string('slug')->default('');
            $table->text('content');
            $table->string('image')->nullable();
            $table->text('image_slide');
            $table->enum('status', ['CÒN HÀNG', 'HẾT HÀNG'])->default('CÒN HÀNG');
            $table->boolean('featured')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
