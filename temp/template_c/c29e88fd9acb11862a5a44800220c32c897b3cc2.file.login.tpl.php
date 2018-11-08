<?php /* Smarty version Smarty-3.1.16, created on 2018-06-21 00:07:01
         compiled from "C:\wamp64\www\gap\app\modulos\usuarios\vistas\login\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:215035b18a2b2375021-24065554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c29e88fd9acb11862a5a44800220c32c897b3cc2' => 
    array (
      0 => 'C:\\wamp64\\www\\gap\\app\\modulos\\usuarios\\vistas\\login\\login.tpl',
      1 => 1529539616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '215035b18a2b2375021-24065554',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5b18a2b29f0677_38246888',
  'variables' => 
  array (
    '_pPlant' => 0,
    'titulo' => 0,
    '_error' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b18a2b29f0677_38246888')) {function content_5b18a2b29f0677_38246888($_smarty_tpl) {?><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
app/modulos/usuarios/vistas/css/login.css">

<div class="container well" id="formularioLogin">
    <div class="row">
        <div class="col-xs-12">
            <img src="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
app/modulos/usuarios/vistas/img/profle.png" class="img-responsive" id="avatar" >
        </div>
    </div>
    <div><h1 class="text-center text-primary"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1></div>
    
    <p><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
</p>
    <form class="login" action="" method="post">
        
        <input id="enviar" name="enviar" type="hidden" value="1">
        
        <div class="form-group">
            <label for="usuario" class="sr-only">Usuario:</label>
            <input class="form-control" id="usuario" name="usuario" type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['usuario'];?>
" placeholder="Usuario" autofocus="true">
        </div>
        
        <div class="form-group">
            <label for="clave" class="sr-only">Clave:</label>
            <input class="form-control" id="clave" name="clave" type="password" placeholder="Clave">
        </div>
        
        <div class="checkbox">
            <label class="checkbox">
                <input value="1" name="recuerdame" type="checkbox">No cerrar sesi&oacute;n
            </label>
        </div>
        
        <div class="form-group">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Acceder</button>
        </div>
        
        <p class="help-block">
            ¿No puedes acceder? <a class="btn btn-sm btn-info" href="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
usuarios/login/reset">Recuperar Clave</a>
        </p>
        <p class="help-block">
            ¿No te has registrado? <a class="btn btn-sm btn-success" href="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
usuarios/registro">Registrarme</a>
        </p>
    </form>
</div><?php }} ?>
