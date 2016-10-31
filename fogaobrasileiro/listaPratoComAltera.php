<?php
	include "template/topoAdm.php";
	
	
	if($conexao){
		$sql = "select * from prato";
		$rs = mysqli_query ($conexao, $sql);
		if($rs){?>
			<h1 align="center">Consulta de Pratos</h1>
			<table border class="table table-striped" width="40%" align="center">
			<tr>
				<th>ID</th>
                <th> Nome </th>
				<th> Estado </th>
                <th>Editar</th>
                <th>Excluir</th>
			</tr>
			<?php
			while($valor = mysqli_fetch_array($rs)){?>
				<tr>
						<td><?php echo $valor["id_receita"]?></td>
                        <td><?php echo $valor["nome_receita"]?></td>
						<td><?php echo $valor["estado_receita"]?></td>
						<td align="center"><a href='#' data-toggle='modal' data-target= '#modalAltera' '?id_receita=<?php echo $valor["id_receita"];?>'><img src="ico/edit.jpg" height="40" width="40"></a></td>
						<td align="center"><a href='deletePrato.php?id_receita=<?php echo $valor["id_receita"];?>'><img src="ico/delete.jpg" height="40" width="40" ></a></td>
				</tr>
				
					<?php } mysqli_free_result($rs); ?>
			</table>
			<!--Modal Prato -->
<div id="modalAltera" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Alteração do Prato</h4>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="alteraPrato.php?id_receita="<?php echo $_GET["id_receita"]?>>
          <div class="form-group">
            <label for="nome">Nome: </label>
                <input type="text" class="input_text" name="nome_receita" value = "<?php echo $valor ['nome_receita'];?>"/>
          </div>
            
            <br>
            <div class="form-group">
              <label for="estado_receita">Estado:</label>
              <select class="form-control" id="estado" name="estado_receita" value="<?php $valor['estado_receita'];?>" >
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
                <textarea class="message" name="historia" value = "<?php echo $valor ["historia"]; ?>"></textarea> 
            </div>
            <div class = "form-group">
                <label> Modo de preparo:</label>
                <textarea class="message" name="modo_preparo" value= "<?php echo $valor ["modo_de_preparo"]; ?>"></textarea> 
            </div>
            <div class="form-group">
                <label for="foto">Foto: </label>
                <input type = "file" name = "foto" id = "foto"><br><br>
						<input type = "hidden" name = "foto_antiga" value ="<?php echo $valor['foto_receita'];?>">
            </div>
             <div class = "form-group">
                <label> Ingredientes:</label>
                <textarea class="message" name="ingredientes" value = "<?php echo $valor ["ingredientes"]; ?>"></textarea> 
            </div>
             <div class = "form-group">
                <label> Tempo de preparo:</label>
                <input type="text" class="input_text" name="tempo_de_preparo"value = "<?php echo $valor ["tempo_preparo"]; ?>" />
            </div>
			<div class = "form-group">
				<label> Rendimento</label>
				<input type="text" class="input_text" name="rendimento"value="<?php echo $valor ["rendimento"]; ?>" />
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
            <?php
				
			
        }
		else{
            echo "erro de consulta".mysqli_error($conexao);
        }
     }
	else{
		echo "Erro de conexao: ".mysqli_error($conexao);
	}
	
	include "template/rod.php";
?>
