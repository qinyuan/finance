<?php /* Smarty version Smarty-3.1.16, created on 2014-07-26 22:49:55
         compiled from "./templates/user-manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182505453753d3c013169f73-32557166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8e635278469d507efe1e39bca760d88dc5fa2f4' => 
    array (
      0 => './templates/user-manage.tpl',
      1 => 1405776188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182505453753d3c013169f73-32557166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'super_admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53d3c01323e689_61752957',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d3c01323e689_61752957')) {function content_53d3c01323e689_61752957($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <?php echo $_smarty_tpl->getSubTemplate ("meta_charset.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <title>用户管理</title>
  <?php echo $_smarty_tpl->getSubTemplate ("common-css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <link rel="stylesheet" href="css/user-manage.css" type="text/css" />
</head>
<body>
<div class="body">
  <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate ("pagination-table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


  <div id="userFormDiv" class="floatInput">
    <input type="hidden" id="userId" />
    <table>
    <tr>
      <td>用户名：</td>
      <td><input type="text" id="username" /></td>
    </tr>
    <tr>
      <td>密码：</td>
      <td><input type="password" id="password" /></td>
    </tr>
  <?php if ($_smarty_tpl->tpl_vars['super_admin']->value) {?>
    <tr>
      <td>类型：</td>
      <td><?php echo $_smarty_tpl->getSubTemplate ("user-type-select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</td>
    </tr>
    <tr>
      <td>公司：</td>
      <td><?php echo $_smarty_tpl->getSubTemplate ("company-select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</td>
    </tr>
  <?php }?>
    <tr>
      <td>
        <button id="addUserOk">确定</button>
        <button id="editUserOk">确定</button>
      </td>
      <td>
        <button id="addUserCancel">取消</button>
        <button id="editUserCancel">取消</button>
      </td>
    </tr>
  </table>
  </div>
</div>
</body>
<?php echo $_smarty_tpl->getSubTemplate ("common-script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="js/user-manage.js"></script>
</html><?php }} ?>
