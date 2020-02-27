<?php

class TravelPhoto{
	private $id=0;
	private $date;
	private $fileName;
	private $description;
	private $latitude;
	private $longitude;
	private static $photoId;
	public function __construct($fileName, $title, $description, $latitude, $longitude){
		
		$photoId =$_SERVER['QUERY_STRING'];
		$this->id++;		
		$this->fileName = $fileName;
		$this->title = $title;
		$this->description = $description;
		$this->latitude = $latitude;
		$this->longitude = $longitude;
		
	}
	
	public function getFile(){
        return $this->fileName;
    }
	public function getTitle(){
        return $this->title;
    }
	public function _toString(){
		$markup = getFile();
		$alt= getTitle
		
		return "<img src=". $markup . "\" alt=" . $alt."\" />";
	}
}


?>