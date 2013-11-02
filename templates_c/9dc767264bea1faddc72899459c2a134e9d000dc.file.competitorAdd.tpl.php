<?php /* Smarty version Smarty-3.1.15, created on 2013-11-02 08:12:58
         compiled from ".\templates\competitorAdd.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25098527403191a5550-28377550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9dc767264bea1faddc72899459c2a134e9d000dc' => 
    array (
      0 => '.\\templates\\competitorAdd.tpl',
      1 => 1383379973,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25098527403191a5550-28377550',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_527403191df8d2_71556870',
  'variables' => 
  array (
    'competitions' => 0,
    'filter' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527403191df8d2_71556870')) {function content_527403191df8d2_71556870($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\wamp\\www\\timing\\libs\\plugins\\function.html_options.php';
?><script type="text/javascript">
    $(document).ready(function() {
        getCompetition($('select#selectCompetitionType').val());
    });
</script>

<form  method="post" action="competitors.php" id="createCompetitor" >
    <table>
        <tr><td>Bib:</td><td> <input type="text" name="bib"><br></td></tr>
        <tr><td>Name:</td><td> <input type="text" name="name"><br></td></tr>
        <tr><td>Type: </td><td><?php echo smarty_function_html_options(array('id'=>"selectCompetitionType",'onchange'=>"getCompetition("."$"."(this).val());",'options'=>$_smarty_tpl->tpl_vars['competitions']->value,'name'=>'type','selected'=>$_smarty_tpl->tpl_vars['filter']->value),$_smarty_tpl);?>
</td></tr>
        <input type="hidden" value="1" name="isAdded">
    </table>
    <div id="MyEdit">
    </div>
</form><?php }} ?>
