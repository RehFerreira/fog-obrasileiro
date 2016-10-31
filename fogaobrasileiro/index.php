<?php
    include "template/topo.php";
?>
<div id="container-fluid">
            <center><img src="img/logo3.png" width="300"></center>
            
        </div>
        
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
                <center><img src="img/1.jpg" style="opacity:0.8"></center>
              <div class="carousel-caption">
                  <h3 style="color:#333031">Bem Vindo ao Fogão Brasileiro</h3>
                  <p style="color:#333031">Um site para consultar diversas receitas típicas divididas por estado</p>
              </div>
            </div>
            <div class="item">
                <center><img src="img/2.jpg" style="opacity:0.8"></center>
              <div class="carousel-caption">
                <h3>Cadastre-se agora no site !</h3>
                <p>E compartilhe as suas receita</p>
              </div>
            </div>
            <div class="item">
                <center><img src="img/3.jpg" style="opacity:0.8"></center>
              <div class="carousel-caption">
                
              </div>
            </div>  
            
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <br><br>
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/1.jpg">
              <div class="caption">
                <h3>Frituras Tradicionais</h3>
                <p>... </p>
                <p><a href="#" class="btn btn-primary" role="button">Ver mais</a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4"> 
            <div class="thumbnail">
              <img src="img/2.jpg">
              <div class="caption">
                <h3>As mais variadas receitas</h3>
                <p>...</p>
                <p><a href="#" class="btn btn-primary" role="button">Ver mais</a> </p>
              </div>
            </div>
          </div>
            <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/3.jpg">
              <div class="caption">
                <h3>Faça pratos incrívieis</h3>
                <p>...</p>
                <p><a href="#" class="btn btn-primary" role="button">Ver mais</a></p>
              </div>
            </div>
          </div>
        </div>
<?php
    include "template/rod.php";
?>