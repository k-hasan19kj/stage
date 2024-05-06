<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="syrian_monster">
    <link rel="stylesheet" href="index.css">
    <title>Mijn portfolio</title>
</head>

<body>
    
    <header class="header">
        <a href class="logo">Portfolio.</a>

        <nav class="navbar">
            <a href="index.php" style="--i:1">Home</a>
            <a href="About.php" style="--i:2">Over mij</a>
            <a href="projecten.php" style="--i:3" class="active">Projecten</a>
            <a href="contact.php" style="--i:4">Contact</a>
        </nav>

    </header>


    <div class="intro3">
        <h1>Mijn projecten</h1>
        <p>Hier staan alle projecten waar ik aan gewerkt heb.</p>
    </div>

    <div class="pro">

        <div class="protech">
            <img class="ligi1" src="portfolio.images/L1-7 - Logo TechnoWire.png">
            <br> <br>
            <hr> <br>
            <p class="teksti" style="--i:5">Technowire</p>
            <pre class="tarih">2023-10-04</pre>
            <br> <br>
            <a target="_blank" href="/technowire-noob/techno-home.html" class="btn">Bekijk</a>
        </div>

        <div class="protech">
            <img class="ligi1" src="portfolio.images/unnamedlogo.png">
            <br> <br>
            <hr> <br>
            <p class="teksti" style="--i:5">SnakeGame</p>
            <pre class="tarih">2023-12-14</pre>
            <br> <br>
            <a target="_blank" href="/l2-pro-2-een-game-in-javascript-k-hasan19kj/home.html" class="btn">Bekijk</a>
        </div>

    </div>


    <div class="pro">

        <div class="protech">
            <img class="ligi1" src="portfolio.images/forza.png">
            <br> <br>
            <hr> <br>
            <p class="teksti" style="--i:5">GameCraft</p>
            <pre class="tarih1">Schoolproject met<br>mijn team Forza</pre>
            <br> <br>
            <a target="_blank" href="https://gamecraft.team-forza.nl/" class="btn">Bekijk</a>
        </div>

        <div class="protech">
            <img class="ligi1" src="portfolio.images/download.jpeg">
            <br> <br>
            <hr> <br>
            <p class="teksti" style="--i:5">Yard.nl</p>
            <pre class="tarih1">Sollicitatie<br>op yard.nl</pre>
            <br> <br>
            <a target="_blank" href="/yard/index.html" class="btn">Bekijk</a>
        </div>

    </div>


    <div class="pro">

        <div class="protech">
            <img class="ligi1" src="portfolio.images/h22.png">
            <br> <br>
            <hr> <br>
            <p class="teksti" style="--i:5">Guestbook</p>
            <pre class="tarih1">2024-03-10</pre>
            <br> <br>
            <a target="_blank" href="/gasten_boek/l3-gastenboek-k-hasan19kj" class="btn">Bekijk</a>
        </div>

        <!-- <div class="protech">
            <img class="ligi1" src="portfolio.images/download.jpeg">
            <br> <br>
            <hr> <br>
            <p class="teksti" style="--i:5">Yard.nl</p>
            <pre class="tarih1">Sollicitatie<br>op yard.nl</pre>
            <br> <br>
            <a target="_blank" href="/yard/index.html" class="btn">Bekijk</a>
        </div> -->

    </div>


    <?php
    include 'inc/footer.php';
    ?>
</body>

</html>