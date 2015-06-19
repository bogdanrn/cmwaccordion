<?php namespace CMW\Accordion\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateAccordionLPEsTable extends Migration
{

    public function up()
    {
        Schema::create('cmw_accordion_accordion_l_p_es', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('accordion_ad_id')->unsigned();
            $table->integer('accordion_id')->unsigned();
            $table->string('type');            
            $table->string('label',500);
            $table->string('value',500);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cmw_accordion_accordion_l_p_es');
    }

}
