<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	public function up()
	{
		Schema::create('orders', function(Blueprint $table) {
            $table->id();
			$table->string('code', 200)->nullable(false);
			$table->enum('status', ['pending','canceled','succesed','failed'])->nullable(false)->default('pending');
            $table->decimal('total_price',10,2)->default(0);
            $table->unsignedBigInteger('user_id')->index();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('orders');
	}
}
