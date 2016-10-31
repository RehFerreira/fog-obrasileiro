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
			echo"<meta http-equiv='refresh' content='0;url=logando.php'>";
		}
?>
<?php
    include "template/topo.php";
?>

<?php
    include "template/rod.php";
?>