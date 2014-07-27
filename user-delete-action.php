<?php
require_once 'lib/common.php';
sess_load('user');

if ($user['has_add_pri'] && isset($_POST['id'])) {
  $user_id = intval($_POST['id']);
  if (user_has_inout($user_id)) {
    echo "error:在该用户添加的账单被删除之前，不能删除该用户";
  } else if (user_has_sub_user($user_id)) {
    echo "error:该用户是其他用户的管理者，不能删除";
  } else {
    delete_user($user['id'], $user_id);
    echo "success:删除成功";
  }
}
?>