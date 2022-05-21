<?php

?>

<script type="text/javascript">

</script>

<html>
<head>
<title>Jersey</title> <meta charset="utf-8">
</head>
<body>

<div id="product-grid">
    <div class="txt-heading">Producto</div>
	<div class="product-item">
	    <form method="post" action="carrito.php?nombre=pantalon&precio=80">
		<div class="product-image"><img src="./imagenes/jersey-verde.jpg"></div>
		<div><strong>Jersey verde</strong></div>
		<div class="product-price">30 €</div>
		<div><input type="text" name="cantidad" value="1" size="2" /></div>
		<div><input type="submit" value="Añadir a la cesta" class="btnAddAction" /></div>
	    </form>
    </div>
</div>
</body>
</html>
