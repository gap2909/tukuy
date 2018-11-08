<h2>{$titulo}</h2>

<p>{$mensaje}</p>

{if $logeo == 'autenticado'}
    <a class="btn btn-primary" href="{$_pPlant.url}usuarios/login">Iniciar Sesi&oacute;n</a>
{/if}