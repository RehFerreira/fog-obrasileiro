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
			

              <a class="navbar-brand" href="index.php"><img src = "img/logo2.png" style="float: left; height: 50px; width: 90px; position: relative;">Fogão Brasileiro</a>
       
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
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
              </form>
			  
              <ul class="nav navbar-nav navbar-right">
					
					<li role="separator" class="divider"></li>
                    <li><a href="listaPrato.php">Lista dos Pratos</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"data-toggle="modal" data-target="#modalCadPrato">Cadastrar Prato</a></li>
					<li role="separator" class="divider"></li>
                    <li><a href="logout.php">Logout</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
</nav>


<!--Modal Prato -->
<div id="modalCadPrato" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cadastro do Prato</h4>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="inserePrato.php">
          <div class="form-group">
            <label for="nome">Nome: </label>
            <input type="text" class="form-control" id="nome" name = "nome_receita">
          </div>
            
            <br><br>
            <div class="form-group">
              <label for="estado_receita">Estado:</label>
              <select class="form-control" id="estado" name="estado_receita">
                <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AP">AP</option>
            <option value="AM">AM</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="DF">DF</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MT">MT</option>
            <option value="MS">MS</option>
            <option value="MG">MG</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PR">PR</option>
            <option value="PE">PE</option>
            <option value="PT">PI</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RS">RS</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="SC">SC</option>
            <option value="SP">SP</option>
            <option value="SE">SE</option>
            <option value="TO">TO</option>
              </select>
            </div>
			<div class = "form-group">
                <label> História:</label>
                <textarea class="message" name="historia" ></textarea>
            </div>
            <div class = "form-group">
                <label> Modo de preparo:</label>
                <textarea class="message" name="modo_preparo" ></textarea>
            </div>
            <div class="form-group">
                <label for="foto">Foto: </label>
                <input type="file" class="form-control" id="foto" name="foto">
            </div>
             <div class = "form-group">
                <label> Ingredientes:</label>
                <textarea class="message" name="ingredientes" ></textarea>
            </div>
             <div class = "form-group">
                <label for="tempo_preparo"> Tempo de preparo: (minutos)</label>
                <input type="int" class="form-control" id="tempo_preparo" name = "tempo_de_preparo">
            </div>
            <div class = "form-group">
                <label for="rendimento"> Rendimento: (porções)</label>
                <input type="int" class="form-control" id="rendimento" name = "rendimento">
            </div>
            <center><button type="submit" class="btn btn-default">Enviar</button></center>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" style="float:right">Close</button>
      </div>
    </div>

  </div>
</div>

