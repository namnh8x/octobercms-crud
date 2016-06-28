<?php namespace Namnguyen\Cruddemo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateProjectsTable extends Migration
{

    public function up()
    {
        Schema::create('namnguyen_cruddemo_projects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->text('description');
            $table->datetime('ends_at');
            $table->integer('team_id')->unsigned();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('namnguyen_cruddemo_projects');
    }

}
