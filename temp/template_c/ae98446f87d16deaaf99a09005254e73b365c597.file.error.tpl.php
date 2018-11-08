<?php /* Smarty version Smarty-3.1.16, created on 2018-06-12 02:23:53
         compiled from "C:\wamp64\www\gap\app\modulos\errores\vistas\error\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203605b11e8b88e18f4-18332651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae98446f87d16deaaf99a09005254e73b365c597' => 
    array (
      0 => 'C:\\wamp64\\www\\gap\\app\\modulos\\errores\\vistas\\error\\error.tpl',
      1 => 1528770229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203605b11e8b88e18f4-18332651',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5b11e8b892a091_01368450',
  'variables' => 
  array (
    'titulo' => 0,
    'mensaje' => 0,
    '_pPlant' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b11e8b892a091_01368450')) {function content_5b11e8b892a091_01368450($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>

<p><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</p>
<a class="btn btn-primary" href="javascript:history.back(1)">Ir atras</a> | <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
">Ir al Inicio</a><?php }} ?>
