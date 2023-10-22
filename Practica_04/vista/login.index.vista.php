<!--  Sergi sanahuja  -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">  
	<link rel="stylesheet" href="../estils/estils.css"> <!-- feu referència al vostre fitxer d'estils -->
	<title>Paginació</title>
	
	<script>
		document.getElementById("numArticles").addEventListener("change", function(){
			var numArticles = document.getElementById("numArticles").value;
			window.location.href = "index.php?pagina=1&numArticles=" + numArticles;
		});
	</script>

</head>
<?php 
      include_once "../controlador/controlador.php"; 
	  
?>
<body>
			
			<a href="../controlador/tencar_sesio.php"><button type="button">Exit</button></a>
			
	<div class="contenidor">	
		<h1>Articles</h1>
		<section class="articles"> <!--aqui guardem els articles-->
			<ul name = "llista">
				<?php echo $llista ?>  <!--aqui primta els articles-->				
			</ul>
		</section>

		<section class="paginacio">
			<ul>
				<?php if ($paginaActual == 1): ?>
				<li class="disabled"><a href="login.index.vista.php?pagina=<?php echo $paginaActual - 1 ?>" onclick=<?php comprovarPagina($paginaActual,$numeroPagines) ?>> &laquo;</a></li>
				<?php else: ?>
				<li><a href="login.index.vista.php">&laquo;</a></li>
				<?php endif ?>


				<?php echo $buttonLogin?>
				<li class="disabled"><a href="login.index.vista.php?pagina=<?php echo $paginaActual + 1 ?>"  onclick=<?php comprovarPagina($paginaActual,$numeroPagines) ?>>&raquo;</a></li>
			</ul>
		</section>
		<div>
			<a href="insert.vista.php"><button type="button">INSERTAR</button></a>
			<button>DELETE</button>
			<button>UPDATE</button>
		</div>
	</div>

	
</body>
</html>