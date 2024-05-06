<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- <link rel="icon" href="favicon.ico" type="image/x-icon"> -->
    <title>Mark Datema</title>
</head>
<body>
    <?php include 'inc/header2.php'; ?>
    <?php include 'inc/banner.php'; ?>

    <main>
    <section class="container">
            <h2>"<span>Nekholder</span> stabiele nek bij het gamen of werken"</h2>
            <p>
            🔹🔵<b>1️⃣</b> Ondersteunt de nek: Ervaar ongeëvenaarde stabiliteit en ondersteuning voor je nek tijdens intense gamesessies of werksessies.<br>
🔹🟢<b>2️⃣</b> Verstelbare pasvorm: Op maat gemaakt voor jouw comfort, met verstelbare bandjes die elke keer voor de perfecte pasvorm zorgen.<br>
🔹🟣<b>3️⃣</b> Stijlvol ontwerp: Upgrade je game-opstelling of kantoorkleding met het strakke en moderne ontwerp van de Neckholder Pro 555.<br>
🔹🟡<b>4️⃣</b> Premium comfort: Geniet van luxueus comfort met pluche padding die je nek ondersteunt, vermoeidheid en spanning vermindert.<br>
🔹🔴<b>5️⃣</b> Ademende materialen: Blijf koel en comfortabel dankzij ademende materialen die oververhitting tijdens langdurig gebruik voorkomen.<br>
🔹🟠<b>6️⃣</b> Verbeterde focus: Behoud optimale focus en concentratie dankzij het ergonomische ontwerp van de Neckholder Pro 555, waardoor afleiding door ongemak wordt geminimaliseerd.<br>
🔹🟤<b>7️⃣</b> Draagbaar gemak: Neem je nekondersteuning moeiteloos overal mee naartoe dankzij het compacte en draagbare ontwerp.<br>
Upgrade je game- of werkervaring met de Neckholder Pro 555 - waar comfort stijl ontmoet, ondersteuning geen grenzen kent en productiviteit tot grote hoogten stijgt.";
            </p>
        </section>
        <br><br>

        <!-- <section class="container">
            <h2>De Nekholder</h2>
            <p>Verdere informatie nekholder.</p>
        </section> -->

        <section class="container">
            <h2>Onze Pitch Video:</h2>
            <?php
            // Embedding your pitch video using PHP
            echo '<iframe width="560" height="315" src="https://cdn.harmfennis.nl/mark/EngelsPitch5.mp4" frameborder="0" allowfullscreen></iframe>';
            ?>
        </section>
        
        <br><br>
        <section class="container">
            <h2>Neem contact met ons</h2>
            <p>Voor vragen kunt u contact met ons opnemen via:</p>
            <?php
            // Contact information
            $email = '588492@edu.rocmn.nl';
            $phone = '06363636363';
            echo "<p>E-mail: <a href='mailto:$email'>$email</a></p>";
            echo "<p>Telefoon: $phone</p>";
            ?>
        </section>
    </main>

    <?php include 'inc/footer.php'; ?>
</body>
</html>

