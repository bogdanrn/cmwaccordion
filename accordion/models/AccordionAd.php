<?php namespace CMW\Accordion\Models;



use Model;



/**

 * AccordionAd Model

 */

class AccordionAd extends Model

{



    /**

     * @var string The database table used by the model.

     */

    public $table = 'cmw_accordion_accordion_ads';



    /**

     * @var array Guarded fields

     */



    protected $guarded = ['accordion_id'];



    /**

     * @var array Fillable fields

     */

    protected $fillable = [];



    /**

     * @var array Relations

     */

    public $hasOne = [];

    public $hasMany = [
        'accordionlpe' => ['CMW\Accordion\Models\AccordionLPE']
    ];

    public $belongsTo = [

        'accordion' => ['CMW\Accordion\Models\Accordion',  'foreignKey'=>'accordion_id'],

    ];

    public $belongsToMany = [];

    public $morphTo = [];

    public $morphOne = [];

    public $morphMany = [];

    public $attachOne = [

        'picture' => ['System\Models\File', 'order' => 'sort_order'],

    ];

    public $attachMany = [];



}