let nav = document.getElementById("menuBar");

nav.innerHTML = `
<h1 id="Menu">menu</h1>
<a href="index.html">Home</a>
<a href="g_pagina.html">2048</a>
<a href="g2_pagina.html">4 op 1 rij</a>
<a href="speluitleg.html">Speluitleg</a>
<a href="over-ons.html">Over ons</a>
<a href="contact.html">Contact</a>
<a href="javascript:void(0);" onclick="closeNav()" class="close-btn">X</a>
`;

function openNav() {
    let menuBar = document.getElementById("menuBar");
    let overlay = document.getElementById("overlay");

    menuBar.style.display = "block";
    overlay.style.display = "block";
}

function closeNav() {
    let menuBar = document.getElementById("menuBar");
    let overlay = document.getElementById("overlay");

    menuBar.style.display = "none";
    overlay.style.display = "none";
}

function toggleNav() {
    let menuBar = document.getElementById("menuBar");

    if (menuBar.style.display === "none" || menuBar.style.display === "") {
        openNav();
    } else {
        closeNav();
    }
}

function clearForm() {
    let form = document.getElementById("contactforum");

    form.reset();
}

document.addEventListener("DOMContentLoaded", function () {
    
    var audioElement = document.getElementById("backgroundMusic");

    
    audioElement.src = "assets/music/TheQLon_-_Phonk_vibe.mp3"; 

    audioElement.play();
});
