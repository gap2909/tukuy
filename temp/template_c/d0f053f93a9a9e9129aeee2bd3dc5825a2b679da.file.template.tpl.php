<?php /* Smarty version Smarty-3.1.16, created on 2018-11-08 16:39:00
         compiled from "C:\wamp\www\web\app\vistas\plantillas\default\template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19933723145be466a4a19430-90253996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0f053f93a9a9e9129aeee2bd3dc5825a2b679da' => 
    array (
      0 => 'C:\\wamp\\www\\web\\app\\vistas\\plantillas\\default\\template.tpl',
      1 => 1529535072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19933723145be466a4a19430-90253996',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_pPlant' => 0,
    'titulo' => 0,
    'men' => 0,
    'log' => 0,
    '_contenido' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5be466a505c4c2_34416720',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be466a505c4c2_34416720')) {function content_5be466a505c4c2_34416720($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\web\\libs\\smarty\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['descrip'];?>
">
    <meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['autor'];?>
">
    <link rel="icon" href="#">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['bootstrap_css'];?>
" rel="stylesheet">
    
    <!-- Estilo de Bootstrap Theme -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['bootstrap_theme'];?>
" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['ruta_css'];?>
estilos.css" rel="stylesheet">
    
    <title><?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['app'];?>
: <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
        
</head>
    <body>
        <header>
            <nav class="navbar navbar-primary navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="sr-only">Men&uacute;</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['sistema']['empresa'];?>
</a>
                    </div>
                    <div class="navbar-collapse collapse" id="navbarCollapse">
                        <ul class="nav navbar-nav navbar-right">
                            <?php  $_smarty_tpl->tpl_vars['men'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['men']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_pPlant']->value['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['men']->key => $_smarty_tpl->tpl_vars['men']->value) {
$_smarty_tpl->tpl_vars['men']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['men']->value['id_categoria']==1) {?>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['men']->value['menu_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['men']->value['menu_titulo'];?>
</a>
                                    </li>
                                <?php }?>
                            <?php } ?>
                            <?php  $_smarty_tpl->tpl_vars['log'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['log']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_pPlant']->value['menuLogin']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['log']->key => $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->_loop = true;
?>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['log']->value['menu_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['log']->value['menu_titulo'];?>
</a>
                                </li>
                            <?php } ?>
                            <li class="navbar-text">Hoy:<?php echo smarty_modifier_date_format(time(),"%d/%m/%Y");?>
</li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container">
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        <!-- FOOTER -->
            <footer class="container">
                <p>&copy; <?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['sistema']['year'];?>
 <?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['sistema']['empresa'];?>
.</p>
            </footer>
        
        <script src="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['jq'];?>
"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['bootstrap_js'];?>
"></script>
        
    </body>
</html><?php }} ?>
