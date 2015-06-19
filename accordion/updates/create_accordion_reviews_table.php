<?php namespace CMW\Accordion\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateAccordionReviewsTable extends Migration
{

    public function up()
    {
        if (!Schema::hasTable('cmw_accordion_accordions')){
            Schema::create('cmw_accordion_accordion_reviews', function($table)
            {
                $table->engine = 'InnoDB';
                $table->increments('id');
                $table->integer('accordion_id')->unsigned();
                $table->integer('order')->default(0);
                $table->string('name',300);
                $table->text('description');
                $table->integer('rating')->default(5);
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        // Schema::dropIfExists('cmw_accordion_accordion_reviews');
    }

}
