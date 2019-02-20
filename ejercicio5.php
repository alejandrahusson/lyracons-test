<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--[if lt IE 9]>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
		<![endif]-->
		<title>Test</title>
		<!-- Reset Styles -->
		<link rel="stylesheet" href="css/reset.css" media="all">
		<!-- Custom Styles -->
		<link href="css/styles.css" rel="stylesheet" media="all">
	</head>
	<body>

		<div class="container">
			<!-- header -->
			<header>
				<div class="logo">
					<img class="img-fluid" src="images/logo.png" alt="Logo">
				</div>

				<!-- nav -->
	        	<nav role="navigation">
	                <ul>
	                    <li><a id="inicio" href="#">Inicio</a></li>
	                    <li>
	                    	<a href="#">Productos</a>
	                    	<ul id="submenu">
	                    	</ul>
	                    </li>
	                    <li><a id="nosotros" href="#">Nosotros</a></li>
	                    <li><a id="compras" href="#">Compras</a></li>
	                </ul>                              
	        	</nav><!-- /nav -->
			</header><!-- /header -->

			<div class="row">
				<!-- .left-section -->
				<section class="left-section">
				</section><!-- .left-section -->

				<!-- .central-section -->
				<section class="central-section">
					<div class="row">
						<div class="col">
							<div class="box"></div>
						</div>
						<div class="col">
							<div class="box"></div>
						</div>
						<div class="col">
							<div class="box"></div>
						</div>
						<div class="col">
							<div class="box"></div>
						</div>
						<div class="col">
							<div class="box"></div>
						</div>
						<div class="col">
							<div class="box"></div>
						</div>
					</div>
				</section><!-- .central-section -->
			</div>
		</div>

		<!-- JQuery V 3.3.1 -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Functions -->
		<script src="js/functions.js"></script>
		<script type="text/javascript">
			var itemlist = '';
			var json = 
		    {
		       submenu: 
		          [
		             {titulo: 'Ropa', url: '/ropa.html'},
		             {titulo: 'Electronica', url: '/electronica.html'},
		             {titulo: 'Higiene', url: '/higiene.html'},
		             {titulo: 'Alimentos', url: '/alimentos.html'},
		             {titulo: 'Otros', url: '/otros.html'}
		          ]
		    }
		    for(var i = 0; i < json.submenu.length; i++) {
			    var item = json.submenu[i];
			    itemlist += '<li><a href="'+item.url+'">'+item.titulo+'</a></li>';   
			}
			var list = document.getElementById("submenu");
			list.innerHTML = itemlist;
		</script>
	</body>
</html>