<?php /* Smarty version Smarty-3.1.16, created on 2014-07-27 14:11:14
         compiled from "./templates/in-out-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164862366653d3899eb289d8-67309573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f1eb3d56de04e067d9fc4cf8c64c928ec692fb1' => 
    array (
      0 => './templates/in-out-list.tpl',
      1 => 1406441473,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164862366653d3899eb289d8-67309573',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53d3899eb790a9_47873221',
  'variables' => 
  array (
    'title' => 0,
    'inout_sum' => 0,
    'year' => 0,
    'index' => 0,
    'month' => 0,
    'inout_type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d3899eb790a9_47873221')) {function content_53d3899eb790a9_47873221($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <?php echo $_smarty_tpl->getSubTemplate ("meta_charset.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  <?php echo $_smarty_tpl->getSubTemplate ("common-css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <link rel="stylesheet" href="css/in-out-list.css" type="text/css" />
</head>
<body>
<div class="body">
  <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <div class="monthSelectDiv">
    金额总计：<b><?php echo $_smarty_tpl->tpl_vars['inout_sum']->value;?>
</b>
    &nbsp;&nbsp;&nbsp;&nbsp;
    年份：<input type="text" id="year" value="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
" />
    月份：<select id="month"><option value="0">(全部)</option>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=12) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?> 
      <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']+1, null, 0);?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['index']->value==$_smarty_tpl->tpl_vars['month']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
</option>
    <?php endfor; endif; ?>
         </select>
    &nbsp;&nbsp;
    <button id="changeMonthOk">确定</button>
  </div>
  <?php echo $_smarty_tpl->getSubTemplate ("pagination-table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


  <div id="<?php echo $_smarty_tpl->tpl_vars['inout_type']->value;?>
FormDiv" class="floatInput">
    <input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['inout_type']->value;?>
Id" />
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
      <td><input type="text" id="description" /></td>
    </tr>
    <tr>
      <td>
        <button id="add_<?php echo $_smarty_tpl->tpl_vars['inout_type']->value;?>
Ok">确定</button>
        <button id="edit_<?php echo $_smarty_tpl->tpl_vars['inout_type']->value;?>
Ok">确定</button>
      </td>
      <td>
        <button id="add_<?php echo $_smarty_tpl->tpl_vars['inout_type']->value;?>
Cancel">取消</button>
        <button id="edit_<?php echo $_smarty_tpl->tpl_vars['inout_type']->value;?>
Cancel">取消</button>
      </td>
    </tr>
  </table>
  </div>
</div>
</body>
<?php echo $_smarty_tpl->getSubTemplate ("common-script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="js/<?php echo $_smarty_tpl->tpl_vars['inout_type']->value;?>
-list.js"></script>
<script src="js/in-out-list.js"></script>
</html><?php }} ?>
