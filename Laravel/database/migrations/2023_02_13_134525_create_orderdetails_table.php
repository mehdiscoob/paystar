<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderdetailsTable extends Migration {

	public function up()
	{
		Schema::create('orderdetails', function(Blueprint $table) {
            $table->id();
			$table->integer('count')->default(1);
			$table->decimal('total',10,2)->default(0);
            $table->unsignedBigInteger('order_id')->index();
            $table->unsignedBigInteger('product_id')->index();
            $table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('orderdetails');
	}
}
