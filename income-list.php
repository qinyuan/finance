<?php
require_once 'lib/common.php';
sess_load('user');
sess_load('income_factory');

$smarty = new Smarty();
smarty_load_header($smarty);
smarty_load_incomes($smarty);
$smarty -> display('in-out-list.tpl');
?>