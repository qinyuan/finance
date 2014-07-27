<?php /* Smarty version Smarty-3.1.16, created on 2014-07-26 18:03:38
         compiled from "./templates/pagination-table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194427767353d37cfad37997-71194804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0de7c78ce437eb49dfc5252129f76d04c3a8dfe' => 
    array (
      0 => './templates/pagination-table.tpl',
      1 => 1405738613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194427767353d37cfad37997-71194804',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ths' => 0,
    'th' => 0,
    'page_size' => 0,
    'rows' => 0,
    'row' => 0,
    'text' => 0,
    'remain_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53d37cfadf7550_73755753',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d37cfadf7550_73755753')) {function content_53d37cfadf7550_73755753($_smarty_tpl) {?><div class="content">
  <span class="addLink"><a href="javascript:void(0)">添加</a></span>
  <table class="nor">
    <tr>
    <?php  $_smarty_tpl->tpl_vars['th'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['th']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ths']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['th']->key => $_smarty_tpl->tpl_vars['th']->value) {
$_smarty_tpl->tpl_vars['th']->_loop = true;
?>
      <th<?php if (isset($_smarty_tpl->tpl_vars['th']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['th']->value['class'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['th']->value['text'];?>
</th>
    <?php } ?>
    </tr>
  <?php $_smarty_tpl->tpl_vars['remain_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['page_size']->value, null, 0);?>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
    <tr>
    <?php  $_smarty_tpl->tpl_vars['text'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['text']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value['texts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['text']->key => $_smarty_tpl->tpl_vars['text']->value) {
$_smarty_tpl->tpl_vars['text']->_loop = true;
?>
      <td><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</td>
    <?php } ?>
    <?php if (isset($_smarty_tpl->tpl_vars['row']->value['with_handle'])&&$_smarty_tpl->tpl_vars['row']->value['with_handle']) {?>
      <td class="handle">
      <?php if (!(isset($_smarty_tpl->tpl_vars['row']->value['no_edit'])&&$_smarty_tpl->tpl_vars['row']->value['no_edit'])) {?>
        <img id="edit<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" src="css/img/edit.gif" title="修改" />
      <?php }?>
      <?php if (!(isset($_smarty_tpl->tpl_vars['row']->value['no_delete'])&&$_smarty_tpl->tpl_vars['row']->value['no_delete'])) {?>
        <img id="delete<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" src="css/img/delete.gif" title="删除" />
      <?php }?>
      </td>
    <?php }?>
    </tr>
    <?php $_smarty_tpl->tpl_vars['remain_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['remain_count']->value-1, null, 0);?>
  <?php } ?>
  <?php if ($_smarty_tpl->tpl_vars['remain_count']->value>0) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['remain_count']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
    <tr>
    <?php  $_smarty_tpl->tpl_vars['th'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['th']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ths']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['th']->key => $_smarty_tpl->tpl_vars['th']->value) {
$_smarty_tpl->tpl_vars['th']->_loop = true;
?>
      <td></td>
    <?php } ?>
    </tr>
    <?php endfor; endif; ?>
  <?php }?>
  </table>
  <div id="pageInfo">
    <?php echo $_smarty_tpl->getSubTemplate ("pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </div>
</div><?php }} ?>
