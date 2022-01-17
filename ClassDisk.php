<?php
class Disk{
  public $poster;
  public $title;
  public $genre;
  public $year;
  public $author;
  function __construct($_title)
  {
    $this->title = $_title;
  }
  public function getYear($year){
     $noDate='';
     $this->year > 2000   ?   $noDate =$year  :   $noDate = $year.' questo disco è del secolo scorso';
     return $noDate;
  }
}

?>