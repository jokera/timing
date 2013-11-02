<?php /* Smarty version Smarty-3.1.15, created on 2013-11-02 08:13:32
         compiled from ".\templates\competitors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30175273ec6076cef4-04113990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19afd2baa2c2df2d16d4196d2727a037add10e83' => 
    array (
      0 => '.\\templates\\competitors.tpl',
      1 => 1383380006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30175273ec6076cef4-04113990',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5273ec607d5926_92483808',
  'variables' => 
  array (
    'sort' => 0,
    'competitionID' => 0,
    'allCompetitions' => 0,
    'filter' => 0,
    'result' => 0,
    'res' => 0,
    'header' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5273ec607d5926_92483808')) {function content_5273ec607d5926_92483808($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\wamp\\www\\timing\\libs\\plugins\\function.html_options.php';
?><script type="text/javascript">
    $(document).ready(function() {
        getCompetition($('select#selectCompetitionType').val());
    });
</script>
<form  method="post" action="competitors.php">
    <table id="competitors">
        <thead>
        <th onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
bib';"> Bib </th>
        <th onclick ="location.href = '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
name';">Name</th>
        <th onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
type';" >Type</th>
            <?php if ((!$_smarty_tpl->tpl_vars['competitionID']->value)) {?>
            <th><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['allCompetitions']->value,'name'=>'filter','onchange'=>'this.form.submit();','selected'=>$_smarty_tpl->tpl_vars['filter']->value),$_smarty_tpl);?>
</th>
            <?php }?>
        </thead>
        <?php  $_smarty_tpl->tpl_vars['res'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['res']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['res']->key => $_smarty_tpl->tpl_vars['res']->value) {
$_smarty_tpl->tpl_vars['res']->_loop = true;
?>
            <tr>
                <td onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['header']->value[$_smarty_tpl->tpl_vars['res']->value['competitor_id']];?>
';"><?php echo $_smarty_tpl->tpl_vars['res']->value['bib'];?>
</td>
                <td onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['header']->value[$_smarty_tpl->tpl_vars['res']->value['competitor_id']];?>
';"><?php echo $_smarty_tpl->tpl_vars['res']->value['name'];?>
</td>
                <td onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['header']->value[$_smarty_tpl->tpl_vars['res']->value['competitor_id']];?>
';"><?php echo $_smarty_tpl->tpl_vars['res']->value['type'];?>
</td>
                <?php if ((!$_smarty_tpl->tpl_vars['competitionID']->value)) {?>
                    <td  id="deleteCompetitor" onclick="confir(<?php echo $_smarty_tpl->tpl_vars['res']->value['competitor_id'];?>
, '<?php echo $_smarty_tpl->tpl_vars['res']->value['name'];?>
');" >Delete</td>
                <?php }?>
            </tr>
        <?php } ?>
    </table>
</form><?php }} ?>
