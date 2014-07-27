<?php
require_once 'lib/common.php';
sess_load('user');

if (isset($_POST['id'])) {
  $expense_id = intval($_POST['id']);
  if (is_int($expense_id) && $expense_id > 0) {
    delete_expense($user['id'], intval($expense_id));
    echo "success:删除成功";
  }
}
?>