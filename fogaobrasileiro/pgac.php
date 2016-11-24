<?php
	include "template/topo.php";
?>
	<br><br>
	<div id="imgestado">
		<img src="img/estado/imgac.jpg" width="100%" height="500px">
	</div><!--/imagem relacionada ao estado-->
	<div id="divisoria">
		<br><br><br><br><br><br><p>Lista de Receitas do Acre:</p>
		<div id="ordenar"></div><!--/ordenar por-->
	</div><!--/divisória entre a imagem e os pratos-->
	<div id="pratos">
		<div id="receita1">
			<img src="img/prato/acprato.jpg" width="320px" height="250px">
			<div id="descricao"></div><!--/descricao-->
		</div><!--/receita 1-->
		<div id="receita2">
			<img src="img/prato/acprato2.jpg" width="320px" height="250px">
			<div id="descricao"></div><!--/descricao-->
		</div><!--/ receita 2-->
		<div id="receita3">
			<img src="img/prato/acprato3.jpg" width="320px" height="250px">
			<div id="descricao"></div><!--/descricao-->
		</div><!--/receita 3-->
	</div><!--/pratos LEMBRANDO QUE, esses números são só para demonstrar como deve ficar visualmente, já que o certo é utilizar uma div exemplar e replicá-la com php -->
	
<?php
	include "template/rodape.php";
?>