<?php
require_once 'lib/common.php';
sess_load('user');

require_once 'in-out-edit-action.php';
$new_expense = parse_edit_item();
if ($new_expense) {
  edit_expense($user['id'], $new_expense);
  echo "success:'{$new_expense['description']}'修改成功";
}
?>