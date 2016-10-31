<?php
    include "template/topo.php";
    $estado = $_GET["estado"];
?>

<div class="container-fluid">
    <h1>Acre - <?php echo $estado;?></h1>
    <div class="row">
        <h3 class="col-sm-6" style="float:left">A Culinária do Acre se baseia na mistura de sabores tanto da cozinha nordestina, Paraense, Libanesa e Síria. Nos diversos restaurantes, nas barracas e nas praças espalhados pelo acre é possível degustar uma infinidade de lanches.</h3>
        <img class="col-sm-6" class = "img-rounded" src="img/acre.jpg" width="620" height="400">
    </div>
    <hr>
    <?php if($conexao){
				$sql = "SELECT * FROM prato WHERE estado_receita= 'AC'";
				$rs = mysqli_query($conexao,$sql);
                $cont = 0;
				if ($rs) {		
					while ($valor = mysqli_fetch_array($rs)) {
						
                        
                        echo "<div class = 'col-sm-6 col-md-4'>";
                        
                        echo "<div class = 'thumbnail'>";

						echo "<img src='img/prato/".$valor["foto_receita"]." ' alt='img/prato/sem_foto.png' height = 250px width = 420px></a><br>";
                        
                        echo "<div class = 'caption'>";

						
						echo "<h3>".$valor["nome_receita"]."</h3>";
                        
                        echo "<p>";
                        
                        echo "<a href = 'pagpra.php?id_receita=".$valor["id_receita"]. " 'class = 'btn btn-primary' role = 'button'>Ver mais detalhes</a>";
                        
                        echo "</p>";
                        
                        echo "</div>";
                        
                        echo "</div>";
                        
                        echo "</div>";
                        
                        
                        


				}mysqli_free_result($rs);
			}
			else{
				echo "Erro de consulta de produto : " .mysqli_error($conexao);
			}
		}else{
			echo "Erro de conexão : " .mysqli_error($conexao);
		}?>




<?php
    include "template/rod.php";
?>