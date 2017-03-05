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
            }
            .header {
                width: 100%;

            }
            .nav {
                width: 23%;
            }
            .main {
                width: 100%;
            }
        </style>
    </head>
    <body>
        <div>
            <a href="/night/">
                <img class="header" src="header.png">
            </a>
        </div>
        <nav>
            <a href="/night/">
                <img class="nav" src="nav1.png">
            </a>
            <a href="about.html">
                <img class="nav" src="nav2.png">
            </a>
            <a href="posts.php">
                <img class="nav" src="nav3.png">
            </a>
            <a href="https://www.facebook.com/2015Shadows/">
                <img class="nav" src="nav4.png">
            </a>
        </nav>
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
