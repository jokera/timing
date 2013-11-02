<?php /* Smarty version Smarty-3.1.15, created on 2013-11-02 08:47:42
         compiled from ".\templates\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:237052710ea654b681-15140114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dde4406728b78ad8acb77d025ffd08e41bf138dd' => 
    array (
      0 => '.\\templates\\admin.tpl',
      1 => 1383348874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237052710ea654b681-15140114',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52710ea657cf34_93374599',
  'variables' => 
  array (
    '_SESSION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52710ea657cf34_93374599')) {function content_52710ea657cf34_93374599($_smarty_tpl) {?>
<link rel="stylesheet" type="text/css" href="../main.css">
<div id="adminContainer">
    <p>Admin panels</p>
   </p> <?php echo $_smarty_tpl->tpl_vars['_SESSION']->value['name'];?>
  " you are admin. "  </p>  
</div>

<?php }} ?>
