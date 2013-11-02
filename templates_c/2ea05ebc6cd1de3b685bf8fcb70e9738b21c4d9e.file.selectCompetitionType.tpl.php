<?php /* Smarty version Smarty-3.1.15, created on 2013-10-30 13:53:02
         compiled from ".\templates\selectCompetitionType.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24966527101da9cab36-63907337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ea05ebc6cd1de3b685bf8fcb70e9738b21c4d9e' => 
    array (
      0 => '.\\templates\\selectCompetitionType.tpl',
      1 => 1383141178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24966527101da9cab36-63907337',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_527101da9cb7c9_66847455',
  'variables' => 
  array (
    'autoSubmit' => 0,
    'competitionsArray' => 0,
    'selected' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527101da9cb7c9_66847455')) {function content_527101da9cb7c9_66847455($_smarty_tpl) {?><?php if (($_smarty_tpl->tpl_vars['autoSubmit']->value)) {?>
    <select name="filter"  onchange="this.form.submit();">
        <option value="All">All</option>
    <?php } else { ?>
        <select name="type" id="selectCompetitionType"  onchange="getCompetition($('select#selectCompetitionType').val());">
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['competitionsArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
            <?php if (($_smarty_tpl->tpl_vars['selected']->value==$_smarty_tpl->tpl_vars['v']->value)) {?> 
                <option selected= <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
 > <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
            <?php } else { ?> {
                <option value=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
 ><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option> 
            <?php }?>
        <?php } ?>
    </select><?php }} ?>
