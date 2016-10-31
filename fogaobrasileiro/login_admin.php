<?php
    require_once "conexao/conecta.php";

	$login = $_POST["login"];
	$senha = $_POST["password"];
	$sql = "select* from admin where login='$login'";
	$rs = mysqli_query($conexao,$sql);
	$linhas = mysqli_num_rows($rs);
	if ($linhas ==0){ 
		echo "Usuário não encontrado";
	}
	else{
		$valor = mysqli_fetch_array($rs);
		if(sha1($senha)!= $valor["senha"]){ 
			echo "Senha Incorreta";
		}
		else {
		
			$_SESSION ["login"] = $login;
			$_SESSION ["password"] = $senha;
			echo"<meta http-equiv='refresh' content='0;url=listaPrato.php'>";
		}
	}
?>