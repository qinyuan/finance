<?php /* Smarty version Smarty-3.1.16, created on 2014-07-27 13:32:18
         compiled from "./templates/pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27299719253d37cfadfdde3-73140342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17a030637237b037806e3ae876ce352aee202ddb' => 
    array (
      0 => './templates/pagination.tpl',
      1 => 1406439135,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27299719253d37cfadfdde3-73140342',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53d37cfaec9f25_38697574',
  'variables' => 
  array (
    'change_page_href' => 0,
    'row_count' => 0,
    'space' => 0,
    'page_size' => 0,
    'page_count' => 0,
    'page_num' => 0,
    'link' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d37cfaec9f25_38697574')) {function content_53d37cfaec9f25_38697574($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['link'] = new Smarty_variable(($_smarty_tpl->tpl_vars['change_page_href']->value).("?pageNum="), null, 0);?>
<?php $_smarty_tpl->tpl_vars['space'] = new Smarty_variable("&nbsp;&nbsp;&nbsp;&nbsp;", null, 0);?>
<input type="hidden" id="changePageHref" value="<?php echo $_smarty_tpl->tpl_vars['change_page_href']->value;?>
" />
<div class="count">
  总数:<?php echo $_smarty_tpl->tpl_vars['row_count']->value;?>
<?php echo $_smarty_tpl->tpl_vars['space']->value;?>

  每页显示:<?php echo $_smarty_tpl->tpl_vars['page_size']->value;?>
<?php echo $_smarty_tpl->tpl_vars['space']->value;?>

  总页数:<?php echo $_smarty_tpl->tpl_vars['page_count']->value;?>
<?php echo $_smarty_tpl->tpl_vars['space']->value;?>

  当前页:<?php echo $_smarty_tpl->tpl_vars['page_num']->value;?>

</div>
<div class="link">
  <?php if ($_smarty_tpl->tpl_vars['page_num']->value>1) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
1">首页</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page_num']->value-1;?>
">上一页</a>
  <?php } else { ?>
    <span class='gray'>首页</span>
    <span class='gray'>上一页</span>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page_num']->value<$_smarty_tpl->tpl_vars['page_count']->value) {?>
    <a href='<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page_num']->value+1;?>
'>下一页</a>
    <a href='<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page_count']->value;?>
'>尾页</a>
  <?php } else { ?>
    <span class='gray'>下一页</span>
    <span class='gray'>尾页</span>
  <?php }?>
  <?php echo $_smarty_tpl->tpl_vars['space']->value;?>

  转到第<select id="pageNumSelect">
  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['page_count']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
"<?php if ($_smarty_tpl->tpl_vars['index']->value==$_smarty_tpl->tpl_vars['page_num']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
</option>
  <?php endfor; endif; ?> 
  </select>页
</div><?php }} ?>
