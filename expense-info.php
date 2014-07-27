<?php
require_once 'lib/common.php';
sess_load('user');
$expense_id = intval($_POST['id']);
$target_expense = select_expense_by_id($user['id'], $expense_id);
echo json_encode($target_expense);
?>