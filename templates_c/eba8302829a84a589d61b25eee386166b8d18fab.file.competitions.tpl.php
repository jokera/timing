<?php /* Smarty version Smarty-3.1.15, created on 2013-11-02 08:51:04
         compiled from ".\templates\competitions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44052714e70b34724-15905808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eba8302829a84a589d61b25eee386166b8d18fab' => 
    array (
      0 => '.\\templates\\competitions.tpl',
      1 => 1383348874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44052714e70b34724-15905808',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52714e70baf8c8_04300539',
  'variables' => 
  array (
    'sortby' => 0,
    'allCompetitions' => 0,
    'filter' => 0,
    'competitions' => 0,
    'disabledEdit' => 0,
    'result' => 0,
    'role' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52714e70baf8c8_04300539')) {function content_52714e70baf8c8_04300539($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\wamp\\www\\timing-master\\timing-master\\libs\\plugins\\function.html_options.php';
?><form action="competitions.php" method="post">
    <table id="competitions">
        <thead>
        <th onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['sortby']->value;?>
name';" >Name</th>
        <th onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['sortby']->value;?>
place';" >Place</th>
        <th onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['sortby']->value;?>
date';" >Date</th>
        <th onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['sortby']->value;?>
type';" >Type</th>
        <th width="1%" > <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['allCompetitions']->value,'name'=>'filter','onchange'=>'this.form.submit();','selected'=>$_smarty_tpl->tpl_vars['filter']->value),$_smarty_tpl);?>
</th>
        </thead>
        <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['competitions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
            <?php if ((!$_smarty_tpl->tpl_vars['disabledEdit']->value)) {?>
                <?php $_smarty_tpl->tpl_vars['role'] = new Smarty_variable("./competitions.php?editCompetitionID=".((string)$_smarty_tpl->tpl_vars['result']->value['competition_id']), null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars['role'] = new Smarty_variable("./results.php?competitionID=".((string)$_smarty_tpl->tpl_vars['result']->value['competition_id']), null, 0);?>
            <?php }?>
            <tr >
                <td onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['role']->value;?>
';"><?php echo $_smarty_tpl->tpl_vars['result']->value['name'];?>
</td>
                <td onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['role']->value;?>
';"><?php echo $_smarty_tpl->tpl_vars['result']->value['place'];?>
</td>
                <td onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['role']->value;?>
';"><?php echo $_smarty_tpl->tpl_vars['result']->value['date'];?>
</td>
                <td onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['role']->value;?>
';"><?php echo $_smarty_tpl->tpl_vars['result']->value['type'];?>
</td>
                <?php if ((!$_smarty_tpl->tpl_vars['disabledEdit']->value)) {?>
                    <td  id="deleteCompetition" onclick=conf(<?php echo $_smarty_tpl->tpl_vars['result']->value['competition_id'];?>
); >Delete</td>
                <?php }?>
            </tr>
        <?php } ?>
    </table>
</form><?php }} ?>
