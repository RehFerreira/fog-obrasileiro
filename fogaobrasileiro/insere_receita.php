<?php
	include "template/topoAdm.php";
	$nome_receita = $_POST['nome_receita'];
	$estado_receita = $_POST['estado_receita'];
	$modo_preparo = $_POST['modo_preparo'];
	$ingredientes = $_POST['ingredientes'];
	$tempo_de_preparo = $_POST['tempo_de_preparo'];
	$rendimento = $_POST['rendimento'];
    $id_receita = $_POST['id_receita'];
    $id_usuario = $_POST['id_usuario'];


	if($_FILES["foto"]["error"] == 0){
		$ext = substr($_FILES["foto"]["name"],
					strpos(strrev($_FILES["foto"]["name"]),".")*-1);
					
		$foto = md5(time().$_FILES["foto"]["name"]).".".$ext;
		move_uploaded_file($_FILES["foto"]["tmp_name"], "img/receita/".$foto);
	}else{
		$foto = "img/prato/sem_foto.png";
	}

	if($conexao){
		$sql = "insert into receita(nome_receita_usuario, estado_receita_usuario, modo_de_preparo, foto_receita, ingredientes, tempo_preparo, rendimento,id_receita,id_usuario)"."values('$nome_receita','$estado_receita','$modo_preparo','$foto','$ingredientes','$tempo_de_preparo','$rendimento','$id_receita','$id_usuario')";
		$rs = mysqli_query($conexao,$sql);
		if($rs){
			echo "<meta http-equiv='refresh' content='0;url=index.php'>";
		}
		else{
			echo "<h1>Erro de inclusão: </h1>".mysqli_error($conexao);
		}
	}
	else{
		echo "<h1>Erro de Conexão :(</h1>".mysqli_error($conexao);
	}
	
	include "template/rod.php";
?>
