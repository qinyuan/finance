<?php /* Smarty version Smarty-3.1.16, created on 2014-07-26 18:03:38
         compiled from "./templates/common-script.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150971173553d37cfaecf4a2-74549164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cfd1391b382681e97836e99c1aa2db1343ea37a' => 
    array (
      0 => './templates/common-script.tpl',
      1 => 1406362891,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150971173553d37cfaecf4a2-74549164',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53d37cfaed4f32_36423986',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d37cfaed4f32_36423986')) {function content_53d37cfaed4f32_36423986($_smarty_tpl) {?><script src="js/jquery.js"></script>
<script src="js/smart.min.js"></script>
<script src="js/json/json2.js"></script>
<script src="js/DatePicker/WdatePicker.js"></script>
<script id="passwordEditForm" type="text/x-jsmart-tmpl">
<div class="editPassword floatInput">
  <table>
    <tr>
      <td>请输入旧密码</td>
      <td><input type="password" id="oldPassword" /></td>
    </tr>
    <tr>
      <td>请输入新密码</td>
      <td><input type="password" id="newPassword1" /></td>
    </tr>
    <tr>
      <td>请再次确认新密码</td>
      <td><input type="password" id="newPassword2" /></td>
    </tr>
    <tr>
      <td><button onclick="return resetPassword()">确定</button></td>
      <td><button onclick="return cancelResetPassword();">取消</button></td>
    </tr>
  </table>
</div>
</script>
<script src="js/common.js"></script><?php }} ?>
