<?php
        require_once "conexao/conecta.php";
	if(isset($_POST["mtn_con"])){
	$login = $_POST["login"];
	$senha = $_POST["password"];
	$sql = "select* from admin where login='$login'";
	$rs = mysqli_query($conexao,$sql);
	$linhas = mysqli_num_rows($rs);
	if ($linhas ==0){ 
		echo "<h1>Usuário não encontrado</h1>";
	}
	else{
		$valor = mysqli_fetch_array($rs);
		if($senha!= $valor["senha"]){ 
			echo "Senha Incorreta";
		}
		else {
			setcookie("login", $login, time()+17800);
			setcookie ("senha", $senha, time()+17800);
			echo"<h1>Usuario Logado com Sucesso</h1>";
			echo"<meta http-equiv='refresh' content='0;url=telaAdm.php'>";
		}
	}
	}
	else{
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
		if($senha!= $valor["senha"]){ 
			echo "Senha Incorreta";
		}
		else {
			$_SESSION ["login"] = $login;
			$_SESSION ["senha"] = $senha;
			echo"<h1>Usuario Logado com Sucesso</h1>";
			echo"<meta http-equiv='refresh' content='0;url=telaAdm.php'>";
		}
	}
}
?>