<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_details', function (Blueprint $table) {
                       $table->increments('id');
			$table->integer('id_hoadon')->unsigned();
			$table->foreign('id_hoadon')->references('id')->on('bills')->onDelete('cascade');
			$table->integer('id_sanpham')->unsigned();
			$table->foreign('id_sanpham')->references('id')->on('products')->onDelete('cascade');
			$table->integer('soluong');
			$table->integer('giasp');
			$table->integer('tong_giasp');
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
        Schema::dropIfExists('bill_details');
    }
}
