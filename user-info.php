<?php
require_once 'lib/common.php';
sess_load('user');
$userId = intval($_POST['id']);
$target_user = select_user_by_id($user['id'], $userId);
echo json_encode($target_user);
?>