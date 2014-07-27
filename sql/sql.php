<?php
function select_companies() {
  $pdo = new MyPdo();
  $query = "SELECT * FROM finance_company";
  $pdo -> query($query);
  $companies = array();
  while($row = $pdo -> fetch()){
    $companies[] = array_key_slice($row, array('id', 'name'));
  }
  return $companies;
}

function update_password($password)	{
  global $user;	
  if ($user) {
    $cus_id = $user['id'];
    $query = "UPDATE finance_user SET password='$password' 
              WHERE id=$cus_id";
    $pdo = new MyPdo();
    $pdo -> query($query);
  }
}

function select_user_by_ident($username, $password){
  $pdo = new MyPdo();
  $query = "SELECT * FROM finance_user
            WHERE name='$username' AND password='$password'";
  $pdo -> query($query);
  if($row = $pdo -> fetch()){
    return array_key_slice($row, array('id', 'name', 
      'password', 'super_id', 'company', 'has_add_pri'));
  } else {
    return null;
  }
}

function select_user_by_name($username) {
  $pdo = new MyPdo();
  $query = "SELECT * FROM finance_user WHERE name='$username'";
  $pdo -> query($query);
  if ($row = $pdo -> fetch()) {
    return array_key_slice($row, array('id', 'name',
      'super_id', 'password', 'company', 'has_add_pri'));
  } else {
    return null;
  }
}

function select_user_by_id($superId, $userId) {
  $pdo = new MyPdo();
  $query = "SELECT * FROM finance_user
            WHERE id='$userId' AND super_id='$superId'";
  $pdo -> query($query);
  if ($row = $pdo -> fetch()) {
    return array_key_slice($row, array('id', 'name', 
      'password', 'company', 'has_add_pri'));
  } else {
    return null;
  }
}

function select_inout_by_id($user_id, $income_id, $inout_type) {
  $pdo = new MyPdo();
  $query = "SELECT * FROM finance_inout
            WHERE id=$income_id AND user_id=$user_id
            AND inout_type=$inout_type";
  $pdo -> query($query);
  if ($row = $pdo -> fetch()) {
    return array_key_slice($row, array('id', 'add_date', 
      'amount', 'description'));
  } else {
    return null;
  }
}

function select_income_by_id($user_id, $income_id) {
  return select_inout_by_id($user_id, $income_id, get_income_inout_type());
}

function select_expense_by_id($user_id, $expense_id) {
  return select_inout_by_id($user_id, $expense_id, get_expense_inout_type());
}

function add_row($primary_key, $field_value_pairs, $table_name) {
  $fields = $primary_key;
  $values = 'NULL';
  foreach ($field_value_pairs as $key => $value) {
  	$fields .= ",$key";
    if ($value === null) {
      $values .= ",NULL";
    } else {
  	  $values .= ",'$value'";
    }
  }
  
  $query = "INSERT INTO $table_name($fields) VALUES($values)";
  $pdo = new MyPdo();
  $pdo -> query($query);
}

function add_user($new_user) {
  add_row('id', $new_user, 'finance_user');
}

function add_income($new_income) {
  $new_income['inout_type'] = 1;
  add_row('id', $new_income, 'finance_inout');
}

function add_expense($new_expense) {
  $new_expense['inout_type'] = 2;
  add_row('id', $new_expense, 'finance_inout');
}

function delete_income($user_id, $income_id) {
  $query = "DELETE FROM finance_inout WHERE
            id=$income_id AND user_id=$user_id AND inout_type="
            . get_income_inout_type();
  $pdo = new MyPdo();
  $pdo -> query($query);
}

function edit_in_out($user_id, $new_income, $inout_type) {
  $query = "UPDATE finance_inout SET
          add_date='{$new_income['add_date']}',
          amount={$new_income['amount']},
          description='{$new_income['description']}'
          WHERE id={$new_income['id']} AND user_id=$user_id
          AND inout_type=$inout_type";
  $pdo = new MyPdo();
  $pdo ->query($query);
}

function edit_income($user_id, $new_income) {
  edit_in_out($user_id, $new_income, get_income_inout_type());
}

function edit_expense($user_id, $new_expense) {
  edit_in_out($user_id, $new_expense, get_expense_inout_type());
}

function delete_expense($user_id, $income_id) {
  $query = "DELETE FROM finance_inout WHERE
            id=$income_id AND user_id=$user_id AND inout_type="
            . get_expense_inout_type();
  $pdo = new MyPdo();
  $pdo -> query($query);
}

function is_result_empty($query) {
  $pdo = new MyPdo();
  $pdo -> query($query);
  return $pdo -> fetch() == null;
}

function user_has_sub_user($user_id) {
  $query = "SELECT id FROM finance_user 
        WHERE super_id=$user_id LIMIT 1";
  return !is_result_empty($query);
}

function user_has_inout($user_id) {
  $query = "SELECT id FROM finance_inout 
        WHERE user_id=$user_id LIMIT 1";
  return !is_result_empty($query);
}

function delete_user($super_id, $user_id) {
  $query = "DELETE FROM finance_user WHERE
            id=$user_id AND super_id=$super_id";
  $pdo = new MyPdo();
  $pdo -> query($query);
}

function edit_user($new_user) {
  $company = $new_user['company'] ? $new_user['company'] : 'NULL';
  $query = "UPDATE finance_user SET
          name='{$new_user['name']}',
          password='{$new_user['password']}',
          super_id={$new_user['super_id']},
          company=$company,
          has_add_pri={$new_user['has_add_pri']}
          WHERE id={$new_user['id']}";
          
  $pdo = new MyPdo();
  $pdo ->query($query);
}

function exists_user($username) {
  $query = "SELECT COUNT(*) FROM finance_user WHERE name='$username'";
  $pdo = new MyPdo();
  $pdo -> query($query);
  $row = $pdo -> fetch(); 
  return ($row[0] == 1);
}

function get_income_inout_type() {
  return 1;
}

function get_expense_inout_type() {
  return 2;
}
?>