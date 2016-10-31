<nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
			

              <a class="navbar-brand" href="index.php" ><img src = "img/logo2.png" style="float: left; height: 50px; width: 90px; position: relative;">Fogão Brasileiro</a>
       
			</div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="navbar-brand" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="margin-left: 15px;" >Estados<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="pagest.php?estado=AC">Acre</a></li>
                    <li><a href="#">Alagoas</a></li>
                    <li><a href="#">Amapá</a></li>
                    <li><a href="#">Amazonas</a></li>
                    <li><a href="#">Bahia</a></li>
                    <li><a href="#">Ceará</a></li>
                    <li><a href="#">Distrito Federal</a></li>
                    <li><a href="#">Espírito Santo</a></li>
                    <li><a href="#">Goiás</a></li>
                    <li><a href="#">Maranhão</a></li>
                    <li><a href="#">Mato Grosso</a></li>
                    <li><a href="#">Mato Grosso do Sul</a></li>
                    <li><a href="#">Minas Gerais</a></li>
                    <li><a href="#">Pará</a></li>
                    <li><a href="#">Paraíba</a></li>
                    <li><a href="#">Paraná</a></li>
                    <li><a href="#">Pernambuco</a></li>
                    <li><a href="#">Piauí</a></li>
                    <li><a href="#">Rio de Janeiro</a></li>
                    <li><a href="#">Rio Grande do Norte</a></li>
                    <li><a href="#">Rio Grande do Sul</a></li>
                    <li><a href="#">Rondônia</a></li>
                    <li><a href="#">Roraima</a></li>
                    <li><a href="#">Santa Catarina</a></li>
                    <li><a href="#">São Paulo</a></li>
                    <li><a href="#">Sergipe</a></li>
                    <li><a href="#">Tocantins</a></li>
                  </ul>
                </li>
              </ul>
              <form class="navbar-form navbar-left">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Encontre uma receita">
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
              </form>
			  <ul class="nav navbar-nav navbar-right">
                <li><?php if(count($_COOKIE)==0){echo '<a href="#"data-toggle="modal" data-target="#modalCadUser">Cadastre-se</a>';}else{echo '<a href="logout.php">Logout</a>';}?></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li ><?php if (count($_COOKIE)>0){ echo '<p style="margin-top: 16.5px; margin-right: 20px; color: white;">'.$_COOKIE["usuario"].'</p>';}else {echo '<a href="#"data-toggle="modal" data-target="#modalLogin">Entrar</a>';}?> </li>
              </ul>
			  
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
</nav>
<!-- Modal Login-->
	<div id="modalLogin" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Fazer Login</h4>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="login_usuario.php">
            
          <div class="form-group">
            <label for="email">Usuário: </label>
            <input type="text" class="form-control" id="email" name="usuario">
          </div>
            
          <div class="form-group">
            <label for="senha">Senha: </label>
            <input type="password" class="form-control" id="senha" name="senha">
          </div>
        <div class="checkbox">
            <label><input type="checkbox" name = "mtn_con">Mantenha-me conectado</label>
        </div>
           <center><button type="submit" class="btn btn-default">Enviar</button></center>
            
          </form>
        </div>
        </div></div></div>

<!--Modal Usuário-->
<div id="modalCadUser" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cadastre-se no Fogão Brasileiro</h4>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="insere_usuario.php">
          <div class="form-group">
            <label for="nome">Nome Completo: </label>
            <input type="text" class="form-control" id="nome" name = "nome">
          </div>
            
          <div class="form-group">
            <label for="email">Email: </label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
            
          <div class="form-group">
            <label for="usuario">Usuário: </label>
            <input type="text" class="form-control" id="usuario" name="usuario">
          </div>
          
          <div class="form-group">
            <label for="senha">Senha: </label>
            <input type="password" class="form-control" id="senha" name="senha">
          </div>
          <label class="radio-inline">
            <input type="radio" name="sexo">Masculino  
          </label>
          <label class="radio-inline">
            <input type="radio" name="sexo">Feminino 
          </label>
            <br><br>
            <div class="form-group">
              <label for="estado">De qual estado brasileiro você é ?:</label>
              <select class="form-control" id="estado" name="estado">
                <option>Acre</option>
                <option>Alagoas</option>
                <option>Amapá</option>
                <option>Amazonas</option>
                <option>Bahia</option>
                <option>Ceará</option>
                <option>Distrito Federal</option>
                <option>Espírito Santo</option>
                <option>Goiás</option>
                <option>Maranhão</option>
                <option>Mato Grosso</option>
                <option>Mato Grosso do Sul</option>
                <option>Minas Gerais</option>
                <option>Pará</option>
                <option>Paraíba</option>
                <option>Paraná</option>
                <option>Pernambuco</option>
                <option>Piauí</option>
                <option>Rio de Janeiro</option>
                <option>Rio Grande do Norte</option>
                <option>Rio Grande do Sul</option>
                <option>Rondônia</option>
                <option>Roraima</option>
                <option>Santa Catarina</option>
                <option>São Paulo</option>
                <option>Sergipe</option>
                <option>Tocantins</option>
              </select>
            </div>
            <div class="form-group">
                <label for="foto">Foto: </label>
                <input type="file" class="form-control" id="foto" name="foto">
            </div>
            <center><button type="submit" class="btn btn-primary">Enviar</button></center>
        </form>
      </div>
    </div>

  </div>
</div>

<body>