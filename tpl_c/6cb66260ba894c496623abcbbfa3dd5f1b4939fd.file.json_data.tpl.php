<?php /* Smarty version Smarty-3.1.16, created on 2015-11-16 10:07:17
         compiled from "/var/www/html/booked/tpl/json_data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199705482156495d7d107b18-01766166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cb66260ba894c496623abcbbfa3dd5f1b4939fd' => 
    array (
      0 => '/var/www/html/booked/tpl/json_data.tpl',
      1 => 1446683002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199705482156495d7d107b18-01766166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56495d7d114434_31074980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56495d7d114434_31074980')) {function content_56495d7d114434_31074980($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['data']->value!='') {?>
<?php echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['error']->value!='') {?>
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }?><?php }} ?>
