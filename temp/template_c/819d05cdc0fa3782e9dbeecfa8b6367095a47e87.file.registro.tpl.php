<?php /* Smarty version Smarty-3.1.16, created on 2018-11-08 16:39:13
         compiled from "C:\wamp\www\web\app\modulos\usuarios\vistas\registro\registro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9166907385be466b10c4511-72222137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '819d05cdc0fa3782e9dbeecfa8b6367095a47e87' => 
    array (
      0 => 'C:\\wamp\\www\\web\\app\\modulos\\usuarios\\vistas\\registro\\registro.tpl',
      1 => 1529545063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9166907385be466b10c4511-72222137',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_pPlant' => 0,
    'titulo' => 0,
    '_error' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5be466b117b210_57397545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be466b117b210_57397545')) {function content_5be466b117b210_57397545($_smarty_tpl) {?><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
app/modulos/usuarios/vistas/css/login.css">

<div class="container well" id="formularioRegistro">
    <div class="row">
        <div class="col-xs-12">
            <img src="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
app/modulos/usuarios/vistas/img/compose.png" class="img-resFiles_Icon_96ponsive" id="avatarRegistro" >
        </div>
        
    </div>
        <div><h1 class="text-center text-primary"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1></div>
    
    <p><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
</p>
    <form class="registro" action="" method="post">
        
        <input id="enviar" name="enviar" type="hidden" value="1">
        <div class="form-group">
            <label class="sr-only" for="usuario">Usuario:</label>
            <input class="form-control" id="usuario" name="usuario" type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['usuario'];?>
" placeholder="Usuario" autofocus="true">
        </div>
        
        <div class="form-group">
            <label class="sr-only" for="nombres">Nombres:</label>
            <input class="form-control" id="nombres" name="nombres" type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['nombres'];?>
"  placeholder="Nombres">
        </div>
        
        <div class="form-group">
            <label class="sr-only" for="apellidos">Apellidos:</label>
            <input class="form-control" id="apellidos" name="apellidos" type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['apellidos'];?>
" placeholder="Apellidos">
        </div>
        
        <div class="form-group">
            <label for="nacimiento">Fecha Nacimiento:</label>
            <input class="form-control" id="nacimiento" name="nacimiento" type="date" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['nacimiento'];?>
" placeholder="Fecha Nacimiento">
        </div>
        
        <div class="form-group">
            <label>G&eacute;nero: </label><br>
            <label for="genero">Hombre: </label>
                <input class="radio radio-inline" name="genero" type="radio" value="1">
            <label for="genero"> | Mujer: </label>
                <input class="radio radio-inline" name="genero" type="radio" value="2">
            
        </div>
        
        <div class="form-group">
            <label class="sr-only" for="email">Correo-E:</label>
            <input class="form-control" id="email" name="email" type="email" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['email'];?>
" placeholder="Correo Electr&oacute;nico">
        </div>
        
        <div class="form-group">
            <label class="sr-only" for="email2">Confirmar Correo-E:</label>
            <input class="form-control" id="email2" name="email2" type="email" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['email2'];?>
" placeholder="Confirmar Correo">
        </div>
        
        <div class="form-group">
            <label class="sr-only" for="clave">Clave:</label>
            <input class="form-control" id="clave" name="clave" type="password" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['clave'];?>
" placeholder="Clave">
        </div>
        
        <div class="form-group">
            <label class="sr-only" for="clave2">Confirmar Clave:</label>
            <input class="form-control" id="clave2" name="clave2" type="password" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['clave2'];?>
" placeholder="Confirmar Clave">
        </div>
        
        <div class="form-group">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>
        </div>
        
        <p class="help-block">
            ¿Ya estas registrado? <a class="btn btn-sm btn-success" href="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
usuarios/login">Acceder</a>
        </p>
    </form>
</div><?php }} ?>
