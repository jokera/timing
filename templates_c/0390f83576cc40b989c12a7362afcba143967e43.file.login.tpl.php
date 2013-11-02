<?php /* Smarty version Smarty-3.1.15, created on 2013-11-02 08:47:35
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2148552710029c992d6-46912558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1383348874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2148552710029c992d6-46912558',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52710029cc9b51_71355183',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52710029cc9b51_71355183')) {function content_52710029cc9b51_71355183($_smarty_tpl) {?><div id="loginForm">
            <form  method="post" action="index.php">
                <table>
                    <tr><td>Username:</td><td> <input type="text" name="user"><br></td></tr>
                    <tr><td>Password: </td><td><input type="password" name="pass"><br></td></tr>
                    <input type="hidden" name="logged" value="1">
                    <tr><td></td><td><input type="submit" value="Login"> </td></tr>
                </table>
            </form>
        </div><?php }} ?>
