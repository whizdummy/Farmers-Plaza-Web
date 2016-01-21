<?php

	class Task extends ParseObject{

		public static $parseClassName = "Task";

		public function setCrop($crop){
			this->set("crop", $crop);
		}

		public function getCrop(){
			return this->get("crop");
		}

		public function setTaskName($strTaskName){
			this->set("taskName", $strTaskName);
		}

		public function getTaskName(){
			return this->get("taskName");
		}

		public function setTaskDesc($strTaskDesc){
			this->set("taskDesc", $strTaskDesc);
		}

		public function getTaskDesc(){
			return this->get("taskDesc");
		}

		public function setTaskDuration($intTaskDuration){
			this->set("taskDuration", $intTaskDuration);
		}

		public function getTaskDuration(){
			return this->get("taskDuration");
		}

	}