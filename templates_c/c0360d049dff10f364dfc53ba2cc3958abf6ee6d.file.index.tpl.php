<?php /* Smarty version Smarty-3.1.16, created on 2014-07-26 18:15:53
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149631880553d37fd97c5b43-11714164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1405157723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149631880553d37fd97c5b43-11714164',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53d37fd9873a22_73266925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d37fd9873a22_73266925')) {function content_53d37fd9873a22_73266925($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <?php echo $_smarty_tpl->getSubTemplate ('meta_charset.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <title>财务管理系统</title>
  <link rel="stylesheet" href="css/common.css" type="text/css" />
  <link rel="stylesheet" href="css/index.css" type="text/css" />
</head>
<body>
<div class="body">

  <h1>财务管理系统</h1>
  <h3>用户登录</h1>
  <form action="login.php" method="post">
    <table class="formInput">
      <tr>
        <td class="label">用户名</td>
        <td><input type="text" id="username" name="username" /></td>
      </tr>
      <tr>
        <td class="label">密码</td>
        <td><input type="password" id="password" name="password" /></td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" id="submit" name="submit" value="登  录" />
        </td>
      </tr>
    </table>
  </form>
  
</div>
</body>
<script src="js/jquery.js"></script>
<script>
$('#username').focus();
</script>
</html><?php }} ?>
