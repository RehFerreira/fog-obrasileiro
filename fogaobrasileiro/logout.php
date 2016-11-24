<?php
	include "conexao/conecta.php";

	if(isset($_SESSION)){
		session_destroy();
		
		echo"<meta http-equiv='refresh' content='20;url=index.php'>";
	}
	else{
		//setcookie("login");
		//setcookie("senha");

		echo"<meta http-equiv='refresh' content='0;url=index.php'>";
	}
?>