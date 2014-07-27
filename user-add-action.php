<?php
require_once 'lib/common.php';
sess_load('user');

if ($user['has_add_pri'] && isset($_POST['username']) && isset($_POST['password'])) {
  $name = $_POST['username'];
  if (exists_user($name)) {
    echo "error:用户\"$name\"已经存在，请设置其他用户名";
    die();
  }
  
  $new_user = array(
    'name' => $name,
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
    $new_user['has_add_pri'] = intval($_POST['hasAddPri']);
  }
  add_user($new_user);
  echo "success:\"$name\"添加成功";
}
?>