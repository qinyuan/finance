<?php
require_once 'lib/common.php';
sess_load('user');

if (isset($_POST['id'])) {
  $income_id = intval($_POST['id']);
  if (is_int($income_id) && $income_id > 0) {
    delete_income($user['id'], $income_id);
    echo "success:删除成功";
  }
}
?>