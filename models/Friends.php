<?php namespace Clake\Userextended\Models;

use Model;
use \October\Rain\Database\Traits\SoftDelete;

/**
 * friends Model
 */
class Friends extends Model
{

    use SoftDelete;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'clake_userextended_friends';

    protected $dates = ['deleted_at'];

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
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}