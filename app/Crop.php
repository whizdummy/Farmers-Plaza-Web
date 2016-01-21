<?php

	Use Parse\ParseObject;
	class Crop extends ParseObject{

		public static $parseClassName = "Crop";

		public function setCropName($strCropName){
			this->set("cropName", $strCropName);
		}

		public function getCropName(){
			return this->get("cropName");
		}

		public function setCropType($cropType){
			this->set("cropType", $cropType);
		}

		public function getCropType(){
			return this->get("cropType");
		}

		public function setMinPh($dblMinPh){
			this->set("minPh", $dblMinPh);
		}

		public function getMinPh(){
			return this->get("minPh");
		}	

		public function setMaxPh($dblMaxPh){
			this->set("maxPh", $dblMaxPh);
		}

		public function getMaxPh(){
			return this->get("maxPh");
		}

		public function setMinSunlight($dblMinSunlight){
			this->set("minSunlight", $dblMinSunlight);
		}

		public function getMinSunlight(){
			return this->get("minSunlight");
		}

		public function setMaxSunlight($dblMaxSunlight){
			this->set("maxSunlight", $dblMaxSunlight);
		}

		public function getMaxSunlight(){
			return this->get("maxSunlight");
		}

		public function setMinMoisture($dblMinMoisture){
			this->set("minMoisture", $minMoisture);
		}

		public function getMinMoisture(){
			return this->get("minMoisture");
		}

		public function setMaxMoisture($dblMaxMoisture){
			this->set("maxMoisture", $dblMaxMoisture);
		}

		public function getMaxMoisture(){
			return this->get("maxMoisture");
		}

		public function setMinTemp($dblMinTemp){
			this->set("minTemp", $dblMinTemp);
		}

		public function getMinTemp(){
			return this->get("minTemp");
		}

		public function setMaxTemp($dblMaxTemp){
			this->set("maxTemp", $dblMaxTemp);
		}

		public function getMaxTemp(){
			return this->get("maxTemp");
		}

		public function setPlantingDistance($dblPlantingDistance){
			this->set("plantingDistance", $dblPlantingDistance);
		}

		public function getPlantingDistance(){
			return this->get("plantingDistance");
		}

		public function setSeason($season){
			this->set("season", $season);
		}

		public function getSeason(){
			return this->get("season");
		}

		public function setFertilizer($fertilizer){
			this->set("fertilizer", $fertilizer);
		}

		public function getFertilizer(){
			return this->get("fertilizer");
		}	

	}//end class Crop