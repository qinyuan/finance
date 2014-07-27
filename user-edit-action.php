<?php
require_once 'lib/common.php';
sess_load('user');

if ($user['has_add_pri'] && isset($_POST['userId']) && 
    isset($_POST['username']) && isset($_POST['password'])) {

  $userId = intval($_POST['userId']);
  $username = ch_filter($_POST['username']);
  $same_name_user = select_user_by_name($username);
  if ($same_name_user != null && $same_name_user['id'] != $userId) {
    echo "error:用户\"$username\"已经存在，请设置其他用户名";
    die();
  }

  $new_user = array(
    'id' => $userId,
    'name' => $username,
    'password' => ch_filter($_POST['password']),
    'super_id' => $user['id'],
  );

  if ($user['company']) {
    $new_user['company'] = $user['company'];
    $new_user['has_add_pri'] = '0';
  } else {
    if (intval($_POST['company']) > 0) {
      $new_user['company'] = intval($_POST['company']);
    } else {
      $new_user['company'] = null;
    }
    if (isset($_POST['hasAddPri'])) {
      $new_user['has_add_pri'] = intval($_POST['hasAddPri']);
    } else {
      $new_user['has_add_pri'] = 0;
    }
  }
  edit_user($new_user);
  echo "success:\"$username\"修改成功";
}
?>