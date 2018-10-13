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
        <h2>Products</h2>

        <div class="gallery">
            <a target="_blank" href="https://titan.csit.rmit.edu.au/~s3722811/wp/a2/product.php">
                <!-- Creative Commons image sourced from https://www.google.com.au/search?rlz=1C1CHBF_en-GBAU728AU728&biw=1422&bih=658&tbm=isch&sa=1&ei=vzmSW7DxL5j7-Qa58KXIDg&q=roses+wrapped+in+paper&oq=roses+wra&gs_l=img.3.0.0l10.536.5278.0.7415.6.5.1.0.0.0.217.789.0j2j2.4.0....0...1c.1.64.img..1.5.791...0i67k1.0.aDCkxZFdyn4#imgrc=5sPnvvfPUC6nnM: and used for educational purposes only -->
                <img src="../../media/roses.png" alt="Roses" width="600" height="400">
            </a>
            <div class="desc">Roses <br> $10.00</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="https://titan.csit.rmit.edu.au/~s3722811/wp/a2/product.php">
                <!-- Creative Commons image sourced from https://www.google.com.au/search?rlz=1C1CHBF_en-GBAU728AU728&biw=1422&bih=658&tbm=isch&sa=1&ei=4DmSW4XyNtH4hwP22pH4BQ&q=tulips+in+vase&oq=tulips+in+vase&gs_l=img.3...233828.235960.0.236128.7.6.0.1.1.0.206.406.2-2.2.0....0...1c.1.64.img..4.3.409...0.0.TrjXYQKJDvU#imgrc=A1f-KfDdLk4i7M: and used for educational purposes only -->
                <img src="../../media/tulip.png" alt="Tulips" width="600" height="400">
            </a>
            <div class="desc">Tulips <br> $15.00</div><br>
        </div>

        <div class="gallery">
            <a target="_blank" href="https://titan.csit.rmit.edu.au/~s3722811/wp/a2/product.php">
                <!-- Creative Commons image sourced from https://www.google.com.au/search?q=lily+bouquet&rlz=1C1CHBF_en-GBAU728AU728&source=lnms&tbm=isch&sa=X&sqi=2&ved=0ahUKEwic9KGxwKjdAhUY7rwKHcL7AUkQ_AUICigB&biw=1422&bih=658#imgrc=ZbTuGf4UI09X9M: and used for educational purposes only -->
                <img src="../../media/lily.png" alt="Lillies" width="600" height="400">
            </a>
            <div class="desc">Lillies <br> $20.00</div><br>
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
