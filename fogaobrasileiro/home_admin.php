<?php
	if(isset($_SESSION["login"])){
    	if($_COOKIE["password"] != sha1("feijoada"){
        	header("location:home.php");
		}
			
	}
	else{
		header("location:home.php");
		}	

	include "template/topoAdm.php";
?>

<h1>Bem Vindo Admin</h1>