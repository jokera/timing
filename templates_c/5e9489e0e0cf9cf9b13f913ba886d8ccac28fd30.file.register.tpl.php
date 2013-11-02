<?php /* Smarty version Smarty-3.1.15, created on 2013-10-30 12:48:40
         compiled from ".\templates\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20996527100283f38a9-65030154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e9489e0e0cf9cf9b13f913ba886d8ccac28fd30' => 
    array (
      0 => '.\\templates\\register.tpl',
      1 => 1383134633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20996527100283f38a9-65030154',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_527100284218b6_49366885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527100284218b6_49366885')) {function content_527100284218b6_49366885($_smarty_tpl) {?><form  method="post" action="index.php" id ="registerForm">
            <table>
                <tr><td>Name:</td><td> <input type="text" name="name"><br></td></tr>
                <tr><td>Username:</td><td> <input type="text" name="user"><br></td></tr>
                <tr><td>Password: </td><td><input type="password" name="pass"><br></td></tr>
                <tr><td>Email: </td><td><input type="text" name="mail"><br></td></tr>
                <tr><td>Hint: </td><td><input type="text" name="hint"><br></td></tr>
                <input type="hidden" value="1" name="isSubmited">
                <tr><td></td><td><input type="submit" value="Signup"></td></tr>
            </table>
        </form><?php }} ?>
