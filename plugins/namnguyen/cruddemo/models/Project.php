<?php namespace Namnguyen\Cruddemo\Models;

use Model;

/**
 * Project Model
 */
class Project extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'namnguyen_cruddemo_projects';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

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
        'team' => '\Namnguyen\Cruddemo\Models\Team'
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}