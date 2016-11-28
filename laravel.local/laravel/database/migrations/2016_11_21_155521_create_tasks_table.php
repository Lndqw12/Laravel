<?php
 
class Create_Tasks_Table {
 
	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schee('tasks', function($table) 
		{
			$table->increments('id');
			$table->string('title');
			$table->boolean('completed')->default(0);			
		});
	}
 
	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tasks');
	}
 
}ma::creat
