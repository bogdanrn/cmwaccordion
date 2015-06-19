<?php namespace CMW\Accordion\Models;



use Model;

use System\Models\File;



/**

 * Accordion Model

 */

class Accordion extends Model

{



    /**

     * @var string The database table used by the model.

     */

    public $table = 'cmw_accordion_accordions';



    /**

     * @var array Guarded fields

     */

    protected $guarded = ['id'];



    /**

     * @var array Fillable fields

     */

    protected $fillable = [];



    /**

     * @var array Relations

     */

    public $hasOne = [];

    public $hasMany = [
        'accordionreviews' => ['CMW\Accordion\Models\AccordionReviews'],
        'accordionads' => ['CMW\Accordion\Models\AccordionAd'],        
    ];

    public $belongsTo = [];

    public $belongsToMany = [];

    public $morphTo = [];

    public $morphOne = [];

    public $morphMany = [];

    public $attachOne = [];

    public $attachMany = [

        'pictures' => ['System\Models\File', 'order' => 'sort_order'],

    ];



}