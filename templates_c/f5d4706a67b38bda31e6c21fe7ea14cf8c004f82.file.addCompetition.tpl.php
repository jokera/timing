<?php /* Smarty version Smarty-3.1.15, created on 2013-11-02 14:23:51
         compiled from ".\templates\addCompetition.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2137052715b5c983795-29395479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5d4706a67b38bda31e6c21fe7ea14cf8c004f82' => 
    array (
      0 => '.\\templates\\addCompetition.tpl',
      1 => 1383402225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2137052715b5c983795-29395479',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52715b5c9bf039_26126337',
  'variables' => 
  array (
    'competitions' => 0,
    'filter' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52715b5c9bf039_26126337')) {function content_52715b5c9bf039_26126337($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\wamp\\www\\timing-master\\timing-master\\libs\\plugins\\function.html_options.php';
?><form  method="post" action="competitions.php" id ="addCompetition">
    <table>
        <tr><td>Name:</td><td> <input type="text" name="name"><br></td></tr>
        <tr><td>Place:</td><td> <input type="text" name="place"><br></td></tr>
        <tr><td>Date:</td><td> <input type="text" id="datepicker" name="date"><br></td></tr>
        <tr><td>Type: </td><td>
                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['competitions']->value,'name'=>'type','selected'=>$_smarty_tpl->tpl_vars['filter']->value),$_smarty_tpl);?>

            </td></tr>
        <input type="hidden" value="1" name="isAdded">
        <tr><td></td><td><input type="submit" value="Add"></td></tr>
    </table>
</form><?php }} ?>
