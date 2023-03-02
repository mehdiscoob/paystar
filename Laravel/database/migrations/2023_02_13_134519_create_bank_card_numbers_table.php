<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBankCardNumbersTable extends Migration {

	public function up()
	{
		Schema::create('bank_card_numbers', function(Blueprint $table) {
			$table->id();
			$table->string('cardnumber', 16)->nullable(false);
			$table->unsignedBigInteger('bank_id')->index();
			$table->unsignedBigInteger('user_id')->index();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('bank_card_numbers');
	}
}
