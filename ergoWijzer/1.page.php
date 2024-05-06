<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/style.css">
  <script src="./assets/js/script.js"></script>
  <title>khalil hasan</title>
</head>

<body>
  <?php include 'inc/header2.php'; ?>
  <?php include 'inc/banner.php'; ?>

  <main>
    <section class="container">
      <h2>"<span>Blue</span> Light Defender: uw zicht beschermen, uw leven verbeteren"</h2>
      <p>
        Ons project richt zich op de ontwikkeling en promotie van Blue Light Defender, een revolutionair product dat is ontworpen om de gezondheid van de ogen in het digitale tijdperk te beschermen. Nu de toenemende schermtijd een norm wordt in de huidige samenleving, wil Blue Light Defender de negatieve gevolgen van langdurige blootstelling aan blauw licht van digitale apparaten aanpakken. Door innovatieve technologie en een strak ontwerp biedt Blue Light Defender effectieve bescherming tegen digitale vermoeide ogen en bevordert het een betere slaapkwaliteit. Onze missie is om individuen in staat te stellen te genieten van schermtijd zonder de gezondheid van hun ogen in gevaar te brengen.
      </p>

    </section>
    <br><br>

    <section class="cont2">

      <section class="container">
        <h2>Onze Pitch Video:</h2>
        <video controls muted width="560" height="315">
          <source src="videos/blue_glasses.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>

      </section>

      <section class="container">
        <div class="slideshow-container">

          <div class="mySlides fade">
            <img class="imgkh" src="assets/images/download.jpeg">
          </div>

          <div class="mySlides fade">
            <img class="imgkh" src="assets/images/images.jpeg">
          </div>

          <div class="mySlides fade">
            <img class="imgkh" src="assets/images/images (1).jpeg">
          </div>

        </div>

        <br>
        <div>
          <a class="prev" onclick="plusSlides(-1)">❮</a>
          <a class="next" onclick="plusSlides(1)">❯</a>
        </div>

        <div class="doty" style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>

      </section>







    </section>

    <br><br>
    <section class="container">
      <h2>Neem contact met ons</h2>
      <p>Voor vragen kunt u contact met ons opnemen via:</p>
      <?php
      $email = 'k.hasan2201@gamil.com';
      $phone = '+31 63 852 4948';
      echo "<p>E-mail: <a href='mailto:$email'>$email</a></p>";
      echo "<p>Telefoon: $phone</p>";
      ?>
    </section>

  </main>

  <?php include 'inc/footer.php'; ?>


  <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }
  </script>
</body>

</html>