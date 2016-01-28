<?php

namespace App\Http\Controllers;

use Parse\ParseObject;
use Parse\ParseQuery;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('index');
    }

    public function maintenance(){
    	return view('maintenance');
    }

    public function submitForm(Request $request){
        
        $parseCrop = new ParseObject("Crop");
        /*$crop->strCropType = $request->input('cropType');
        $crop->strCropName = $request->input('cropName');
        $crop->dblMinPh = $request->input('minPh');
        $crop->dblMaxPh = $request->input('maxPh');
        $crop->$dblMinSunlight = $request->input('minSunlight');
        $crop->$dblMaxSunlight = $request->input('maxSunlight');
        $crop->$dblMinMoisture = $request->input('minMoisture');
        $crop->$dblMaxMoisture = $request->input('maxMoisture');
        $crop->$dblMinTemp = $request->input('minTemp');
        $crop->$dblMaxTemp = $request->input('maxTemp');
        $crop->$dblPlantingDistance = $request->input('plantDist');
        $crop->$strSeason = $request->input('season');
        $crop->$strFertilizer = $request->input('fertSelect');
        $crop->$dblAmountOfFertilizer = $request->input('fertAmt');
        //$crop->$listTask = $request->input('listTask');               //how listTask? how array?
        
public $strCropName;
        public $strCropType;
        public $dblMinPh;
        public $dblMaxPh;
        public $dblMinSunlight;
        public $dblMaxSunlight;
        public $dblMinMoisture;
        public $dblMaxMoisture;
        public $dblMinTemp;
        public $dblMaxTemp;
        public $dblPlantingDistance;
        public $strSeason;
        public $strFertilizer;
        public $dblAmountOfFertilizer;

        $status = $this->cropBusiness($this->crop);
        
        if ($status == "error-validation"){

        }
        else if ($status == "error-validation"){
            
        }
        else if ($status == "success"){
            
        }*/

        $parseCrop->set("cropName",  $request->input('cropName'));
        $parseCrop->set("minPh", $request->input('minPh'));
        $parseCrop->set("maxPh", $request->input('maxPh'));
        $parseCrop->set("minMoisture", $request->input('minMoisture'));
        $parseCrop->set("maxMoisture", $request->input('maxMoisture'));
        $parseCrop->set("minSunlight", $request->input('minSunlight'));
        $parseCrop->set("maxSunlight", $request->input('maxSunlight'));
        $parseCrop->set("minTemp", $request->input('minTemp'));
        $parseCrop->set("maxTemp", $request->input('maxTemp'));
        $parseCrop->set("plantingDistance", $request->input('plantingDist'));
        $parseCrop->set("fertilizerAmount", $request->input('fertAmt'));

        $queryCropType = new ParseQuery("CropType");
        $queryCropType->equalTo("cropTypeDesc", $request->input('cropType'));
        if ($queryCrop->count() == 0){
            $parseCropType = new ParseObject("TaskCategory");
            $parseCropType->set("taskCatDesc", $request->input('cropType'));
            $parseCropType->save();
        }
        $cropType = $queryCropType->first();
        $parseCrop->set("cropType", $request->input('cropType'));

        $querySeason = new ParseQuery("Season");
        $querySeason->equalTo("seasonDesc", $request->input('season'));
        if ($querySeason->count() == 0){
            $parseSeason = new ParseObject("Season");
            $parseSeason->set("seasonDesc", $request->input('season'));
            $parseSeason->save();
        }
        $season = $querySeason->first();
        $parseCrop->set("season", $request->input('season'));

        $queryFertilizer = new ParseQuery("Fertilizer");
        $queryFertilizer->equalTo("fertilizerDesc", $request->input('fertSelect'));
        if ($queryFertilizer->count() == 0){
            $parseFertilizer = new ParseObject("Fertilizer");
            $parseFertilizer->set("fertilizerDesc", $request->input('fertSelect'));
            $parseFertilizer->save();
        }
        $fertilizer = $queryFertilizer->first();
        $parseCrop->set("fertilizer", $request->input('fertSelect'));

        //task insertion

        $parseCrop->save();
        echo "SUCCESS";

    }
}
