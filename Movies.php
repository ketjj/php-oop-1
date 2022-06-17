<?php

//DEFINE CLASS
class Movies {
  private $title;
  private $genre;
  private $director;
  private $year;
  private $duration;

  //CONSTRUCTO FUNCTION
  public function __construct($_title,  $_genre, $_director,$_year, $_duration){
    $this->title = $_title;
    $this->genre = $_genre;
    $this->director = $_director;
    $this->year = $_year;
    $this->duration = $_duration;
  }
  

  //GETTER
  public function getTitle(){
    return $this->title;
  }
  public function getGenre(){
    return $this->genre;
  }
  public function getDirector(){
    return $this->director;
  }
  public function getYear(){
    return $this->year;
  }
  public function getDuration(){
    return $this->duration;
  }
  

  //SETTER
  public function setTitle($_newTitle){
    $this->title = $_newTitle;
  }
  // public function setGenre($_newGenre){
  //   $this->genre = $_newGenre;
  // }
  // public function setDirector($_newDirector){
  //   $this->director = $_newDirector;
  // }
  // public function setYear($_newYear){
  //   $this->year = $_newYear;
  // }
  // public function setDuration($_newDuration){
  //   $this->duration = $_newDuration;
  // }
}

?>