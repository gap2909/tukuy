<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{$_pPlant.descrip}">
    <meta name="author" content="{$_pPlant.autor}">
    <link rel="icon" href="#">
    <!-- Bootstrap core CSS -->
    <link href="{$_pPlant.bootstrap_css}" rel="stylesheet">
    
    <!-- Estilo de Bootstrap Theme -->
    <link href="{$_pPlant.bootstrap_theme}" rel="stylesheet">
    <link href="{$_pPlant.ruta_css}estilos.css" rel="stylesheet">
    
    <title>{$_pPlant.app}: {$titulo}</title>
        
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
                        <a class="navbar-brand" href="{$_pPlant.url}">{$_pPlant.sistema.empresa}</a>
                    </div>
                    <div class="navbar-collapse collapse" id="navbarCollapse">
                        <ul class="nav navbar-nav navbar-right">
                            {foreach item=men from=$_pPlant.menu}
                                {if $men.id_categoria == 1}
                                    <li>
                                        <a href="{$_pPlant.url}{$men.menu_url}">{$men.menu_titulo}</a>
                                    </li>
                                {/if}
                            {/foreach}
                            {foreach item=log from=$_pPlant.menuLogin}
                                <li>
                                    <a href="{$_pPlant.url}{$log.menu_url}">{$log.menu_titulo}</a>
                                </li>
                            {/foreach}
                            <li class="navbar-text">Hoy:{$smarty.now|date_format:"%d/%m/%Y"}</li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container">
            {include file=$_contenido}
        </div>
        <!-- FOOTER -->
            <footer class="container">
                <p>&copy; {$_pPlant.sistema.year} {$_pPlant.sistema.empresa}.</p>
            </footer>
        
        <script src="{$_pPlant.jq}"></script>
        <script src="{$_pPlant.bootstrap_js}"></script>
        
    </body>
</html>