<?php
require_once 'lib/common.php';
sess_load('user');
sess_load('user_factory');

$smarty = new Smarty();
smarty_load_header($smarty);
smarty_load_users($smarty);
smarty_load_company($smarty);
$smarty -> assign('super_admin', !$user['company']);
$smarty -> display('user-manage.tpl');
?>