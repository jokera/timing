<?php /* Smarty version Smarty-3.1.15, created on 2013-11-02 11:21:01
         compiled from ".\templates\competitionEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182715272cf01185447-89270776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48007d03aa869691b38c5fec8e8aeaca2cd11f79' => 
    array (
      0 => '.\\templates\\competitionEdit.tpl',
      1 => 1383348874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182715272cf01185447-89270776',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5272cf011ce4d3_14002840',
  'variables' => 
  array (
    'result' => 0,
    'competitions' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5272cf011ce4d3_14002840')) {function content_5272cf011ce4d3_14002840($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\wamp\\www\\timing-master\\timing-master\\libs\\plugins\\function.html_options.php';
?><form  method="post" action="competitions.php" class="editCompetition">
    <table>
        <tr><td>Name:</td><td> <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['name'];?>
"<br></td></tr>
        <tr><td>Place:</td><td> <input type="text" name="place" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['place'];?>
"><br></td></tr>
        <tr><td>Date:</td><td><input type="text" name="date"  id="datepicker" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['date'];?>
"></td></tr>
        <tr><td>Type: </td><td> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['result']->value['type'];?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['competitions']->value,'name'=>'type','selected'=>$_tmp1),$_smarty_tpl);?>
 </td></tr>
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="isSubmited">
        <tr><td></td><td><input type="submit" value="Save"></td></tr>
    </table>
    <ul class="menu">
        <li  onclick="location.href = 'competitions.php?createStartList=<?php echo $_smarty_tpl->tpl_vars['result']->value['competition_id'];?>
';">
            Edit start list
        </li>
    </ul>
</form><?php }} ?>
