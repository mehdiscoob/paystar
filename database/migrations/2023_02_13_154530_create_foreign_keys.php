<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('bank_card_numbers', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('bank_card_numbers', function(Blueprint $table) {
			$table->foreign('bank_id')->references('id')->on('banks')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('orders', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
        Schema::table('orderdetails', function(Blueprint $table) {
            $table->foreign('order_id')->references('id')->on('orders')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('orderdetails', function(Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('transactions', function(Blueprint $table) {
            $table->foreign('order_id')->references('id')->on('orders')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

	}

	public function down()
	{
		Schema::table('bank_card_numbers', function(Blueprint $table) {
			$table->dropForeign('bank_card_numbers_user_id_foreign');
		});
		Schema::table('bank_card_numbers', function(Blueprint $table) {
			$table->dropForeign('bank_card_numbers_bank_id_foreign');
		});
		Schema::table('orders', function(Blueprint $table) {
			$table->dropForeign('orders_user_id_foreign');
		});
        Schema::table('orderdetails', function(Blueprint $table) {
            $table->dropForeign('orderdetails_order_id_foreign');
        });
        Schema::table('orderdetails', function(Blueprint $table) {
            $table->dropForeign('orderdetails_product_id_foreign');
        });
        Schema::table('transactions', function(Blueprint $table) {
            $table->dropForeign('transactions_order_id_foreign');
        });

	}
}
