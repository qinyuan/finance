<?php /* Smarty version Smarty-3.1.16, created on 2014-07-26 18:03:38
         compiled from "./templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71314643453d37cfac66015-55166285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c13ae6868bbc459509c9f1b968154acd23eecc' => 
    array (
      0 => './templates/header.tpl',
      1 => 1405134773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71314643453d37cfac66015-55166285',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navigation_array' => 0,
    'item' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53d37cfad31af6_69657091',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d37cfad31af6_69657091')) {function content_53d37cfad31af6_69657091($_smarty_tpl) {?><div class="header">
  <div>
    <h3> |
      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navigation_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['item']->value['current']) {?> 
          <?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
 |
        <?php } else { ?>
          <a style="color:green;" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</a> |
        <?php }?>
      <?php } ?> 
    </h3>
    <div class="exit">
      [<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
]&nbsp;&nbsp;
      <span><a id="editPassword" href="javascript:void(0)">修改密码</a></span>
      <span><a href="index.php">退出</a></span>
    </div>
  </div>
</div><?php }} ?>
