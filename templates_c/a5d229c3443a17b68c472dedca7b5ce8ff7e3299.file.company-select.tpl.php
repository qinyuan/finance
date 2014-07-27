<?php /* Smarty version Smarty-3.1.16, created on 2014-07-26 22:49:55
         compiled from "./templates/company-select.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155103572353d3c013271d69-71014156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5d229c3443a17b68c472dedca7b5ce8ff7e3299' => 
    array (
      0 => './templates/company-select.tpl',
      1 => 1405173210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155103572353d3c013271d69-71014156',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'companies' => 0,
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53d3c01328cda4_80313780',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d3c01328cda4_80313780')) {function content_53d3c01328cda4_80313780($_smarty_tpl) {?><select id="company">
  <option value="0">(不选择)</option>
<?php  $_smarty_tpl->tpl_vars['company'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['company']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['companies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['company']->key => $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->_loop = true;
?>
  <option value="<?php echo $_smarty_tpl->tpl_vars['company']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
</option>
<?php } ?>
</select><?php }} ?>
