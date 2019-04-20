<?php require_once 'config/parameters.php';
require_once 'views/layout/head.php';
?>

 
	
	<!------------start content ------------>
	<body class="bodyError">
		<div class="wrapper">
			<div class="container-fluid" id="top-container-fluid-nav">
				<div class="container">	
                    <!---- for nav container ----->	
                    <?=require_once 'views/layout/navbar.php'?>
				</div>
			</div> 
			
					
			<div class="container-fluid" id="body-container-fluid">
				<div class="container">
					<!---- for body container ---->
						
						
						<div class="jumbotron">
						<h1 class="display-1">4<i class="fa  fa-spin fa-cog fa-3x"></i> 4</h1>
						<h1 class="display-3">ERROR</h1>
						<p class="lower-case">Aw !! Pagina no encontrada</p>
						<p class="lower-case">Puede que la pagina este en mantenimiento</p>

						</div>
						
						 <!-------mother container middle class------------------->
						 

				</div>
			</div>
				
						
 
			<div class="container-fluid" id="footer-container-fluid">
				<div class="container">
					<!---- for footer container ---->
 				</div>
			</div>
  			
				
			
		</div>
 	</body>

<?=require_once 'views/layout/footer.php'?>