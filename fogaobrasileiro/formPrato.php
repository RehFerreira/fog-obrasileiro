<?php
	include "template/topo.php";
?>
		<form name="incPrato" action="inserePrato.php" method="POST" enctype="multipart/form-data">
			<div class="box"> <center><h1>Cadastro da Receita</h1></center>
				<label> 
                <span>Nome da receita</span> 
                <input type="text" class="input_text" name="nome_receita" />

                </label>
           
        <label>
        <span>Selecione um estado</span>
        <select name="estado_receita" >
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
                            <textarea class="message" name="historia" ></textarea> 
                            
                        </label> 
                           <label> 
                            <span>Modo de preparo:</span> 
                            <textarea class="message" name="modo_preparo" ></textarea> 
                           
                        </label> 
                    <span>Foto/Imagem:</span> 
                    <input type="file" class="foto" name="foto"/>
                    </label> 
                    <label> 
                            </label> 
                           <label> 
                            <span>Ingredientes:</span> 
                            <textarea class="message" name="ingredientes" ></textarea> 
                           
                        </label> 
                                    <label> 
                <span>Tempo de preparo</span> 
                <input type="text" class="input_text" name="tempo_de_preparo" />
                </label>
                            <label> 
                <span>Rendimento</span> 
                <input type="text" class="input_text" name="rendimento" />
                </label>
				<label>					
					<input type="submit" value="CADASTRAR" class="button"/>					
				</label> 
			</div>
		</form>
<?php
	include "template/rodape.php";
?>