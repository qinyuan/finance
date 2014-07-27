<?php
require_once 'lib/common.php';
sess_load('user');
sess_load('expense_factory');

require_once 'in-out-change-month-action.php';
change_month($expense_factory);

if (isset($_GET['pageNum'])) {
  $pageNum = intval($_GET['pageNum']);
  $expense_factory -> setPageNum($pageNum);
}

sess_persist("expense_factory");
header('Location:expense-list.php');
?>