<?php
	include "template/topo.php";
	
	if($conexao){
		$sql = "select * from receita";
		$rs = mysqli_query ($conexao, $sql);
		if($rs){?>
			<h1 align="center">Consulta de Pratos</h1>
			<table border = "1" width="40%" align="center">
			<tr>
				<th>ID</th>
                <th> Nome </th>
				<th> Estado </th>
                <th>Editar</th>
                <th>Excluir</th>
			</tr>
			<?php
			while($valor = mysqli_fetch_array($rs)){?>
				<tr>
						<td><?php echo $valor["id_receita"]?></td>
                        <td><?php echo $valor["nome_receita"]?></td>
						<td><?php echo $valor["estado_receita"]?></td>
						<td align="center"><a href='alteraPrato.php?id_receita=<?php echo $valor["id_receita"];?>'><img src="ico/edit.jpg" height="40" width="40"></a></td>
						<td align="center"><a href='deletePrato.php?id_receita=<?php echo $valor["id_receita"];?>'><img src="ico/delete.jpg" height="40" width="40" ></a></td>
				</tr>
				
					<?php } mysqli_free_result($rs); ?>
			</table>
			
            <?php
				
			
        }
		else{
            echo "erro de consulta".mysqli_error($conexao);
        }
     }
	else{
		echo "Erro de conexao: ".mysqli_error($conexao);
	}
	include "template/rodape.php";
?>
