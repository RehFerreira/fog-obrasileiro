<?php
    require_once "conexao/conecta.php";
	if(isset($_POST["mtn_con"])){
	$login = $_POST["usuario"];
	$senha = sha1($_POST["senha"]);
	$sql = "select* from usuario where usuario='$login'";
	$rs = mysqli_query($conexao,$sql);
	$linhas = mysqli_num_rows($rs);
	if ($linhas ==0){ 
		echo "<h1>Usuário não encontrado</h1>";
	}
	else{
		$valor = mysqli_fetch_array($rs);
		if($senha != $valor["senha"]){ 
			echo "Senha Incorreta";
		}
		else {
            ob_start();
			setcookie("usuario", $login, time()+17800);
			setcookie ("password", $senha, time()+17800);
            setcookie ("id_usuario", $valor["id_usuario"], time()+17800);
			echo"<meta http-equiv='refresh' content='0;url=index.php'>";
		}
	}
	}
	else{
	$login = $_POST["usuario"];
	$senha = $_POST["senha"];
	$sql = "select* from usuario where usuario='$login'";
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
			$_SESSION ["usuario"] = $login;
			$_SESSION ["password"] = $senha;
            $_SESSION ["id_usuario"] = $valor["id_usuario"];
			echo"<meta http-equiv='refresh' content='0;url=index.php'>";
		}
	}
}
?>