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
    public function tasks(){
        $results = array();
        $object = array();

        $queryTaskCategory = new ParseQuery("TaskCategory");
        $queryTaskCategory->select("taskCatDesc");
        $object = $queryTaskCategory->find();
        $results[0] = array();
        foreach ($object as $value) {
            array_push($results[0], $value);
        }

        $queryCrop = new ParseQuery("Crop");
        $queryCrop->select("cropTypeDesc");
        $object = $queryCrop->find();
        $results[1] = array();
        foreach ($object as $value) {
            array_push($results[1], $value);
        }        

        $queryTask = new ParseQuery("Task");
        $queryTask->select("taskDesc");
        $object = $queryTask->find();
        $results[2] = array();
        foreach ($object as $value) {
            array_push($results[2], $value);
        }   
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