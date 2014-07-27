<?php /* Smarty version Smarty-3.1.16, created on 2014-07-27 09:51:24
         compiled from "./templates/login-error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114447218653d45b1c0d6129-26494559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c023495087083900a681ee826ccb4002dd4ec43' => 
    array (
      0 => './templates/login-error.tpl',
      1 => 1405131107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114447218653d45b1c0d6129-26494559',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53d45b1c42c9c7_37915613',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d45b1c42c9c7_37915613')) {function content_53d45b1c42c9c7_37915613($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <?php echo $_smarty_tpl->getSubTemplate ("meta_charset.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <title>登录错误</title>
</head>
<body></body>
<script charset="utf8">
  alert("用户名不存在或密码错误");
  var indexHref = location.href.toString().replace('login', 'index');
  location.href = indexHref;
</script>
</html><?php }} ?>
