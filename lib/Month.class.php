<?php
class Month {
  private $year;
  private $month;

  function __construct() {
    $this -> year = intval(date('Y'));
    $this -> month = intval(date('m'));
  }

  function setYear($year) {
    $this -> year = $year;
  }

  function setMonth($month) {
    $this -> month = $month;
  }
  
  private function getYearMonthStr() {
    $str = "{$this->year}-";
    if (($month = $this -> month) < 10) {
      $str .= "0";
    }
    $str .= "$month";
    return $str;
  }
  
  function getMonth() {
    return $this -> month;
  }
  
  function getYear() {
    return $this -> year;
  }

  function getStartDate() {
    return $this -> getYearMonthStr() . '-01';
  }

  function getEndDate() {
    $days_of_month = array(
      1 => 31, 2 => 28, 3 => 31, 4 => 30, 5 => 31, 
      6 => 30, 7 => 31, 8 => 31, 9 => 30, 10 => 31, 
      11 => 30, 12 => 31);
    $month = $this -> month;
    $year = $this -> year;
    if ($month == 2 && (($year % 100 != 0 && $year % 4 == 0) 
        || ($year % 400 == 0))) {
      return $this -> getYearMonthStr() . '-29';
    } else {
      return $this -> getYearMonthStr() . '-' . $days_of_month[$month];
    }
  }
}
?>