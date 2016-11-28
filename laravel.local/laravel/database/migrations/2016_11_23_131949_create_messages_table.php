<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       $chema::create('messages', function (Blueprint $table){
	     $table->increments('id');
		 $table->string('name')->index();
		 $table->text('email')->nullable()->index();
		 $table->text('message');
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
       $chema::drop('messages');
    }
}
