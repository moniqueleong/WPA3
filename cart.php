<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <title>Cart</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
</head>

<body>


    <header>
        <h1><img src="../../media/logo.png" style="height:100px"></h1>

    </header>

    <nav>
             <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Log in</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="product.php">Product</a></li>
        <li style="float:right"><a href="cart.php">Cart</a></li>

    </nav>

    <main>
	
	<div class="gallery2">
             <img class="cartcssIMG" src="../../media/roses.png" alt="Roses" width="100">
			 <p class="fontCarty">gtihjdasihdisau fsaof sahfuo sahifo safiao</p>
			<label for="name">Quantity</label>
        <input type="number" min="1" name="qty" id="rabbitQTY" value="1">
					<br>
					<label> price </label>

        </div>
		<button type="submit" class="shopButton">Go to checkout</button>




    </main>

    <footer>
        <div>&copy;
            <script>
                document.write(2018);

            </script> Monique Leong</div>
        <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
        <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

</body>

</html>
