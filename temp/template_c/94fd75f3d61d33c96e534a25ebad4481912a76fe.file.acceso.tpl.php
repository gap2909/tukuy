<?php /* Smarty version Smarty-3.1.16, created on 2018-06-12 02:14:08
         compiled from "C:\wamp64\www\gap\app\modulos\errores\vistas\error\acceso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172995b1229ddcfe6a9-42580268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94fd75f3d61d33c96e534a25ebad4481912a76fe' => 
    array (
      0 => 'C:\\wamp64\\www\\gap\\app\\modulos\\errores\\vistas\\error\\acceso.tpl',
      1 => 1528769642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172995b1229ddcfe6a9-42580268',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5b1229ddef9c55_73879979',
  'variables' => 
  array (
    'titulo' => 0,
    'mensaje' => 0,
    'logeo' => 0,
    '_pPlant' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1229ddef9c55_73879979')) {function content_5b1229ddef9c55_73879979($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>

<p><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</p>

<?php if ($_smarty_tpl->tpl_vars['logeo']->value=='autenticado') {?>
    <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
usuarios/login">Iniciar Sesi&oacute;n</a>
<?php }?><?php }} ?>
