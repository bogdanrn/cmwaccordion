<?php namespace CMW\Accordion\Controllers;



use BackendMenu;

use Backend\Classes\Controller;



/**

 * Accordion Ad Back-end Controller

 */

class AccordionAd extends Controller

{

    public $implement = [

        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.RelationController',


    ];



    public $formConfig = 'config_form.yaml';

    public $listConfig = 'config_list.yaml';

    public $relationConfig = 'config_relations.yaml';


    public function __construct()

    {

        parent::__construct();



        BackendMenu::setContext('CMW.Accordion', 'accordion', 'accordionad');

    }

}