<?php
abstract class InOutFactory extends SqlTableRowFactory {
  private $userId;
  private $company;
  private $inOutType;
  private $month;
  private $totalYear;
  
  function __construct($userId, $company, $inOutType) {
    $this -> userId = $userId;
    $this -> company = $company;
    $this -> inOutType = $inOutType;
    $this -> month = new Month();
    $this -> totalYear = true;
  }

  function getTableHeads() {
    $wideType = 'wider';
    $ths = array(
      array('class' => $wideType, 'text' => '创建者'),
      array('class' => $wideType, 'text' => '日期'),
      array('class' => $wideType, 'text' => '金额'),
      array('class' => $wideType, 'text' => '说明'),
      array('text' => '操作'),
    );
    return $ths;
  }
  
  function setMonth($month) {
    if ($month == 0) {
      $this -> totalYear = true;
    } else {
      $this -> totalYear = false;
      $this -> month -> setMonth($month);
    }
  }
  
  function setYear($year) {
    $this -> month -> setYear($year);
  }
  
  function getMonth() {
    return $this -> totalYear ? 0 : $this -> month -> getMonth();
  }
  
  function getYear() {
    return $this -> month -> getYear();
  }
  
  function getSum() {
    $query = "SELECT SUM(amount) FROM finance_inout {$this->getWhereClause()}";
    $pdo = new MyPdo();
    $pdo -> query($query);
    $row = $pdo -> fetch();
    return doubleval($row[0]);
  }
  
  protected function getTableRow($row) {
    $id = $row['id'];
    $r = array(
      'id' => $id,
      'with_handle' => true
    );
    $r['texts'] = array(
      'adder' => $row['adder'],
      'add_date' => $row['add_date'],
      'amount' => $row['amount'],
      'description' => $row['description']
    );
    
    if($this -> userId != $row['user_id']) {
      $r['no_delete'] = true;
      $r['no_edit'] = true;
    }
    return $r;
  }
  
  protected function getQuery() {
    $userId = $this -> userId;
    $query = "SELECT 
            io.id,u.name AS adder,user_id,add_date,amount,description
            FROM 
            finance_inout AS io INNER JOIN finance_user AS u 
            ON io.user_id=u.id {$this->getWhereClause()} 
            ORDER BY add_date DESC,io.id DESC";
    return $query;
  }
  
  private function getWhereClause() {
    $query = ' WHERE ';
    $company = $this -> company;
    if ($company) {
      $query .= "user_id IN (SELECT id FROM finance_user 
              WHERE company=$company) AND ";
    }
    if ($this -> totalYear) {
      $year = $this -> month -> getYear();
      $startDate = "$year-01-01";
      $endDate = "$year-12-31";
    } else {
      $startDate = $this -> month -> getStartDate();
      $endDate = $this -> month -> getEndDate();
    }
    $query .= "(add_date BETWEEN '$startDate' AND '$endDate') AND 
              inout_type={$this->inOutType}";
    return $query;
  }
  
  protected function getRowCountQuery() {
    $query = "SELECT COUNT(*) FROM finance_inout {$this->getWhereClause()}";
    return $query;
  }
}
?>