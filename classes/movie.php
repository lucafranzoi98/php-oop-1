<?php

class Movie{
   public $title;
   public $description;
   public $year;
   public $genre;

   function __construct($_title, $_description, $_year, $_genre) {
      $this->title = $_title;
      $this->description = $_description;
      $this->year = $_year;
      $this->genre = $_genre;
   }

   function getAgeMovie(){
      return 2023 - $this->year;
   }
}

?>