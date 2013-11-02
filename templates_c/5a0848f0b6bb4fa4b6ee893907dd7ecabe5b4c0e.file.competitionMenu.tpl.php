<?php /* Smarty version Smarty-3.1.15, created on 2013-11-02 08:51:03
         compiled from ".\templates\competitionMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1569952710ea7ede750-76106271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a0848f0b6bb4fa4b6ee893907dd7ecabe5b4c0e' => 
    array (
      0 => '.\\templates\\competitionMenu.tpl',
      1 => 1383348874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1569952710ea7ede750-76106271',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52710ea7f18730_79185611',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52710ea7f18730_79185611')) {function content_52710ea7f18730_79185611($_smarty_tpl) {?> <div class="menu">
        <div class ="leftMenu">
            <ul >   
                <li onclick="location.href = './competitions.php?action=createNew';"> Create</a></li>
                <li onclick="location.href = './results.php';"> results</a></li>
                <li onclick="location.href = './contacts.php';"> contacts</a></li>
            </ul>
        </div>
    </div>

<?php }} ?>
