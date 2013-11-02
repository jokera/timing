<?php /* Smarty version Smarty-3.1.15, created on 2013-11-02 08:47:30
         compiled from ".\templates\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:316515270fbba220b16-69454679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85192c6e9f55456bef8cf932502504a0684ee09b' => 
    array (
      0 => '.\\templates\\menu.tpl',
      1 => 1383348874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '316515270fbba220b16-69454679',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5270fbba2503f4_35405907',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5270fbba2503f4_35405907')) {function content_5270fbba2503f4_35405907($_smarty_tpl) {?><div class ="menu">
    <ul>
        <li onclick="location.href = 'index.php';"> Home</li>
        <li onclick="location.href = 'index.php?action=register';">  register</li>
        <li onclick="location.href = 'forum.php';"> forum</li>
        <li onclick="location.href = 'contacts.php';"> contacts</li>
        <li onclick="location.href = 'index.php?action=login';"> Login</li>
    </ul>
</div><?php }} ?>
