<?php
function parse_edit_item() {
  global $user;
  if ((isset($_POST['incomeId']) || isset($_POST['expenseId']))
    && isset($_POST['addDate']) && isset($_POST['amount']) && 
    isset($_POST['description'])) {
    $id = isset($_POST['incomeId']) ? $_POST['incomeId'] : $_POST['expenseId'];
    return array(
      'id' => intval($id),
      'add_date' => date_filter($_POST['addDate']), 
      'amount' => doubleval($_POST['amount']), 
      'description' => ch_filter($_POST['description'])
    );
  } else {
    return null;
  }
}
?>