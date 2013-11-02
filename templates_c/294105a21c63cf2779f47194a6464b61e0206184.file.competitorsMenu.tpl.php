<?php /* Smarty version Smarty-3.1.15, created on 2013-11-02 08:47:58
         compiled from ".\templates\competitorsMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23129527100221c6403-35918559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '294105a21c63cf2779f47194a6464b61e0206184' => 
    array (
      0 => '.\\templates\\competitorsMenu.tpl',
      1 => 1383348874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23129527100221c6403-35918559',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_527100221c8303_99927428',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527100221c8303_99927428')) {function content_527100221c8303_99927428($_smarty_tpl) {?>    <div class="menu">
        <div class ="leftMenu">
            <ul >   
                <li onclick="location.href = './competitors.php?action=createNew';"> Add</a></li>
                <li onclick="location.href = './results.php';"> results</a></li>
                <li onclick="location.href = './contacts.php';"> contacts</a></li>
            </ul>
        </div>
    </div><?php }} ?>
