<?php
include "template/topo.php";
	$nome = $_POST['nome'];	
	$sexo = isset($_POST['sexo'])?$_POST['sexo']:'M';
	$estado = isset($_POST['estado'])?$_POST['estado']:'AC';
	$email = $_POST['email'];	
	$usuario = $_POST['usuario'];
	$senha = sha1($_POST['senha']);
	
	if($_FILES["foto"]["error"] == 0){
		$ext = substr($_FILES["foto"]["name"],
					strpos(strrev($_FILES["foto"]["name"]),".")*-1);
					
		$foto = md5(time().$_FILES["foto"]["name"]).".".$ext;
		move_uploaded_file($_FILES["foto"]["tmp_name"], "img/perfil/".$foto);
	}else{
		$foto = "user.png";
	}	
	
	if($conexao){
			$sql = "insert into usuario(nome, sexo, estado, email, usuario, senha, foto) ".
				"values ('$nome', '$sexo', '$estado', '$email', '$usuario', '$senha', '$foto')";
		$rs = mysqli_query($conexao, $sql);		
		
		if($rs){
			echo "<meta http-equiv='refresh' content='0;url=index.php'>";
		}
		else{
			echo "Erro de inclusão: ".mysqli_error($conexao);
		}
	}
	else{
		echo "Erro de conexão ".mysqli_error($conexao);
	}	
include "template/rod.php";
?>