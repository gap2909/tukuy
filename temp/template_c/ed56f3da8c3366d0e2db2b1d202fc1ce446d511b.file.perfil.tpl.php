<?php /* Smarty version Smarty-3.1.16, created on 2018-06-22 14:35:38
         compiled from "C:\wamp64\www\gap\app\modulos\usuarios\vistas\perfil\perfil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4695b2ba176583707-63758207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed56f3da8c3366d0e2db2b1d202fc1ce446d511b' => 
    array (
      0 => 'C:\\wamp64\\www\\gap\\app\\modulos\\usuarios\\vistas\\perfil\\perfil.tpl',
      1 => 1529678128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4695b2ba176583707-63758207',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5b2ba1767bfa49_82528168',
  'variables' => 
  array (
    'titulo' => 0,
    'usuario' => 0,
    '_mensaje' => 0,
    'datos' => 0,
    '_pPlant' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2ba1767bfa49_82528168')) {function content_5b2ba1767bfa49_82528168($_smarty_tpl) {?><h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

<p>Hola <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</p>

<p><?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>
</p>
<table class="table table-bordered table-striped">
    <tr>
        <th>Usuario:</th>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['usuario'];?>
</td>
    </tr>
    <tr>
        <th>Nombres:</th>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['nombres'];?>
</td>
    </tr>
    <tr>
        <th>Apellidos:</th>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['apellidos'];?>
</td>
    </tr>
    <tr>
        <th>Fecha Nacimiento:</th>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['f_nacimiento'];?>
</td>
    </tr>
    <tr>
        <th>G&eacute;nero:</th>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['datos']->value['genero']==1) {?>
                Masculino
            <?php } else { ?>
                Femenino
            <?php }?>
        </td>
    </tr>
    <tr>
        <th>Correo:</th>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['email'];?>
</td>
    </tr>
    <tr>
        <th>Fecha de Registro:</th>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['creado'];?>
</td>
    </tr>
</table>
    <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
usuarios/perfil/editar/<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
">Editar</a>
<?php }} ?>
