<?php namespace Namnguyen\Cruddemo\Models;

use Model;

/**
 * Team Model
 */
class Team extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'namnguyen_cruddemo_teams';

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
    public $hasMany = [
        'projects' => '\Namnguyen\Cruddemo\Projects',
        'users' => '\Backend\Models\User'
    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}