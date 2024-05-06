<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="1">-->
    <meta name="author" content="syrian_monster">
    <title>Mijn portfolio</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <header class="header">
        <a href="#" class="logo">Portfolio.</a>
        <nav class="navbar">
            <a href="index.php" style="--i:1" class="active">Home</a>
            <a href="About.php" style="--i:2">Over mij</a>
            <a href="projecten.php" style="--i:3">Projecten</a>
            <a href="contact.php" style="--i:4" c>Contact</a>
        </nav>

    </header>


    <section class="home1">
        <div class="home-content">
            <h3>Hallo dat ben ik</h3>
            <h1> Khalil Hasan</h1>
            <h3> en ik ben <span class="typing">Software developer</span>
            </h3>

            <p>
                Welkom op mijn portfolio! Ik ben Khalil 19-jaarige jongen een enthousiaste softwareontwikkelaar student
                uit Utrecht. Mijn passie ligt in het bouwen van sites en applicaties. Ik geniet ervan om complexe
                problemen op te lossen en elegante oplossingen te creëren. Mijn portfolio toont mijn
                vaardigheden en projecten.
            </p>
            <div class="social-media">
                <a target="_blank" href="https://www.facebook.com/khalil.hasan.7927" style="--i:5"><i class='bx bxl-facebook'></i></a>

                <a target="_blank" href="https://instagram.com/halil.jk19?igshid=YTQwZjQ0NmI0OA==" style="--i:6"><i class='bx bxl-instagram'></i></a>

                <a target="_blank" href="https://www.snapchat.com/add/kha_il19hsn?share_id=SpVlaT65tK8&locale=nl-NL" style="--i:7"><i class='bx bxl-snapchat'></i></a>

                <a target="_blank" href="https://www.linkedin.com/in/khalil-hasan-24a690295/" style="--i:8"><i class='bx bxl-linkedin'></i></a>
            </div>
            <a href="CV Khalil Hasan (3).pdf" download class="btn">CV Upladen</a>
        </div>

        <div class="photo">
            <img class="my-photo" src="portfolio.images/insatphoto.jpg">
        </div>


    </section>

    <?php
    include 'inc/footer.php';
    ?>

</body>

</html>