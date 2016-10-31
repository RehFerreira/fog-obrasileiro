<?php
    ob_start();
	include "abreConexao.php";

	if(isset($_SESSION)){
		session_destroy();
		
		header("Location:index.php");
	}
	else{
        setcookie("usuario", "", time() - 3600);
        setcookie("password", "", time() - 3600);
		setcookie("id_usuario", "", time() - 3600);

		header("Location:index.php");
	}
?>