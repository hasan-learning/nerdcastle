<?php
class Course {
  public $title;
  public $fee;
  public $level;
  public $extraFee;

  public function getTitle(){
    return $this->title;
  }
  public function setTitle(){
    return $this->title;
  }
  public function getFee(){
    return $this->fee;
  }
  public function setFee(){
    return $this->fee;
  }
  public function getLevel(){
    return $this->level;
  }
  public function setLevel(){
    return $this->level;
  }
  public function getExtraFee(){
    return $this->extraFee;
  }
  public function setExtraFee(){
    return $this->extraFee;
  }
}
?>