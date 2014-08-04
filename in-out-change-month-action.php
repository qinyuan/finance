<?php
function change_month(InOutFactory &$income_factory) {
  if (isset($_GET['year']) && isset($_GET['month'])) {
    $year = intval($_GET['year']);
    $month = intval($_GET['month']);
    $income_factory -> setMonth($month);
    $income_factory -> setYear($year);
  }
  if (isset($_GET['user'])) {
    $userId = intval($_GET['user']);
    $income_factory -> setFilterUser($userId);
  }
}
?>