<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <div class="slideshow-container">

        <div class="mySlides fade">
<!-- Creative Commons image sourced from https://www.google.com.au/search?rlz=1C1CHBF_en-GBAU728AU728&biw=1422&bih=658&tbm=isch&sa=1&ei=vzmSW7DxL5j7-Qa58KXIDg&q=roses+wrapped+in+paper&oq=roses+wra&gs_l=img.3.0.0l10.536.5278.0.7415.6.5.1.0.0.0.217.789.0j2j2.4.0....0...1c.1.64.img..1.5.791...0i67k1.0.aDCkxZFdyn4#imgrc=5sPnvvfPUC6nnM: and used for educational purposes only -->
            <img src="../../media/roses.png" style="height:300px" align="middle">
            <div class="text">Roses</div>
        </div>

        <div class="mySlides fade">
<!-- Creative Commons image sourced from https://www.google.com.au/search?rlz=1C1CHBF_en-GBAU728AU728&biw=1422&bih=658&tbm=isch&sa=1&ei=4DmSW4XyNtH4hwP22pH4BQ&q=tulips+in+vase&oq=tulips+in+vase&gs_l=img.3...233828.235960.0.236128.7.6.0.1.1.0.206.406.2-2.2.0....0...1c.1.64.img..4.3.409...0.0.TrjXYQKJDvU#imgrc=A1f-KfDdLk4i7M: and used for educational purposes only -->
            <img src="../../media/tulip.png" style="width:300px" align="middle">
            <div class="text">Tulips</div>
        </div>

        <div class="mySlides fade">
                <!-- Creative Commons image sourced from https://www.google.com.au/search?q=lily+bouquet&rlz=1C1CHBF_en-GBAU728AU728&source=lnms&tbm=isch&sa=X&sqi=2&ved=0ahUKEwic9KGxwKjdAhUY7rwKHcL7AUkQ_AUICigB&biw=1422&bih=658#imgrc=ZbTuGf4UI09X9M: and used for educational purposes only -->
            <img src="../../media/lily.png" style="width:300px" align="middle">
            <div class="text">Lillies</div>
        </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <main>
    <p><div class="aIndex"><h2>Location</h2>
        <p>165 Centre Rd, Bentleigh VIC 3204</p>
        <h2>Contact</h2>
       Phone: (03) 9557 9305
        <h2>About</h2>
        Fresh Fresh Flowers is a florist located in Bentleigh, established in 1990 providing a vast range of flowers and plants, specialising in tulips and roses.
    <p><p><p></main><p><p><p>
</div>
  <div class="foot">  <footer>
        <div>&copy;
            <script>
                document.write(2018);
                var slideIndex = 0;
                showSlides();

                function showSlides() {
                    /*<!-- Original CSS code sourced and adapted for educational purposes: https://www.w3schools.com/w3css/w3css_slideshow.asp --> */

                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("dot");
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    slideIndex++;
                    if (slideIndex > slides.length) {
                        slideIndex = 1
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex - 1].style.display = "block";
                    dots[slideIndex - 1].className += " active";
                    setTimeout(showSlides, 2000); // Change image every 2 seconds
                }

            </script> Monique Leong</div>
        <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
        <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>
</div>

</body>

</html>
