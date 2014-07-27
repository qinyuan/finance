<?php
class ExpenseFactory extends InOutFactory {
  function __construct($userId, $company) {
    parent::__construct($userId, $company, get_expense_inout_type());
  }

  function getChangePageHref() {
    return 'expense-list-change.php';
  }
}
?>