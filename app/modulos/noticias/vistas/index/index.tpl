
<div>
<table class="table table-hover">
	<tr>
		<th>ID</th>
		<th>TITULO</th>
		<th class="center">CUERPO</th>
		<th>PALABRAS CLAVES</th>
		<th>ID CATEGORIA</th>
		<th>AUTOR</th>
		<th>CREADOR</th>
		<th>MODIFICADO</th>
	</tr>
	{foreach item=it from=$mensaje}
	<tr>	
		<td>{$it.id}</td>
		<td>{$it.titulo}</td>
		<td>{$it.cuerpo}</td>
		<td>{$it.palabras_claves}</td>
		<td>{$it.id_categoria}</td>
		<td>{$it.id_autor}</td>
		<td>{$it.creado}</td>
		<td>{$it.modificado}</td>
	</tr>
	{/foreach}
	
</table>
</div>	
