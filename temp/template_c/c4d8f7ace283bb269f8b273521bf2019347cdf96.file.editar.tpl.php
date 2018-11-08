<?php /* Smarty version Smarty-3.1.16, created on 2018-06-22 14:36:25
         compiled from "C:\wamp64\www\gap\app\modulos\usuarios\vistas\perfil\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:244405b2bf8e4293f13-80956748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4d8f7ace283bb269f8b273521bf2019347cdf96' => 
    array (
      0 => 'C:\\wamp64\\www\\gap\\app\\modulos\\usuarios\\vistas\\perfil\\editar.tpl',
      1 => 1529678170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '244405b2bf8e4293f13-80956748',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5b2bf8e461c062_26061895',
  'variables' => 
  array (
    'titulo' => 0,
    'usuario' => 0,
    '_error' => 0,
    '_pPlant' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2bf8e461c062_26061895')) {function content_5b2bf8e461c062_26061895($_smarty_tpl) {?><h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

<p>Hola <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
</p>
    <form class="editar" action="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
usuarios/perfil/editar" method="post">
        
        <input id="enviar" name="enviar" type="hidden" value="1">
        
        <table class="table table-bordered table-striped">
            <tr>
                <td><label>Nombres:</label></td>
                <td><input id="nombres" name="nombres" type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['nombres'];?>
"></td>
            </tr>
            <tr>
                <td><label>Apellidos:</label></td>
                <td><input id="apellidos" name="apellidos" type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['apellidos'];?>
"></td>
            </tr>
            <tr>
                <td><label>Fecha Nacimiento:</label></td>
                <td><input id="f_nacimiento" name="f_nacimiento" type="date" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['f_nacimiento'];?>
"></td>
            </tr>
            <tr>
                <td><label>G&eacute;nero:</label></td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['datos']->value['genero']==1) {?>
                        Masculino: <input class="radio radio-inline" name="genero" type="radio" value="1" checked>
                        Femenino: <input class="radio radio-inline" name="genero" type="radio" value="2">
                    <?php } else { ?>
                        Masculino: <input class="radio radio-inline" name="genero" type="radio" value="1">
                        Femenino: <input class="radio radio-inline" name="genero" type="radio" value="2" checked>
                    <?php }?>
                </td>
            </tr>
            <tr>
                <td><label>Correo:</label></td>
                <td><input id="email" name="email" type="email" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['email'];?>
"></td>
            </tr>
            <tr>
                <td><label>Confirma Clave actual:</label></td>
                <td><input id="clave" name="clave" type="password"></td>
            </tr>
        </table>
            <button class="btn btn-primary" type="submit">Actualizar</button>
</form>

<?php }} ?>
