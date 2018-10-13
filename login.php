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
<p>
     <div class="aIndex"><h2>Log in</h2>
		<form action='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=login'>
  Email:<br>
  <input type="text" name="email" value="">
  <br>
  Password:<br>
  <input type="text" name="pword" value="">
  <br><br>
  <input type="submit" value="Submit">
</form> 
</div>
        
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
