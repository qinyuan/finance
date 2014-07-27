<?php
require_once 'lib/common.php';

if (!(isset($_POST['username']) && isset($_POST['password']))) {
  header('Location:index.php');
  die();
}

$username = ch_filter($_POST['username']);
$password = ch_filter($_POST['password']);

$user = select_user_by_ident($username, $password);
if ($user) {
  sess_persist('user');
  
  $user_factory = new UserFactory($user['id'], $user['name'], $user['company']);
  sess_persist('user_factory');
  
  $income_factory = new IncomeFactory($user['id'], $user['company']);
  sess_persist('income_factory');
  
  $expense_factory = new ExpenseFactory($user['id'], $user['company']);
  sess_persist('expense_factory');
  
  header('Location:income-list.php');
  die();
}

$smarty = new Smarty();
$smarty -> display('login-error.tpl');
?>