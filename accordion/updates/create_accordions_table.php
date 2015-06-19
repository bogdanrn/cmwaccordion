<?php namespace CMW\Accordion\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateAccordionsTable extends Migration
{

    public function up()
    {
        if (!Schema::hasTable('cmw_accordion_accordions')){
            Schema::create('cmw_accordion_accordions', function($table)
            {
                $table->engine = 'InnoDB';
                $table->increments('id');
                $table->integer('order')->default(0);
                $table->string('title',300);
                $table->text('description');
                $table->boolean('button_enabled');
                $table->string('button_link',300);            
                $table->string('button_label',300);
                $table->timestamps();
            });
        }else {
               Schema::table('cmw_accordion_accordions', function($table)
                {
                    if (!Schema::hasColumn('cmw_accordion_accordions', 'button_enabled'))
                    {
                        $table->boolean('button_enabled')->default(false);
                    }

                });     
        }
    }

    public function down()
    {
        // Schema::dropIfExists('cmw_accordion_accordions');
    }

}
