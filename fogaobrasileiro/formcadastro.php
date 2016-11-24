<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastro Usuário</title>
</head>
<body>

	<form>

<!-- DADOS PESSOAIS-->
<fieldset>
 <legend>Dados Pessoais</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="nome">Nome: </label>
   </td>
   <td align="left">
    <input type="text" name="email">
   </td>
   <td>
    <label for="sobrenome">Sobrenome: </label>
   </td>
   <td align="left">
    <input type="text" name="sobrenome">
   </td>
  </tr>
  <tr>
   <td>
   	<LABEL for = "data">Data de Nascimento: </LABEL>
   </td>
   	<td align="left">
	<input type="date">
	</td>
	<td align="left">
	<label for ="sexo">*Sexo: </label>
	<INPUT type="radio" name="sex" value="Male" CHECKED> Feminino
    <INPUT type="radio" name="sex" value="Female"> Masculino<BR>
	</td>
 	 </tr>
 </table>
</fieldset>

<br />

<!-- DADOS DE LOGIN -->
<fieldset>
 <legend>Dados de login</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="email">E-mail: </label>
   </td>
   <td align="left">
    <input type="text" name="email">
   </td>
  </tr>
  <tr>
   <td>
    <label for="imagem">Imagem de perfil:</label>
   </td>
   <td>
    <input type="file" name="imagem" >

   </td>
  </tr>
  <tr>
   <td>
    <label for="login">Login de usuário: </label>
   </td>
   <td align="left">
    <input type="text" name="login">
   </td>
  </tr>
  <tr>
   <td>
    <label for="pass">Senha: </label>
   </td>
   <td align="left">
    <input type="password" name="pass">
   </td>
  </tr>
  <tr>
   <td>
    <label for="passconfirm">Confirme a senha: </label>
   </td>
   <td align="left">
    <input type="password" name="passconfirm">
   </td>
  </tr>
 </table>
</fieldset>
<br />
<fieldset>
	<legend>Sobre você:</legend>
	  <tr>
   <td>
    <label for="prefere">Você prefere:</label>
   </td>
   <td align="left">
    <select name="prefere"> 
    <option value="ac">Massas</option> 
    <option value="al">Carnes</option> 
    <option value="am">Amazonas</option> 
    <option value="ap">Amapá</option> 
   </select>
   </td>
  </tr>

</fieldset></br>
<input type="submit">
<input type="reset" value="Limpar">
</form>



</body>
</html>