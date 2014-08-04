<?php
function date_filter($input) {
  return preg_replace("/[^0-9\-]/", "", $input);
}

function ch_filter($input) {
  return preg_replace("/[<>&%;]/", "", $input);
}

function en_filter($input) {
  return preg_replace("/[^a-zA-Z0-9]/", "", $input);
}

function array_key_slice($arr, $keys) {
  $result = array();
  foreach ($keys as $from => $to) {
  	if (gettype($from) === 'string'){
  	  $result[$to] = $arr[$from];
  	} else {
      $result[$to] = $arr[$to];
  	}
  }
  return $result;
}

function sess_persist($var_name){
  global ${$var_name};
  $_SESSION[$var_name] = serialize(${$var_name});
}

function sess_load($var_name) {
  global ${$var_name};
  if (!isset($_SESSION[$var_name])) {
    header("Location:index.php");
    die();
  } else {
    ${$var_name} = unserialize($_SESSION[$var_name]);
  }
  return ${$var_name};
}

function get_navigation_array(){
  global $conf,$user;
  $request_file = basename($_SERVER['PHP_SELF']);
  
  $navigation = $user['has_add_pri'] ? $conf['super_navi'] : $conf['nor_navi']; 
  $navigation_array = array();
  foreach ($navigation as $text => $href) {
  	$current = ($href === $request_file) ? true : false;
	  $navigation_array[] = array(
	    'text' => $text,
	    'href' => $href,
	    'current' => $current
    );
  }
  return $navigation_array;
}

function smarty_load_pagination_table(&$smarty, TableRowFactory $fc) {
  $row_count = $fc -> getRowCount();
  $page_size = $fc -> getPageSize();
  $page_count = ceil($row_count / $page_size);
  
  if ($page_count === 0) {
  	$page_num = 0;
  } else {
  	$page_num = $fc -> getPageNum();
	  if ($page_num > $page_count) {
	    $page_num = $page_count;
	    $fc -> setPageNum($page_num);
    } else if ($page_num <= 0) {
      $page_num = 1;
      $fc ->setPageNum($page_num);
    }
  }
  
  $smarty -> assign('row_count', $row_count);
  $smarty -> assign('page_size', $page_size);
  $smarty -> assign('page_count', $page_count);
  $smarty -> assign('page_num', $page_num);
  
  $smarty -> assign('rows', $fc -> getRows());
  $smarty -> assign('ths', $fc -> getTableHeads());
  $smarty -> assign('change_page_href', $fc -> getChangePageHref());
}

function smarty_load_incomes(&$smarty) {
  global $income_factory;
  $smarty -> assign('title', '收入列表');
  $smarty -> assign('inout_type', 'income');
  smarty_load_month($smarty, $income_factory);
  smarty_load_pagination_table($smarty, $income_factory);
}

function smarty_load_month(&$smarty, InOutFactory $factory) {
  $smarty -> assign('year', $factory -> getYear());
  $smarty -> assign('month', $factory -> getMonth());
  $smarty -> assign('inout_sum', $factory -> getSum());
}

function smarty_load_expenses(&$smarty) {
  global $expense_factory;
  $smarty -> assign('title', '支出列表');
  $smarty -> assign('inout_type', 'expense');
  smarty_load_month($smarty, $expense_factory);
  smarty_load_pagination_table($smarty, $expense_factory);
}

function smarty_load_users(&$smarty) {
  global $user_factory;
  smarty_load_pagination_table($smarty, $user_factory);
}

function smarty_load_header(&$smarty){
  global $user;
  $smarty -> assign('username', $user['name']);
  $smarty -> assign('navigation_array', get_navigation_array());
}

function smarty_load_company(&$smarty) {
  $companies = select_companies();
  $smarty -> assign('companies', $companies);
}

function smarty_load_user_select(&$smarty, InOutFactory $factory) {
  global $user;
  $users = select_users_by_company($user['company']);
  $smarty -> assign('users', $users);
  $smarty -> assign('filterUserId' , $factory -> getFilterUser());
}
?>