<?php
	include "template/topo.php";
?>
	<div id="tela-adm">
		<h1 align="center">Área Administrativa</h1>
		<form action="listaPrato.php">
			<label>					
				<input type="submit" value="Listar Receitas" class="but-op"/>					
			</label>
		</form>
		
		<form action="formPrato.php">	
			<label>					
				<input type="submit" value="Criar Receitas" class="but-op"/>					
			</label>
		</form>
		
		<form action="logout.php">
			<label>					
				<input type="submit" value="Sair" class="but-op"/>					
			</label>
		</form>
	</div>	
<?php	
	include "template/rodape.php";
?>