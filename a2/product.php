<!DOCTYPE html>
<html lang='en'>
  <head>
  	<link rel="stylesheet" href="styles.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
	<script src="myscript.js"></script>
  </head>

  <body>

    <header>
      <div class="container">
			<img src="Rabbit-logo.png" alt="logo" width="200">
			<h1 id="shopname"> B-rabbitty Clothing </h1>	
	  </div>
    </header>

    <nav>	
      <div class="navTab">
			<ul>
			<li><a href="index.php">Home</a></li>
				<li><a href="shop.php">Shop</a></li>
				<li><a href="product.php">Product</a></li>
				<li><a href="login.php">Login</a></li>
			</ul>
	  </div>
    </nav>
		<br>	
		

        <main id="shopContainer">	

		<form id="myform" onsubmit="return isOptionSelected()" action ="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post">
		
		<div class="shopItems">
		
		<img src="BlueRabbitOnesie.jpg" alt="logo" width="200">
		
		 <label name="id" class="shopLabel">Rabbit Onesie ($59.99)</label>
		 
		<br>
		
		
        <label for="name">Quantity</label>
        <input type="number" min="1" name="qty" id="rabbitQTY" value="1">

		<select name="option" id="rabbitO">
		<option value="">Select a Size</option>
		<option value="small">Small</option>
		<option value="meduim">Meduim</option>
		<option value="Large">Large</option>	
		</select>
		
		<button type="submit" class="shopButton" id="rabbitButton"'>Buy</button>
		
		<input id="hiddenButton" type="text" name="id" value="Rabbit Product">
		
		</form>
		</div>
		
		 <div class="pHome">
		<p>
		<p class="greenP"> Most selling!</p>
			This is the developer's favourite product as it is a rabbit! Basically, our website's name! It is also the most expensive yet the most selling product in our store!
		</p>
		</div>
		
		
    </main>
		<br>
    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Yousef Fares, s3724131 <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
