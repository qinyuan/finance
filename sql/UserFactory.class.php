<?php
class UserFactory extends SqlTableRowFactory {
  private $userId;
  private $username;
  private $company;
  
  function __construct($userId, $username, $company) {
    $this -> userId = $userId;
    $this -> username = $username;
    $this -> company = $company;
  }

  function getTableHeads() {
    $wideType = $this -> company ? 'widest' : 'wider';
    $ths = array(
      array('class' => $wideType, 'text' => '用户名'),
      array('class' => $wideType, 'text' => '密码'),
      array('class' => $wideType, 'text' => '类型'),
    );
    
    if (!$this -> company) {
      $ths[] = array('class' => $wideType, 'text' => '公司');
    }
    
    $ths[] = array('text' => '操作');
    return $ths;
  }
  
  protected function getTableRow($row) {
    $id = $row['id'];
    $r = array(
      'id' => $id,
      'with_handle' => true
    );
    $r['texts'] = array(
      'name' => $row['name'],
      'password' => $row['password'],
      'type' => $row['has_add_pri'] ? '管理员' : '普通用户',
    );
    
    if($this -> userId === $id) {
      $r['no_delete'] = true;
      $r['no_edit'] = true;
    }
    
    if (!$this -> company) {
      $r['texts']['c_name'] = $row['c_name'];
    }
    return $r;
  }
  
  protected function getQuery() {
    $userId = $this -> userId;
    $query = "SELECT 
            u.id,u.name,u.password,c.name AS c_name,u.has_add_pri 
            FROM finance_user AS u LEFT JOIN finance_company AS c
            ON u.company=c.id
            WHERE u.super_id = $userId OR u.id = $userId";
    return $query;
  }

  protected function getRowCountQuery() {
    $userId = $this -> userId;
    return "SELECT COUNT(*) FROM finance_user
            WHERE super_id = $userId OR id = $userId";
  }

  function getChangePageHref() {
    return 'user-manage.php';
  }
}
?>