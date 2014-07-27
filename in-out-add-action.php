<?php
function parse_add_item() {
  global $user;
  if (isset($_POST['addDate']) && isset($_POST['amount']) 
      && isset($_POST['description'])) {
    return array(
      'user_id' => intval($user['id']), 
      'add_date' => date_filter($_POST['addDate']), 
      'amount' => doubleval($_POST['amount']), 
      'description' => ch_filter($_POST['description'])
    );
  } else {
    return null;
  }
}
?>