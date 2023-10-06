<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">  
	<link rel="stylesheet" href="../estils.css"> <!-- feu referència al vostre fitxer d'estils -->
	<title>Paginació</title>
</head>
<body>
	<div class="contenidor">
		<h1>Articles</h1>
		<section class="articles"> <!--aqui guardem els articles-->
			<ul name = "llista">
				<?php echo $llista; ?>
			</ul>
		</section>

		<section class="paginacio">
			<ul>
				<?php if ($paginaActual == 1): ?>
				<li class="disabled"><a href="index.php?pagina=<?php echo $paginaActual - 1 ?>" onclick=<?php comprovarPagina($paginaActual,$numeroPagines) ?>> &laquo;</a></li>
				<?php else: ?>
				<li><a href="index.php?pagina=<?php echo $paginaActual - 1 ?>">&laquo;</a></li>
				<?php endif ?>


				<?php echo $li?>
				<li class="disabled"><a href="index.php?pagina=<?php echo $paginaActual + 1 ?>"  onclick=<?php comprovarPagina($paginaActual,$numeroPagines) ?>>&raquo;</a></li>
			</ul>
		</section>
	</div>
</body>
</html>