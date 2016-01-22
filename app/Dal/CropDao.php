<?php

	use Parse\ParseObject;
	use Parse\ParseQuery;

	class CropDao{

		public function saveCrop($crop){

			$queryCrop = new ParseQuery("Crop");
			$queryCropType = new ParseQuery("CropType");
			$querySeason = new ParseQuery("Season");
			$queryFertilizer = new ParseQuery("Fertilizer");
			$queryTaskCategory = new ParseQuery("TaskCategory");

			$parseCrop = new ParseObject("Crop");
			$parseTask = new ParseObject("Task");

			try{

				$queryCrop->equalTo("cropName", $crop->strCropName);
				if ($queryCrop->count() != 0){
					return "existing";
				}
				
				//getting crop type
				$queryCropType->equalTo("cropTypeDesc", $crop->strCropType);
				if ($queryCrop->count() == 0){
					$parseCropType = new ParseObject("TaskCategory");
					$parseCropType->set("taskCatDesc", $crop->strCropType);
					$parseCropType->save();
				}
				$cropType = $queryCropType->first();

				//getting season
				$querySeason->equalTo("seasonDesc", $crop->strSeason);
				if ($querySeason->count() == 0){
					$parseSeason = new ParseObject("Season");
					$parseSeason->set("seasonDesc", $crop->strSeason);
					$parseSeason->save();
				}
				$season = $querySeason->first();

				//getting fertilizer
				$queryFertilizer->equalTo("fertilizerDesc", $crop->strFertilizer);
				if ($queryFertilizer->count() == 0){
					$parseFertilizer = new ParseObject("Fertilizer");
					$parseFertilizer->set("fertilizerDesc", $crop->strSeason);
					$parseFertilizer->save();
				}
				$fertilizer = $queryFertilizer->first();

				$parseCrop->set("cropName", $crop->strCropName);
				$parseCrop->set("cropType", $cropType);
				$parseCrop->set("minPh", $crop->dblMinPh);
				$parseCrop->set("maxPh", $crop->dblMaxPh);
				$parseCrop->set("minMoisture", $crop->dblMinMoisture);
				$parseCrop->set("maxMoisture", $crop->dblMaxMoisture);
				$parseCrop->set("minSunlight", $crop->dblMinSunlight);
				$parseCrop->set("maxSunlight", $crop->dblMaxSunlight);
				$parseCrop->set("minTemp", $crop->dblMinTemp);
				$parseCrop->set("maxTemp", $crop->dblMaxTemp);
				$parseCrop->set("plantingDistance", $crop->dblPlantingDistance);
				$parseCrop->set("season", $season);
				$parseCrop->set("fertilizer", $fertilizer);
				$parseCrop->set("fertilizerAmount", $crop->dblAmountOfFertilizer);

				//adding tasks
				foreach ($crop->listTask as $task) {
					
					$queryTaskCategory->equalTo("taskCatDesc", $task->strTaskName);
					$taskCategory = $queryTaskCategory->first();
					$parseTask->set("taskCategory", $taskCategory);
					$parseTask->set("taskDesc", $task->strTaskDesc);
					$parseTask->set("taskDuration", $task->intTaskDuration);
					$parseTask->save();

				}//end foreach

				return "success";


			}catch(Exception $e){
				dd($e);
			}//end try catch()
			return "error-database";

		}//end public function saveCrop($crop)

	}//end class CropDao