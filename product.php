<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <title>Home</title>

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
        <li><a href="https://titan.csit.rmit.edu.au/~s3722811/wp/a2/index.php">Home</a></li>
        <li><a href="https://titan.csit.rmit.edu.au/~s3722811/wp/a2/login.php">Log in</a></li>
        <li><a href="https://titan.csit.rmit.edu.au/~s3722811/wp/a2/products.php">Products</a></li>
        <li><a href="https://titan.csit.rmit.edu.au/~s3722811/wp/a2/product.php">Product</a></li>
        <li style="float:right"><a href="https://titan.csit.rmit.edu.au/~s3722811/wp/a2/cart.php">Cart</a></li>

    </nav>

    <main>
<img src="../../media/roses.png" style="height:300px; float:left; padding: 10px;">
<h2> Roses </h2>
Our roses are delivered to our store fresh daily and come in a range of colours including white, red, pink. </br>

<form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php">
Price: $10.00 <br><br>
<input type="hidden" id="productId" name="productId" value="3187">
<select name="colour">
    <option value="Red">Red</option>
    <option value="Pink">Pink</option>
    <option value="White">White</option>
  </select>
  <br><br>
  
  Quantity:
  <input type="number" name="quantity" min="0"><br><br>
<input type="submit" value="Add to Cart">
</form>
        
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
