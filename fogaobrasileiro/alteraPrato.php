<?php
	include "template/topo.php";
	if($conexao){
		$sql = "select * from receita where id_receita =".$_GET['id_receita'];
			
			$rs = mysqli_query($conexao, $sql);
			if($rs){
				if($valor = mysqli_fetch_array($rs)){?>
				<form name="altPrato" action="updatePrato.php?id_receita=<?php echo $valor["id_receita"];?>" method="POST" enctype="multipart/form-data">
			<div class="box"> <center><h1>Altera a Receita</h1></center>
				<label> 
                <span>Nome da receita</span> 
				ID: <input type ="text" name="id_receita" size = "5" value = "<?php echo $valor['id_receita'];?>" readonly><br>
                <input type="text" class="input_text" name="nome_receita" value = "<?php echo $valor ['nome_receita'];?>">

                </label>
           
        <label>
        <span>Selecione um estado</span>
        <select name="estado_receita"  value="<?php $valor['estado_receita'];?>" >
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
    </label>
	<br/>
                        <label> 
                            <span>História da receita:</span> 
                            <textarea class="message" name="historia" value = "<?php echo $valor ["historia"]; ?>"></textarea> 
                            
                        </label> 
                           <label> 
                            <span>Modo de preparo:</span> 
                            <textarea class="message" name="modo_preparo" value= "<?php echo $valor ["modo_de_preparo"]; ?>"></textarea> 
                           
                        </label> 
                    <span>Foto/Imagem:</span> 
                    <input type = "file" name = "foto" id = "foto"><br><br>
						<input type = "hidden" name = "foto_antiga" value ="<?php echo $valor['foto_receita'];?>">
                    </label> 
                    <label> 
                            </label> 
                           <label> 
                            <span>Ingredientes:</span> 
                            <textarea class="message" name="ingredientes" value = "<?php echo $valor ["ingredientes"]; ?>"></textarea> 
                           
                        </label> 
                                    <label> 
                <span>Tempo de preparo</span> 
                <input type="text" class="input_text" name="tempo_de_preparo"value = "<?php echo $valor ["tempo_preparo"]; ?>" />
                </label>
                            <label> 
                <span>Rendimento</span> 
                <input type="text" class="input_text" name="rendimento"value="<?php echo $valor ["rendimento"]; ?>" />
                </label>
				<label>					
					<input type="submit" value="CADASTRAR" class="button"/>					
				</label> 
			</div>
		</form>
				<?php
				}			
				else{
					echo "Usuário não cadastrado";
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