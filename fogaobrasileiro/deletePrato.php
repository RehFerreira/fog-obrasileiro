<?php
	include "template/topo.php";
		$id_receita = $_GET['id_receita'];
		if($conexao){
			$sql = "Select * FROM prato
				WHERE id_receita =".$_GET['id_receita'];
			$rs = mysqli_query($conexao,$sql);
			if($valor = mysqli_fetch_array($rs)){
				$sql = "DELETE FROM prato WHERE id_receita= $id_receita;";
					$rs=mysqli_query($conexao,$sql);
				if($rs){
					echo "<meta http-equiv='refresh' content='0;url=listaPrato.php'>";
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
    include "template/rod.php";
?>