<?php
require_once 'lib/common.php';
sess_load('user');

if (isset($_POST['oldPassword']) && isset($_POST['newPassword'])) {
  $old_password = ch_filter($_POST['oldPassword']);
  if ($old_password !== $user['password']) {
    echo '0';
  } else {
    update_password(ch_filter($_POST['newPassword']));
    echo '1';
  }
}
?>
