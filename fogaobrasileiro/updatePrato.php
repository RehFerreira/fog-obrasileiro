<?php
	include "template/topo.php";
	$id_receita = $_GET['id_receita'];
	$nome_receita = $_POST['nome_receita'];
	$estado_receita = $_POST['estado_receita'];
	$historia = $_POST['historia'];
	$modo_preparo = $_POST['modo_preparo'];
	$ingredientes = $_POST['ingredientes'];
	$foto_antiga = $_POST['foto_antiga'];
	$tempo_de_preparo = $_POST['tempo_de_preparo'];
	$rendimento = $_POST['rendimento'];
	

	
	if($_FILES["foto"]["error"] == 0){
		$ext = substr($_FILES["foto"]["name"],
					strpos(strrev($_FILES["foto"]["name"]),".")*-1);
					
		$foto = md5(time().$_FILES["foto"]["name"]).".".$ext;
		move_uploaded_file($_FILES["foto"]["tmp_name"], "img/prato/".$foto);
	}else{
		$foto = md5(time().$FILES["foto"]["name"]).".".$ext;
		move_uploaded_file($FILES["foto"]["tmp_name"],"img/prato/".$foto);
	}
	if($foto_antiga != "img/prato/sem_foto.png"){
		unlink("img/prato/".$foto_antiga);
	}
	else{
		$foto = -1;
	}
	if($conexao){
		$sql = "UPDATE receita set
		nome_receita = '$nome_receita',
		estado_receita = '$estado_receita',
		historia = '$historia',
		modo_de_preparo = '$modo_preparo',
		ingredientes = '$ingredientes',
		tempo_preparo = '$tempo_de_preparo',
		rendimento = '$rendimento' ". ($foto == -1? "" : ",foto_receita = '$foto' ")." WHERE id_receita = $id_receita;";
		
		$rs = mysqli_query($conexao,$sql);
		if($rs){
			echo "<h1>Receita Atualizada</h1>";
		}else{
			echo "Erro de inclusão: ".mysqli_error($conexao);
		}
	}
	else{
		echo "Erro de conexao: ".mysqli_error($conexao);
	}
	include "template/rodape.php";
?>