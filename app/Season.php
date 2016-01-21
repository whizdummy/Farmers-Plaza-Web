<?php

	class Season extends ParseObject{

		public static $parseClassName = "Season";

		public function setSeasonDesc($strSeasonDesc){
			this->set("seasonDesc", $strSeasonDesc);
		}

		public function getSeasonDesc(){
			return this->get("seasonDesc");
		}

	}