<?php /* Smarty version Smarty-3.1.16, created on 2014-07-26 18:03:38
         compiled from "./templates/income-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8695738353d37cfabc3762-52678283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7f3dbf82792372b05d6a2dcc2dcca10ffce2df8' => 
    array (
      0 => './templates/income-list.tpl',
      1 => 1406366173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8695738353d37cfabc3762-52678283',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53d37cfac13db9_67139160',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d37cfac13db9_67139160')) {function content_53d37cfac13db9_67139160($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <?php echo $_smarty_tpl->getSubTemplate ("meta_charset.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <title>收入列表</title>
  <?php echo $_smarty_tpl->getSubTemplate ("common-css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <link rel="stylesheet" href="css/income-list.css" type="text/css" />
</head>
<body>
<div class="body">
  <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate ("pagination-table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


  <div id="incomeFormDiv" class="floatInput">
    <input type="hidden" id="incomeId" />
    <table>
    <tr>
      <td>日期：</td>
      <td><input type="text" id="addDate" readonly="readonly" /></td>
    </tr>
    <tr>
      <td>金额：</td>
      <td><input type="text" id="amount" /></td>
    </tr>
    <tr>
      <td>说明：</td>
      <td><input type="text" id="incomeDesc" /></td>
    </tr>
    <tr>
      <td>
        <button id="addIncomeOk">确定</button>
        <button id="editIncomeOk">确定</button>
      </td>
      <td>
        <button id="addIncomeCancel">取消</button>
        <button id="editIncomeCancel">取消</button>
      </td>
    </tr>
  </table>
  </div>
</div>
</body>
<?php echo $_smarty_tpl->getSubTemplate ("common-script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="js/income-list.js"></script>
</html><?php }} ?>
