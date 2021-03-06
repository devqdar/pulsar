<?php namespace Syscover\Pulsar\Models;

/**
 * @package	    Pulsar
 * @author	    Jose Carlos Rodríguez Palacín
 * @copyright   Copyright (c) 2015, SYSCOVER, SL
 * @license
 * @link		http://www.syscover.com
 * @since		Version 1.0
 * @filesource
 */

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Syscover\Pulsar\Traits\ModelTrait;

class Resource extends Model
{
    use ModelTrait;

	protected $table        = '001_007_resource';
    protected $primaryKey   = 'id_007';
    public $timestamps      = false;
    protected $fillable     = ['id_007', 'name_007', 'package_007'];
    private static $rules   = [
        'id'        =>  'required|between:2,30|unique:001_007_resource,id_007',
        'module'    =>  'not_in:null',
        'name'      =>  'required|between:2,50'
    ];

    public static function validate($data, $specialRules = [])
    {
        if(isset($specialRules['idRule']) && $specialRules['idRule']) static::$rules['id'] = 'required|between:2,30';

        return Validator::make($data, static::$rules);
    }

    public static function getCustomRecordsLimit()
    {
        return Resource::join('001_012_package', '001_007_resource.package_007', '=', '001_012_package.id_012')->newQuery();
    }
}