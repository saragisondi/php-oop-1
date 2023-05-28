<?php

class Movie{
  public $title;
  public $img;
  public $directing;
  public $direction;
  public $production;
  public $musics;
  public $distribution;
  public $release;
  public $duration;

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

}
