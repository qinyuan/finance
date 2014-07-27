<?php
abstract class SqlTableRowFactory implements TableRowFactory {
  private $pageSize = 15;
  private $pageNum = 1;

  final function getPageSize() {
    return $this -> pageSize;
  }

  final function getPageNum() {
    return $this -> pageNum;
  }

  final function setPageNum($pageNum) {
    $this -> pageNum = $pageNum;
  }

  final protected function setPageSize($pageSize) {
    $this -> pageSize = $pageSize;
  }
  
  final function getRows() {
    if ($this ->pageNum <= 0) {
      return array();
    }
    $startRow = ($this -> pageNum - 1) * $this -> getPageSize();
    $query = $this -> getQuery() . " LIMIT $startRow,{$this -> pageSize}";
    $pdo = new MyPdo();
    $pdo -> query($query);
    $rows = array();
    while ($row = $pdo -> fetch()) {
      $rows[] = $this -> getTableRow($row);
    }
    return $rows;
  }
  
  function getRowCount() {
    $cnn = new MyPdo();
    $cnn -> query($this -> getRowCountQuery());
    $row = $cnn -> fetch();
    return $row[0];
  }

  protected abstract function getQuery();
  protected abstract function getRowCountQuery();
  protected abstract function getTableRow($row);
}
?>