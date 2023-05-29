<?php
// class
class Movie{
  // object
  public $title;
  public $img;
  public $directing;
  public $direction;
  public $production;
  public $musics;
  public $distribution;
  public $release;
  public $duration;

  //function construct
  public function __construct($_title, $_img, $_directing, $_direction, $_production, $_musics, $_distribution, $_release, $_duration){
    $this -> title = $_title;
    $this -> img = $_img;
    $this -> directing = $_directing;
    $this -> direction = $_direction;
    $this -> production = $_production;
    $this -> musics = $_musics;
    $this -> distribution = $_distribution;
    $this -> release = $_release;
    $this -> duration =  $_duration;
  }

  //method
  public function get_title(){
    return $this -> title;
  }

  public function  get_image(){
    return $this -> img;
  }


}
