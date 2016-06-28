<?php namespace Namnguyen\Cruddemo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateTeamsTable extends Migration
{

    public function up()
    {
        Schema::create('namnguyen_cruddemo_teams', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('namnguyen_cruddemo_teams');
    }

}
