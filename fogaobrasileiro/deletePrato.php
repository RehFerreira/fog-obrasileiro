<?php
	include "template/topo.php";
		$id_receita = $_GET['id_receita'];
		if($conexao){
			$sql = "Select * FROM receita
				WHERE id_receita =".$_GET['id_receita'];
			$rs = mysqli_query($conexao,$sql);
			if($valor = mysqli_fetch_array($rs)){
				$sql = "DELETE FROM receita WHERE id_receita= $id_receita;";
					$rs=mysqli_query($conexao,$sql);
				if($rs){
					echo "<h1> Prato Excluido com sucesso.</h1>";
					unlink("img/prato/".$valor["foto_receita"]);
				}
				else{
					echo "Erro de exclusão: ".mysqli_error($conexao);
				}
			}
		}
		else{
			echo "Erro de conexão: ".mysqli_error($conexao);
		}
     include "template/rodape.php";   
?>