<?php namespace Syscover\Pulsar\Models;

/**
 * @package	    Pulsar
 * @author	    Jose Carlos Rodríguez Palacín
 * @copyright   Copyright (c) 2015, SYSCOVER, SL
 * @license
 * @link		http://www.syscover.com
 * @since		Version 2.0
 * @filesource
 */

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Syscover\Pulsar\Traits\ModelTrait;

class Preference extends Model {

    use ModelTrait;

	protected $table        = '001_018_preference';
    protected $primaryKey   = 'id_018';
    public $timestamps      = false;
    protected $fillable     = ['id_018', 'value_018', 'package_018'];
    private static $rules   = [];

    public static function validate($data)
    {
        return Validator::make($data, static::$rules);
    }

    public static function destroyValue($id)
    {
        return Preference::destroy($id);
    }

    public static function getValue($id, $package, $default = "")
    {
        return Preference::firstOrCreate([
            'id_018'        => $id,
            'package_018'   => $package
        ]);
    }

    public static function setValue($id, $value, $package)
    {
        return Preference::updateOrCreate(['id_018' => $id],[
            'value_018'     => $value,
            'package_018'   => $package
        ]);
    }
}