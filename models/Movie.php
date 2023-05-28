<?php

class Movie{
  public $img;
  public $title;
  public $duration;

  public function __construct($_img, $_title, $_duration){
    $this -> img = $_img;
    $this -> title = $_title;
    $this -> duration =  $_duration;

  }

}
