<?php
session_start();
$_SESSION = array();
require_once 'lib/common.php';

$smarty = new Smarty();
$smarty -> display('index.tpl');
?>