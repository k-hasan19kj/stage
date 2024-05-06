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
            <a href="projecten.php" style="--i:3">Projecten</a>
            <a href="contact.php" style="--i:4" class="active">Contact</a>
        </nav>

    </header>

    <section class="home4">

        <div class="intro">
            <h1>Contact</h1>
            <p>Heb je een vraag of wil je meer informatie,
                stuur dan een mailtje naar <a href="mailto:k.hasan2201@gmail.com">k.hasan2201@gmail.com</a>
                . Je krijgt zo snel mogelijk antwoord!
            </p>

            <p>Vind je het leuk om met mij te linken op LinkedIn?
                <a target="_blank" href="https://www.linkedin.com/in/khalil-hasan-24a690295/">
                    Stuur me dan gerust een connectieverzoek.</a>
            </p>
        </div>

    </section>

    <?php
    include 'inc/footer.php';
    ?>

</body>

</html>



