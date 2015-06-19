<?php namespace CMW\Accordion\Components;



use Cms\Classes\ComponentBase;

use CMW\Accordion\Models\Accordion as AccordionModel;

use CMW\Accordion\Models\AccordionReviews as AccordionReviewsModel;

use CMW\Accordion\Models\AccordionAd as AccordionAdModel;

use CMW\Accordion\Models\AccordionLPE as AccordionLPEModel;

use Clockwork\Support\Laravel\Facade as Clockwork;



class Accordion extends ComponentBase

{

    public $accordions;

    public $accordions_reviews;

    public $accordions_ads;




    public function componentDetails()

    {

        return [

            'name'        => 'Accordion',

            'description' => 'Add slider to a accordion'

        ];

    }



    public function defineProperties()

    {

        return [ 

            'accordion' => [

                 'title'             => 'Accordion',

                 'description'       => 'Select the accordion you want to be displayed',

                 'type'              => 'dropdown',

                 'required'         => true,

            ]

        ];

    }



   /* public function getSliderOptions()

    {

        $accordions = AccordionModel::all();



        $return = array();

        foreach ($accordions as $accordion){



            $accordions[$accordion->id]=$accordion->title;

        }



        return $return;

    }*/



    public function onRun(){

        $this->accordions = AccordionModel::all();

        //$this->initRelation($this->accordions);



        //$this->accordions_reviews = AccordionReviewsModel::all();

    }



}