<?php
	include "template/topo.php";
?>

	<div id="form-login">
		<form name = "form_login" action = "login3.php" method = "POST">
			<h2>FAZER LOGIN</h2>
			<label>
				<input type = "text" name = "login" class="input_login"  placeholder="Usuario" size = "40"  maxlenght = "30"> <br/>
			</label>
			<label>
				<input type = "password" name = "password" class="input_login" placeholder="Senha" size = "40"  maxlenght = "30"> <br/>
			</label>
			<label>	
				<input type="checkbox" name="lembre"> Lembrar-me &nbsp;&nbsp;&nbsp;&nbsp;
				<a href="esqueci_senha.php">Esqueceu sua senha?</a> <br/>
					<input type = "submit"  value = "ENTRAR" class="but">
			</label>	
		</form>
	</div>
<?php
	include "template/rodape.php";
?>