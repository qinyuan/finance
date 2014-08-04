<?php /* Smarty version Smarty-3.1.16, created on 2014-08-04 16:35:19
         compiled from "./templates/user-select.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111851230453df3f9b5c7ed4-94802095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ece858b5706b5825f88af2efb6c156b25ad1f0f' => 
    array (
      0 => './templates/user-select.tpl',
      1 => 1407140973,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111851230453df3f9b5c7ed4-94802095',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53df3f9b5e3c95_67512373',
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
    'filterUserId' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53df3f9b5e3c95_67512373')) {function content_53df3f9b5e3c95_67512373($_smarty_tpl) {?><select id="user">
  <option value="0">(全部)</option>
<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
  <option value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['user']->value['id']==$_smarty_tpl->tpl_vars['filterUserId']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</option>
<?php } ?>
</select><?php }} ?>
