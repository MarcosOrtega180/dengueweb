 <?php
require_once('header.php');
?>

 <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <div class="card borde_1">
		<div class="card-footer">
			<h4><button type="button" class="btn" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Ranking de importancia de cada departamento en cuanto a número de casos notificados.">
					  <i class="fa fa-info-circle"></i>
				</button>Cantidad de Casos por Departamento
			</h4>
		</div>
		<canvas id="myChart2" width="400" height="150"></canvas>
		<div class="card-footer">
				<span class="fecha">Actualizado el <?= date("d/M/Y")?></span>
		</div>	  
    </div>

	<h3 class="tituo_1">Título de la Sección</h3>
	
    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
			<div class="card-footer">
				<h6>Título del gráfico</h6>
			</div>
			<canvas id="myLineChart" width="400" height="400"></canvas>          
			<div>
				<button type="button" class="btn" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Aqui informacion sobre los datos del grafico.">
				  <i class="fa fa-info-circle"></i>
				</button>
			</div>
			<div class="card-footer">
				<span class="fecha">Actualizado el <?= date("d/M/Y")?></span>
			</div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
			<div class="card-footer">
				<h6>Título del gráfico</h6>
			</div>
			<canvas id="myChart" width="400" height="400"></canvas>          
			<div>
				<button type="button" class="btn" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Aqui informacion sobre los datos del grafico.">
				   <i class="fa fa-info-circle"></i>
				</button>
			</div>
			<div class="card-footer">
				<span class="fecha">Actualizado el <?= date("d/M/Y")?></span>
			</div>
        </div>
      </div>
	  
     <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
			<div class="card-footer">
				<h6>Título del gráfico
					<button type="button" class="btn" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Aqui informacion sobre los datos del grafico.">
						<i class="fa fa-info-circle"></i>
					</button>
				</h6>
			</div>
			<canvas id="myPieChart" width="400" height="400"></canvas>
			<div class="card-footer">
				<span class="fecha">Actualizado el <?= date("d/M/Y")?></span>
			</div>
        </div>
     </div>

     <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
			<div class="card-footer">
				<h6>
					<button type="button" class="btn" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Aqui informacion sobre los datos del grafico.">
					  <i class="fa fa-info-circle"></i>
					</button>
					Título del gráfico
				</h6>
			</div>
			<canvas id="myRadarChart" width="400" height="400"></canvas>
			<div class="card-footer">
				<span class="fecha">Actualizado el <?= date("d/M/Y")?></span>
			</div>						
        </div>
     </div>

    </div>
    <!-- /.row -->
	
	
	<h3 class="tituo_1">Título de la Sección</h3>
	
	    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-lg-6 col-md-6 mb-6">
        <div class="card">
		<div class="card-footer">
		<h6>Título del gráfico</h6>
		</div>
          <canvas id="myPieChart2" width="400" height="400"></canvas>          
          <div>
            <button type="button" class="btn" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Aqui informacion sobre los datos del grafico.">
				<i class="fa fa-info-circle"></i>
			</button>
          </div>
		  <div class="card-footer">
				<span class="fecha">Actualizado el <?= date("d/M/Y")?></span>
			</div>
        </div>
      </div>

      <div class="col-lg-6 col-md-6 mb-6">
        <div class="card">
		<div class="card-footer">
		<h6>Título del gráfico</h6>
		</div>
          <canvas id="myRadarChart2" width="400" height="400"></canvas>          
          <div>
            <button type="button" class="btn" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Aqui informacion sobre los datos del grafico.">
				<i class="fa fa-info-circle"></i>
			</button>
          </div>
			<div class="card-footer">
				<span class="fecha">Actualizado el <?= date("d/M/Y")?></span>
			</div>
        </div>
      </div>
	  
    </div><!-- /.row -->

  </div>
  <!-- /.container -->
 
<?php
require_once('footer.php');
?>