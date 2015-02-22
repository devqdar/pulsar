<?php namespace Syscover\Pulsar\Controllers;

/**
 * @package	    Pulsar
 * @author	    Jose Carlos Rodríguez Palacín
 * @copyright   Copyright (c) 2015, SYSCOVER, SL
 * @license
 * @link		http://www.syscover.com
 * @since		Version 2.0
 * @filesource
 */

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Syscover\Pulsar\Models\Country;
use Syscover\Pulsar\Models\TerritorialArea1;
use Syscover\Pulsar\Models\TerritorialArea2;
use Syscover\Pulsar\Traits\ControllerTrait;

class TerritorialAreas2 extends Controller {

    use ControllerTrait;

    protected $routeSuffix  = 'TerritorialArea2';
    protected $folder       = 'territorial_areas_2';
    protected $package      = 'pulsar';
    protected $aColumns     = ['id_004', 'name_003', 'name_004'];
    protected $nameM        = 'name_004';
    protected $model        = '\Syscover\Pulsar\Models\TerritorialArea2';
    protected $icon         = 'entypo-icon-globe';
    protected $objectTrans  = 'territorial_area';


    public function indexCustom($parameters)
    {
        $parameters['country'] = Country::getTranslationRecord($parameters['country'], Session::get('baseLang')->id_001);

        return $parameters;
    }

    public function customActionUrlParameters($actionUrlParameters, $parameters)
    {
        $actionUrlParameters['country'] = $parameters['country'];

        return $actionUrlParameters;
    }

    public function createCustomRecord($parameters)
    {
        $parameters['territorialAreas1']    = TerritorialArea1::getTerritorialAreas1FromCountry($parameters['country']);
        $parameters['country']              = Country::getTranslationRecord($parameters['country'], Session::get('baseLang')->id_001);

        return $parameters;
    }

    public function storeCustomRecord($parameters)
    {
        TerritorialArea2::create([
            'id_004'                    => Input::get('id'),
            'country_004'               => $parameters['country'],
            'territorial_area_1_004'    => Input::get('territorialArea1'),
            'name_004'                  => Input::get('name')
        ]);
    }

    public function editCustomRecord($parameters)
    {
        $parameters['territorialAreas1']    = TerritorialArea1::getTerritorialAreas1FromCountry($parameters['country']);
        $parameters['country']              = Country::getTranslationRecord($parameters['country'], Session::get('baseLang')->id_001);

        return $parameters;
    }
    
    public function updateCustomRecord($parameters)
    {
        TerritorialArea2::where('id_004', $parameters['id'])->update([
            'id_004'                    => Input::get('id'),
            'territorial_area_1_004'    => Input::get('territorialArea1'),
            'name_004'                  => Input::get('name')
        ]);
    }


    public function jsonTerritorialAreas2FromTerritorialArea1($country, $id)
    {
        $data['json'] = null;
        if($id!="null") $data['json'] = TerritorialArea1::find($id)->territorialAreas2()->get()->toJson();

        return view('pulsar::common.json_display', $data);
    }
}