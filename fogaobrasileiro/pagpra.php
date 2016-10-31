<?php
    include "template/topo.php";
if($conexao){
		$sql = "select * from prato where id_receita =".$_GET['id_receita'];
			
			$rs = mysqli_query($conexao, $sql);
			if($rs){
				if($valor = mysqli_fetch_array($rs)){?>



<div class="container-fluid">
    <center><h1><?php echo $valor["nome_receita"];?> <?php if(count($_COOKIE)>0){ echo '<a href = "a"data-toggle="modal" data-target="#modalCadReceita"<button type="button" class="btn btn-warning" style="margin-left:10px">+</button></a>';} else{echo "";}?></h1></center>
    <div class="row">
        <div class="col-sm-2" >
        
        </div>
        
        <img src="img/prato/<?php echo $valor["foto_receita"];?>" class="col-sm-4">
        
        <div class="col-sm-4">
            <p>
                <?php echo $valor["historia"];?>
            </p>
        </div>
        
        <div class="com-sm-2">
        
        </div>
        
    </div>
    <div class="row">
        <div class="col-sm-2">
        
        </div>
        
        <div class="col-sm-4">
            <h3>Ingredientes</h3>
            <ul>
                <li>1Kg de feijão preto</li>
                <li>100g de carne seca</li>
                <li>70g de orelha de porco</li>
                <li>70g de rabo de porco</li>
                <li>70g de pé de porco</li>
                <li>100g de costelinha de porco</li>
                <li>50g de lombo de porco</li>
                <li>100g de paio</li>
                <li>150g de linguiça portuguesa</li>
            </ul>
        </div>
        
        <div class="col-sm-4">
            <h3>Modo de Preparo</h3>
            <ol>
                <li>Coloque as carnes de molho por 36 horas ou mais, vá trocando a água várias vezes, se for ambiente quente ou verão, coloque gelo por cima ou em camadas frias</li>
                <li>Coloque para cozinhar passo a passo: as carnes duras, em seguida as carnes moles</li>
                <li>Quando estiver mole coloque o feijão, e retire as carnes</li>
                <li>Finalmente tempere o feijão</li>
            </ol>
        </div>
        
        
        <div class="col-sm-2">
        
        </div>
    </div>
    <hr>
    <div class = "row">
    <?php if($conexao){
				$sqll = "SELECT * FROM receita WHERE id_receita =".$_GET['id_receita'];
				$rss = mysqli_query($conexao,$sqll);
                $cont = 0;
				if ($rss) {		
					while ($valorr = mysqli_fetch_array($rss)) {
						
                        
                        echo "<div class = 'col-sm-6 col-md-4'>";
                        
                        echo "<div class = 'thumbnail'>";

						echo "<img src='img/receita/".$valorr["foto_receita"]." ' alt='img/prato/sem_foto.png' height = 250px width = 420px></a><br>";
                        
                        echo "<div class = 'caption'>";

						
						echo "<h3>".$valorr["nome_receita_usuario"]."</h3>";
                        $sqlll = "SELECT * FROM usuario WHERE id_usuario =".$valorr['id_usuario'];
                        $rsss = mysqli_query($conexao,$sqlll);
                        if($rsss){
                            while($valorrr = mysqli_fetch_array($rsss)){
                                echo "<h3>postado por: ".$valorrr["usuario"]."</h3>";
                            
                                
                        }
                        }
                        else{
				                echo "Erro de consulta de produto : " .mysqli_error($conexao);
			                 }
                        
                        
                        
                        echo "<p>";
                            
                        $sqllll = "SELECT * FROM receita WHERE id_receita =".$valorr['id_receita'];
                        $rssss = mysqli_query($conexao,$sqllll);
                        if($rssss){
                            while($valorrrr = mysqli_fetch_array($rssss)){
                        
                        echo "<a href = 'pagrec.php?id_receita_usuario=".$valorrrr["id_receita_usuario"]. " 'class = 'btn btn-primary' role = 'button'>Ver mais detalhes</a>";
                        
                        }
                        }
                        else{
				                echo "Erro de consulta de produto : " .mysqli_error($conexao);
			                 }
                            
                        
                        echo "</p>";
                        
                        echo "</div>";
                        
                        echo "</div>";
                        
                        echo "</div>";
                        
                        
                        


				}mysqli_free_result($rss);
			}
			else{
				echo "Erro de consulta de produto : " .mysqli_error($conexao);
			}
		}else{
			echo "Erro de conexão : " .mysqli_error($conexao);
		}?>
        </div>
    

</div>
<div id="modalCadReceita" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cadastro de Receita</h4>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="insere_receita.php">
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
            <input type="hidden" name="id_receita" value="<?php echo $_GET["id_receita"]?>">
            <input type="hidden" name="id_usuario" value="<?php echo $_COOKIE["id_usuario"]?>">
            <center><button type="submit" class="btn btn-default">Enviar</button></center>
        </form>
      </div>
    </div>

  </div>
</div>



<?php
                    }			
				else{
					echo "Prato não cadastrado";
					mysqli_free_result($rs);
				}
			}else {
				echo "Erro de alteração de prato: ".mysqli_error($conexao);	
		}
		}
		else{ 
			echo "Erro de conexão: ".mysqli_error($conexao);
		}
    include "template/rod.php";
?>