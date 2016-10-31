<?php
	include "template/topoAdm.php";
	
	
	if($conexao){
		$sql = "select * from prato";
		$rs = mysqli_query ($conexao, $sql);
		if($rs){?>
			<h1 align="center">Consulta de Pratos</h1>
			<table border class="table table-striped" width="40%" align="center">
			<tr>
				<th>ID</th>
                <th> Nome </th>
				<th> Estado </th>
                <th>Excluir</th>
			</tr>
			<?php
			while($valor = mysqli_fetch_array($rs)){?>
				<tr>
						<td><?php echo $valor["id_receita"]?></td>
                        <td><?php echo $valor["nome_receita"]?></td>
						<td><?php echo $valor["estado_receita"]?></td>
						<td align="center"><a href='deletePrato.php?id_receita=<?php echo $valor["id_receita"];?>'><img src="ico/delete.jpg" height="40" width="40" ></a></td>
				</tr>
				
					<?php } mysqli_free_result($rs); ?>
			</table>
			<!--Modal Prato -->
            <?php
				
			
        }
		else{
            echo "erro de consulta".mysqli_error($conexao);
        }
     }
	else{
		echo "Erro de conexao: ".mysqli_error($conexao);
	}
	
	include "template/rod.php";
?>
