<?php

namespace App\Http\Controllers;

use Parse\ParseObject;
use Parse\ParseQuery;
use Parse\ParseUser;
use Parse\ParseException;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Business\CropTypeBusiness;

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

    	return view('maintenance')->with("results", $results);
    }

    public function submitForm(Request $request){
        
        $parseCrop = new ParseObject("Crop");
        $newCropType = new CropTypeBusiness();
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

        
        $parseQuery = new ParseQuery("Crop");
        $parseQuery->equalTo("cropName", $request->input('cropName'));
        if ($parseQuery->count() > 0){

            return redirect('/maintenance');

        }

        $parseCrop->set("cropName",  $request->input('cropName'));
        $parseCrop->set("price", $request->input('cropPrice'));
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
        $parseCrop->set("cropDesc", $request->input('cropDesc'));
        $parseCrop->set("daysBeforeHarvest", $request->input('cropBeforeHarvest'));

        // Tawag mo nalang
        if($request->input('newcroptype') == null || strcmp($request->input('newcroptype'), "") == 0){
            $parseQuery = new ParseQuery("CropType");
            $parseQuery->equalTo("cropTypeDesc", $request->input('cropType'));
            $cropType = $parseQuery->first();
            $parseCrop->set("cropType", $cropType);
        }
        else {
            $cropTypeVar = $request->input('newcroptype');
            $parseQuery = new ParseQuery("CropType");
            $parseQuery->equalTo("cropTypeDesc", $cropTypeVar);
            if ($parseQuery->count() > 0){

                $cropType = $parseQuery->first();
                $parseCrop->set("cropType", $cropType);

            }else{
                $parseCropType = new ParseObject("CropType");
                $parseCropType->set("cropTypeDesc", $cropTypeVar);
                $parseCropType->save();
                $parseCrop->set("cropType", $parseCropType);
            }
        }



        if($request->input('newferttype') == null || strcmp($request->input('newferttype'), "") == 0){
            $parseQuery = new ParseQuery("Fertilizer");
            $parseQuery->equalTo("fertilizerDesc", $request->input('fertSelect'));
            $fertilizer = $parseQuery->first();
            $parseCrop->set("fertilizer", $fertilizer);
        }
        else {
            $fertTypeVar = $request->input('newferttype');

            $parseQuery = new ParseQuery("Fertilizer");
            $parseQuery->equalTo("fertilizerDesc", $fertTypeVar);
            if ($parseQuery->count() > 0){
                $fertilizer = $parseQuery->first();
                $parseCrop->set("fertilizer", $fertilizer);
            }else{
                $parseFertilizer = new ParseObject("Fertilizer");
                $parseFertilizer->set("fertilizerDesc", $fertTypeVar);
                $parseFertilizer->save();
                $parseCrop->set("fertilizer", $parseFertilizer);
            }
        }


        //task insertion
        try {
            $parseCrop->save();
            \Session::put('message', 1);
            return redirect('maintenance');
        } catch(ParseException $e) {
            \Session::put('message', -1);
            return redirect('maintenance');
        }
            

    }

    public function verifyUser(Request $request){
        $user = new ParseUser();
        $userQuery = ParseUser::query();

        try{
            $user = ParseUser::logIn($request->input('userName'), $request->input('userPass'));
            $currentUser = ParseUser::getCurrentUser();
            if(!$currentUser->get('isAdmin')) {
                \Session::put('message', 0);
                return redirect('/login');
            } else {
                $request->session()->put('username', $request->input('userName'));
                return redirect('/maintenance');
            }
        }
        catch (ParseException $e) {
            \Session::put('message', -1);
            return redirect('/login');
        }

    }

    public function logOut(Request $request) {
        \Session::forget('username');
        ParseUser::logOut();

        return redirect('/');
    }

    public function farmdashboard(){

        $farms = array();
        $parseQuery = new ParseQuery("Farm");
        //$parseQuery->select("[farmName, farmSize, farmer]");
        $results = $parseQuery->find();

        foreach ($results as $key => $farm) {
            $farms[$key] = array();
            array_push($farms[$key], $farm->get('farmName'));
            array_push($farms[$key], $farm->get('farmSize'));
            $parseFarmer = $farm->fetch('farmer');
            $farmerName = $parseFarmer->get('firstName') . $parseFarmer->get('lastName');
            var_dump($parseFarmer->get('username'));
            array_push($farms[$key], $parseFarmer->get('firstName') . $parseFarmer->get('lastName'));
        }

        return view('farm_dashboard')->with("farms",$farms);
    }

    public function cropdashboard(){

        $crops = array();
        $parseQuery = new ParseQuery("Crop");
        //$parseQuery->select("[farmName, farmSize, farmer]");
        $results = $parseQuery->find();

        foreach ($results as $key => $crop) {
            $crops[$key] = array();
            array_push($crops[$key], $crop->get('cropName'));
            array_push($crops[$key], $crop->get('cropDesc'));
            array_push($crops[$key], "P ".$crop->get('price'));
            array_push($crops[$key], $crop->get('daysBeforeHarvest'));
        }

        return view('crops_dashboard')->with("crops",$crops);

    }

    

}
