<?php
$conf['datasource'] = array(
  'url' => 'localhost',
  'user' => 'qinyuan',
  'password' => 'qinyuan',
  'dbname' => 'qinyuan'
);
$conf['nor_navi'] = array(
	'收入列表' => 'income-list.php',
	'支出列表' => 'expense-list.php',
	/*'操作记录' => 'handle-log.php'*/
);
$conf['super_navi'] = array_merge(
  $conf['nor_navi'], array(
	  '用户管理' => 'user-manage.php'
	));
?>