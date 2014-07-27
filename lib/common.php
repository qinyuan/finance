<?php
require_once 'Smarty/Smarty.class.php';
require_once 'lib/functions.php';
require_once 'lib/config.php';
require_once 'lib/MyPdo.class.php';
require_once 'lib/Month.class.php';
require_once 'sql/sql.php';
require_once 'sql/TableRowFactory.class.php';
require_once 'sql/SqlTableRowFactory.class.php';
require_once 'sql/UserFactory.class.php';
require_once 'sql/InOutFactory.class.php';
require_once 'sql/IncomeFactory.class.php';
require_once 'sql/ExpenseFactory.class.php';

date_default_timezone_set('Asia/Shanghai');
if (!session_id()) {
  session_start();
}
?>