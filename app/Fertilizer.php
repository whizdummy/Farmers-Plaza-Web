<?php

	Use Parse\ParseObject;
	class Fertilizer extends ParseObject{

		public static $parseClassName = "Fertilizer";

		public function setFertilizerName($strFertilizerName){
			this->set("fertilizerName", $strFertilizerName);
		}

		public function getFertilizerName(){
			return this->get("fertilizerName");
		}

	}