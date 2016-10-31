<?php
    include "template/topo.php";
?>



    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button  class="close"><a href = "listaPrato.php">&times;</a></button>
       <center><h3 class="modal-title">Bem vindo Administrador</h3></center>
      </div>

      <table class = "table" >
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="login_admin.php">

            
          <div class="form-group">
            <label for="usuario">Usuário: </label>
            <input type="text" class="form-control" id="usuario" name="login">
          </div>
          
          <div class="form-group">
            <label for="senha">Senha: </label>
            <input type="password" class="form-control" id="senha" name="password">
          </div>

            <center><button type="submit" class="btn btn-success">Entrar</button></center>
        </form>
      </div>
    </table>
      </div>




<?php
    include "template/rod.php";
?>