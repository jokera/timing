<?php /* Smarty version Smarty-3.1.15, created on 2013-11-01 19:33:15
         compiled from ".\templates\competitorEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10648527400e9555ac3-13346330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ea2055fbffc5b4a80812cb7b84c923ccb1ed27b' => 
    array (
      0 => '.\\templates\\competitorEdit.tpl',
      1 => 1383334394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10648527400e9555ac3-13346330',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_527400e9590b39_32545337',
  'variables' => 
  array (
    'result' => 0,
    'competitions' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527400e9590b39_32545337')) {function content_527400e9590b39_32545337($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\wamp\\www\\timing\\libs\\plugins\\function.html_options.php';
?><div id="editCompetitor">
    <form  method="post" action="competitors.php" >
        <table>
            <tr><td>Bib:</td><td> <input type="text" name="bib" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['bib'];?>
"<br></td></tr>
            <tr><td>Name:</td><td> <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['name'];?>
"<br></td></tr>
            <tr><td>Type: </td><td><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['competitions']->value,'name'=>'type','selected'=>$_smarty_tpl->tpl_vars['result']->value['type']),$_smarty_tpl);?>
</td></tr>
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="isSubmited">
            <tr><td></td><td><input type="submit" value="Save"></td></tr>
        </table>
    </form>
</div>
<?php }} ?>
