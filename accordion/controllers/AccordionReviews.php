<?php namespace CMW\Accordion\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Accordion Reviews Back-end Controller
 */
class AccordionReviews extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('CMW.Accordion', 'accordion', 'accordionreviews');
    }
}