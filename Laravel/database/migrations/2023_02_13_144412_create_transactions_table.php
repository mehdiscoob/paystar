<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransactionsTable extends Migration {

	public function up()
	{
		Schema::create('transactions', function(Blueprint $table) {
            $table->id();
			$table->enum('status', array('active', 'failed', 'success'))->default("active");
			$table->decimal('price', 10,2)->default(0);
            $table->string('token', 300)->default(null);
			$table->unsignedBigInteger('order_id')->index();
			$table->timestamps();
			$table->softDeletes();
			$table->timestamp('date')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('transactions');
	}
}
