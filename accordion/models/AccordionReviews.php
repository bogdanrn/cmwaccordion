<?php namespace CMW\Accordion\Models;

use Model;
use System\Models\File;

/**
 * AccordionReviews Model
 */
class AccordionReviews extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'cmw_accordion_accordion_reviews';

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
    public $hasMany = [];
    public $belongsTo = [
        'accordion' => ['CMW\PageSlider\Models\Accordion',  'foreignKey'=>'accordion_id'],
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