<?php namespace CMW\Accordion\Updates;



use Schema;

use October\Rain\Database\Updates\Migration;



class CreateAccordionAdsTable extends Migration

{



    public function up()

    {
        if (!Schema::hasTable('cmw_accordion_accordion_ads')){
            Schema::create('cmw_accordion_accordion_ads', function($table)

            {

                $table->engine = 'InnoDB';

                $table->increments('id');

                $table->integer('accordion_id')->unsigned();

                $table->integer('order')->default(0);

                $table->string('title',300);

                // $table->string('email',300);

                // $table->string('phone',300);

                // $table->string('website_name',300);

                // $table->string('website_link',300);

                $table->text('description');

                $table->boolean('button_enabled');

                $table->timestamps();

            });

        }else{
                Schema::table('cmw_accordion_accordion_ads', function($table)

                {

                    if (!Schema::hasColumn('cmw_accordion_accordion_ads', 'email'))

                    {

                        $table->dropColumn('email');

                    }

                    if (!Schema::hasColumn('cmw_accordion_accordion_ads', 'phone'))

                    {

                        $table->dropColumn('phone');

                    }

                    if (!Schema::hasColumn('cmw_accordion_accordion_ads', 'website_name'))

                    {

                        $table->dropColumn('website_name');

                    }

                    if (!Schema::hasColumn('cmw_accordion_accordion_ads', 'website_link'))

                    {

                        $table->dropColumn('website_link');

                    }



                });            

        }

    }



    public function down()

    {

        // Schema::dropIfExists('cmw_accordion_accordion_ads');

    }



}

