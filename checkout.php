<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <title>Assignment 3</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
	<style>

</style>
</head>
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
        <h2> Checkout </h2>
    </main>
	<body>
	<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <label for="name"></i> Name</label>
            <input type="text" id="name" name="name">
            <br><br>
            <label for="email"></i>Email</label>
            <input type="email" id="email" name="email" required >
            <br><br>
            <label for="adr"></i> Address</label>
            <textarea id="adress" cols="90" rows ="5" name="address" placeholder=
            "House Number
Street
City
State
Postcode"></textarea><br>
           <br> <label for="phone"></i> Phone</label>
            <input type="text" id="phone" name="phone">
            </div>
          </div>

       
            <h3>Payment</h3>
            
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber">
			<br><br>
            <label for="expmonth">Expiry Date</label>
            <input type="date" id="exp" name="exp" pattern="\d{1,2}/\d{1,2}/\d{4}">
            <br><br>
        <input type="submit" value="Continue" class="btn">
      </form>
	  </body>

    <footer>
        <div>&copy;
            <script>
                document.write(2018);

            </script> Monique Leong / Yousef Fares, s3722811 / s3724131</div>
        <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
        <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

</body>

</html>
