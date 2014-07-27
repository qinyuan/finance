<?php
require_once 'lib/common.php';
sess_load('user');

require_once 'in-out-add-action.php';
$new_expense = parse_add_item();
if ($new_expense) {
  add_expense($new_expense);
  echo "success:'{$new_expense['description']}'添加成功";
}
?>