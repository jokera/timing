<?php /* Smarty version Smarty-3.1.15, created on 2013-11-02 08:47:42
         compiled from ".\templates\adminMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32416527100221731c2-20679732%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '318b544bcfe68f70cf4973694b3bea0065d170bf' => 
    array (
      0 => '.\\templates\\adminMenu.tpl',
      1 => 1383348874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32416527100221731c2-20679732',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_527100221a5e80_08313839',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527100221a5e80_08313839')) {function content_527100221a5e80_08313839($_smarty_tpl) {?><ul class ="menu" >   
    <li onclick="location.href = './admin.php';"> home</a></li>
    <li onclick="location.href = './forum.php';"> forum</a></li>
    <li onclick="location.href = './contacts.php';"> contacts</a></li>
    <li onclick="location.href = './album.php';"> album</a></li>
    <li onclick="location.href = './competitors.php';">  competitors</a></li>
    <li onclick="location.href = './competitions.php';">  competitions</a></li>
    <li onclick="location.href = './admin.php?action=logout';"> logout</a></li>
</ul><?php }} ?>
