<?php
class IncomeFactory extends InOutFactory {
  function __construct($userId, $company) {
    parent::__construct($userId, $company, get_income_inout_type());
  }

  function getChangePageHref() {
    return 'income-list-change.php';
  }
}
?>