<?php

	Use Parse\ParseObject;
	class CropType extends ParseObject{

		public static $parseClassName = "CropType";

		public function setCropTypeDesc($strCropTypeDesc){
			this->set("cropTypeDesc", $strCropTypeDesc);
		}

		public function getCropTypeDesc(){
			return this->get("cropTypeDesc");
		}

	}