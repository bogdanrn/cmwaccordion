<?php namespace CMW\Accordion\Models;

use Model;

/**
 * AccordionLPE Model
 */
class AccordionLPE extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'cmw_accordion_accordion_l_p_es';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'accordionads' => ['CMW\Accordion\Models\AccordionAds',  'foreignKey'=>'accordion_ad_id'],
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}