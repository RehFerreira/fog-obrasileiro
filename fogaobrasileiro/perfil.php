<?php
    include "template/topo.php";
    $id_usuario = $_GET["id_usuario"];
    if($conexao){
		$sql = "select * from usuario where id_usuario =".$_GET['id_usuario'];
			
			$rs = mysqli_query($conexao, $sql);
			if($rs){
				if($valor = mysqli_fetch_array($rs)){
?>
<div class="container-fluid">
    <br>
    <div class="row">
        <div class="col-sm-3">
            <hr>
        </div>
        
            <div class="col-sm-6">
                <center>
                    <h1><?php echo $valor["nome"]?></h1><br>
                    <?php echo "<img src='img/perfil/".$valor["foto"]."' height='300px' width='300px'>"?>
                </center>
            </div>
        
        <div class="col-sm-3">
            <hr>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-5">
            <hr>
        </div>
        
        <div class="col-sm-2">
            <center><h1>Receitas de <?php echo $valor["usuario"]?></h1></center>
        </div>
        
        <div class="col-sm-5">
            <hr>
        </div>
    </div>
</div>
<?php
                }
            }
    }
    include "template/rod.php";
?>