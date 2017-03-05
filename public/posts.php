<!doctype html>
<html>
    <head>
        <title>IM Night 2017</title>
        <style>
            body {
                max-width: 150vh;
            }
            img {
                height: auto;
                margin: auto;
            }
            .header {
                width: 100%;
            }
            .nav {
                width: 22.5%;
            }
            .main {
                width: 100%;
            }
            .hdiv {
                width: 100%;
            }
            .vdiv {
                width: 1%;
            }
        </style>
    </head>
    <body>
        <div>
            <a href="/night/">
                <img class="header" src="header.png">
            </a>
        </div>
        <img class=" hdiv" src="hdivider.png">
        <nav>
            <a href="/night/">
                <img class="nav" src="nav1.png">
            </a>
            <img class="vdiv" src="vdivider.png">
            <a href="about.html">
                <img class="nav" src="nav2.png">
            </a>
            <img class="vdiv" src="vdivider.png">
            <a href="posts.php">
                <img class="nav" src="nav3.png">
            </a>
            <img class="vdiv" src="vdivider.png">
            <a href="https://www.facebook.com/2015Shadows/">
                <img class="nav" src="nav4.png">
            </a>
        </nav>
        <img class=" hdiv" src="hdivider.png">
        <main>
<?php
            $dirname = "./posts/";
            $images = glob($dirname."*.png");

            foreach($images as $image) {
                echo '<img class="main" src="'.$image.'" />';

            }
?>
        </main>
    </body>
</html>
