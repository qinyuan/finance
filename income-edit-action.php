<?php
require_once 'lib/common.php';
sess_load('user');

require_once 'in-out-edit-action.php';
$new_income = parse_edit_item();
if ($new_income) {
  edit_income($user['id'], $new_income);
  echo "success:'{$new_income['description']}'修改成功";
}
?>