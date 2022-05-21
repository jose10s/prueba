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
    <div class="txt-heading">Productos disponibles</div>
	<div class="product-item">
	    <form method="post" action="carrito.php?nombre=camiseta&precio=60">
		<div class="product-image"><img src="./imagenes/sudadera-azul.jpg"></div>
		<div><strong>Camiseta Termica</strong></div>
		<div class="product-price">60 €</div>
		<div><input type="text" name="cantidad" value="1" size="2" /><input type="submit" value="Añadir al carro" class="btnAddAction" /></div>
	    </form>
	</div>

    </div>
</div>
</body>
</html>
