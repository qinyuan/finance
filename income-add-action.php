<?php
require_once 'lib/common.php';
sess_load('user');

require_once 'in-out-add-action.php';
$new_income = parse_add_item();
if ($new_income) {
  add_income($new_income);
  echo "success:'{$new_income['description']}'添加成功";
}
?>