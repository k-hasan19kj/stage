<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css" rel="stylesheet">
  <title>Ergowijzer</title>
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
  <?php include 'inc/header2.php'; ?>
  <?php include 'inc/banner.php'; ?>

  <main>
    <section class="container">
      <h2>Over ons</h2>
      <p>
        Welkom bij Ergowijzer. Bij Ergowijzer streven we ernaar om al onze klanten te ondersteunen met onze
        producten. Onze toewijding aan kwaliteit en klanttevredenheid vormt de kern van al onze activiteiten. We
        geloven in het opbouwen van langdurige relaties met onze klanten, gebaseerd op vertrouwen, integriteit
        en uitstekende prestaties. Ons team staat paraat voor elke klant. Neem vandaag nog contact met ons op en
        ontdek wat Ergowijzer voor u kan betekenen.
      </p>
      <div class="our-products">
        <h1>Onze producten</h1>


        <div class="productbox">
          <a href="1.page.php">
            <div class="box">
              <!-- <img class="imagesProducten" src="assets/images/images (1).jpeg" alt="Blue glasses"> -->
              <i id="awesome" class="fa-regular fa-glasses"></i>
              <h3>Blue glasses</h3>
            </div>
          </a>
          <a href="ergochair.php">
            <div class="box">
              <!-- <img class="imagesProducten" src="assets/images/ergochair.jpeg" alt="Ergochair"> -->
              <i class="fa-regular fa-chair-office"></i>
              <h3>Office chair</h3>
            </div>
          </a>
          <a href="moamen.php">
            <div class="box">
              <i class="fa-regular fa-raygun"></i>
              <h3>Massage Gun</h3>
            </div>
          </a>
          <a href="nekholder.php">
            <div class="box">
              <i class="fa-regular fa-magnet"></i>
              <h3>Neckholder</h3>
            </div>
          </a>

          <a href="tygo.php">
            <div class="box">
              <i class="fa-regular fa-computer-mouse"></i>
              <h3>Mouse pad</h3>
            </div>
          </a>
          <a href="jesse.php">
            <div class="box">
              <i class="fa-regular fa-shop"></i>
              <h3>Standing Desk</h3>
            </div>
          </a>
        </div>
    </section>

    <section class="containerfoto">
      <div class="slideshow-container1">

        <div class="mySlides fade1">
          <img class="imgslide" src="assets/images/ergochair.jpeg">
        </div>

        <div class="mySlides fade1">
          <img class="imgslide" src="assets/images/massagegun.jpg">
        </div>

        <div class="mySlides fade1">
          <img class="imgslide" src="assets/images/images (1).jpeg">
        </div>
        <div class="mySlides fade1">
          <img class="imgslide" src="assets/images/nekholder.jpg">
        </div>

        <div class="mySlides fade1">
          <img class="imgslide" src="assets/images/polsonder.jpeg">
        </div>

        <div class="mySlides fade1">
          <img class="imgslide" src="assets/images/standingdesk.jpg">
        </div>

      </div>
 
      <br>
      <div>
        <a class="prev1" onclick="plusSlides(-1)">❮</a>
        <a class="next1" onclick="plusSlides(1)">❯</a>
      </div>

      <div class="doty1" style="text-align:center">
        <span class="dot1" onclick="currentSlide(1)"></span>
        <span class="dot1" onclick="currentSlide(2)"></span>
        <span class="dot1" onclick="currentSlide(3)"></span>
        <span class="dot1" onclick="currentSlide(4)"></span>
        <span class="dot1" onclick="currentSlide(5)"></span>
        <span class="dot1" onclick="currentSlide(6)"></span>
      </div>

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
      let dots = document.getElementsByClassName("dot1");
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

    // awesome color change to white on hover

    let boxes = document.getElementsByClassName("box");

    for (let i = 0; i < boxes.length; i++) {
      boxes[i].addEventListener("mouseover", function() {
        let icon = this.querySelector("i");
        icon.style.color = "white";
        icon.style.transition = "0.5s";
      });

      boxes[i].addEventListener("mouseout", function() {
        let icon = this.querySelector("i");
        icon.style.color = "aqua";
      });
    }
  </script>

</body>

</html>