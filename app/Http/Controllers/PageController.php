<?php

namespace App\Http\Controllers;

use Parse\ParseObject;
use Parse\ParseQuery;
use Parse\ParseUser;

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
        $results = array();

        $queryCropType = new ParseQuery("CropType");
        $queryCropType->select("cropTypeDesc");
        $cropType = $queryCropType->find();
        $results[0] = array();           //QUERY ALL CROP TYPE PARSE OBJECTS
        foreach($cropType as $cType){
            array_push($results[0], $cType->get('cropTypeDesc'));
        }

        $queryFertilizer = new ParseQuery("Fertilizer");
        $fertilizer = $queryFertilizer->find();
        $results[1] = array();     //QUERY ALL FERTILIZER TYPE PARSE OBJECTS
        foreach($fertilizer as $fert){
            array_push($results[1], $fert->get('fertilizerDesc'));
        }

        var_dump($results);

    	return view('maintenance')->with("results", $results);
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
        $cropTypeVar = null;
        $fertTypeVar = null;
        $parseCropType = null;
        $parseFertilizer = null;

        if($request->input('newcroptype') == null || strcmp($request->input('newcroptype'), "") == 0){
            $parseCrop->set("cropType", $request->input('cropType'));
        }
        else {
            $cropTypeVar = $request->input('newcroptype');
            $parseCropType = new ParseObject("CropType");
            $parseCropType->set("cropTypeDesc", $cropTypeVar);
            $parseCropType->save();
            $parseCrop->set("cropType", $parseCropType);
        }

        if($request->input('newferttype') == null || strcmp($request->input('newferttype'), "") == 0){
            $parseCrop->set("fertilizer", $request->input('fertSelect'));
        }
        else {
            $fertTypeVar = $request->input('newferttype');
            $parseFertilizer = new ParseObject("Fertilizer");
            $parseFertilizer->set("fertilizerDesc", $fertTypeVar);
            $parseFertilizer->save();
            $parseCrop->set("fertilizer", $parseFertilizer);
        }

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
        $parseCrop->set("season", $request->input('season'));

        //task insertion

        $parseCrop->save();
        echo "SUCCESS";

    }

    public function verifyUser(Request $request){
        $user = new ParseUser();

        try{
            $user = ParseUser::logIn($request->input('userName'), $request->input('userPass'));
            return redirect()->route('maintenance');
        }
        catch (ParseException $e) {
            return view('landing');
        }

    }

    public function tasks(){
        $results = array();

        $queryTaskCategory = new ParseQuery("TaskCategory");
        $queryTaskCategory->select("taskCatDesc");
        $results[0] = $queryTaskCategory->find();

        $queryCrop = new ParseQuery("Crop");
        $queryCrop->select("cropTypeDesc");
        $results[1] = $queryCrop->find();

        $queryTask = new ParseQuery("Task");
        $queryTask->select("taskDesc");
        $results[2] = $queryTask->find();
    }

    public function addTaskCategory(Request $request){
        $parseTaskCategory = new ParseObject("TaskCategory");

        $parseTaskCategory->set("taskCatDesc", $request->input('taskCategoryName'));
        $parseTaskCategory->save();
    }

    public function addTask(Request $request){
        $parseTask = new ParseObject("Task");

        $parseTask->set("taskCategory", $request->input('taskCategory'));
        $parseTask->set("taskDesc", $request->input('taskName'));
        $parseTask->set("taskDuration", $request->input('taskDuration'));
        $parseTask->save();
    }

    public function assignTask(Request $request){
        $parseCrop = new ParseObject("Crop");

        //select muna ng crop dito = $request->input('crop')
        //$parseCrop->set("diKoAlamDito", $request->input('task'))
        //$parseCrop->save();
        //Paedit nlng. Di ko alam to. ^
    }
}
