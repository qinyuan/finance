<?php
require_once 'lib/common.php';
sess_load('user');
sess_load('income_factory');

require_once 'in-out-change-month-action.php';
change_month($income_factory);

if (isset($_GET['pageNum'])) {
  $pageNum = intval($_GET['pageNum']);
  $income_factory -> setPageNum($pageNum);
}

sess_persist("income_factory");
header('Location:income-list.php');
?>