<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('product_code', 50)->unique();
            $table->string('name');
            $table->decimal('price',18,0)->default(0);
            $table->tinyInteger('feature')->unsigned();
            $table->tinyInteger('state')->unsigned();
            $table->text('infor')->nullable()->default('Thông tin sản phẩm');
            $table->text('describe')->nullable()->default('Mô tả sản phẩm');
            $table->string('img');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
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
        Schema::dropIfExists('product');
    }
}
