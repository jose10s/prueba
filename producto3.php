<?php

?>

<script type="text/javascript">

</script>

<html>
<head>
<title>Ejercicio</title> <meta charset="utf-8">
</head>
<body>
<div id="product-grid">
    <div class="txt-heading">Producto</div>
	<div class="product-item">
	    <form method="post" action="carrito.php?nombre=chaqueta&precio=180">
		<div class="product-image"><img src="./imagenes/camisa-blanca.jpg"></div>
		<div><strong>Camisa blanca</strong></div>
		<div class="product-price">35 €</div>
		<div><input type="text" name="cantidad" value="1" size="2" /></div>
		<div><input type="submit" value="Añadir al carro" class="btnAddAction" /></div>
	    </form>
	</div>

    </div>
</div>
</body>
</html>
