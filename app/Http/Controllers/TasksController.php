<?php

namespace App\Http\Controllers;

use Parse\ParseObject;
use Parse\ParseQuery;
use Parse\ParseUser;
use Parse\ParseException;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{
    public function tasks(){
        $results = array();
        $object = array();

        $queryCrop = new ParseQuery("Crop");
        $queryCrop->select("cropName");
        $object = $queryCrop->find();
        foreach ($object as $value) {
            array_push($results, $value->get('cropName'));
        }        

        return view('tasks')->with("results", $results);
    }

    public function addTaskCategory(Request $request){
        $parseTaskCategory = new ParseObject("TaskCategory");

        $parseTaskCategory->set("taskCatDesc", $request->input('taskCategoryName'));
        $parseTaskCategory->save();
    }

    public function addTask(Request $request){
        $parseTask = new ParseObject("Task");

        $parseCropQuery = new ParseQuery("Crop");
        $parseCropQuery->equalTo("cropName", $request->input('crop'));
        $crop = $parseCropQuery->first();

        $parseQuery = new ParseQuery("Task");
        $parseQuery->equalTo("cropName",$crop);
        $parseQuery->equalTo("taskDesc", $request->input('taskName'));
        if ($parseQuery->count() > 0){
            return redirect('/tasks');
        }

        $parseTask->set("cropName", $crop);
        $parseTask->set("taskDesc", $request->input('taskName'));
        $parseTask->set("taskDuration", $request->input('taskDuration'));
        $parseTask->set("taskStart", $request->input('taskStart'));
        try {
             $parseTask->save();
             \Session::put('message', 1);
             return redirect('tasks');
        } catch(ParseException $e) {
            \Session::put('message', -1);
            return redirect('tasks');
        }
    }
}