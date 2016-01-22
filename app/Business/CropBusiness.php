<?php

	use app\Dal\CropDao;
	class CropBusiness{

		public function CropBusiness(){
			$cropDao = new CropDao();
		}//end public function CropBusiness()

		public function saveCropAndTask($crop){

			if (validateCrop($crop) == 0){

				return "error-validation-crop";

			}//end if (validateCrop($crop) == 0)
			foreach ($listTask as $task) {
				
				if (validateTask($task) == 0){

					return "error-validation-task";

				}//end if (validateTask($task) == 0)

			}//end foreach($listTask as $task)
			$cropDao->saveCrop($crop);

		}//end public function saveCropAndTask($crop)

		public function validateCrop($crop){

			if ($crop->strCropName == null){
				return 0;
			}
			if ($crop->strCropType == null){
				return 0;
			}
			if ($crop->dblMinPh > $crop->dblMaxPh){
				return 0;
			}
			if ($crop->dblMinSunlight > $crop->dblMaxSunlight){
				return 0;
			}
			if ($crop->dblMinMoisture > $crop->dblMaxMoisture){
				return 0;
			}
			if ($crop->dblMinTemp > $crop->dblMaxTemp){
				return 0;
			}
			if ($crop->dblPlantingDistance < 1){
				return 0;
			}
			if ($crop->strSeason == null){
				return 0;
			}
			if ($crop->strFertilizer == null){
				return 0;
			}
			if ($crop->dblAmountOfFertilizer < 0){
				return 0;
			}
			return 1;

		}//end public function validateCrop($crop)

		public function validateTask($task){

			if ($task->strTaskName == null){
				return 0;
			}
			if ($task->strTaskDesc == null){
				return 0;
			}
			if ($task->intTaskDuration < 1){
				return 0;
			}
			return 1;

		}//end public function validateTask($task)

	}//end class CropBusiness