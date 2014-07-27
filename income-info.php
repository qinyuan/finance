<?php
require_once 'lib/common.php';
sess_load('user');
$income_id = intval($_POST['id']);
$target_income = select_income_by_id($user['id'], $income_id);
echo json_encode($target_income);
?>