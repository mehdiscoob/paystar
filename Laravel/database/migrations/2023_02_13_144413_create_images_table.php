<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImagesTable extends Migration {

	public function up()
	{
		Schema::create('images', function(Blueprint $table) {
            $table->id();
            $table->string('imageable_type', 300)->default(null);
            $table->integer('imageable_id')->default(null);
            $table->string('path', 300)->default(null);
			$table->timestamps();
			$table->softDeletes();
			$table->timestamp('date')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('images');
	}
}
