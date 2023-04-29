<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">
    <title>LSV Projet</title>
</head>
<body>
    <header>
        <div id="font-logo">
            <div id="container-logo">
                <img class="img-lsv" src="../images/LSV.png" alt="Lycée St-Vincent">
            </div>
            <div id="container-info">
                <div id="info-accueil">
                    <img id="home" src="../images/homeIcon.png" alt="home">
                    <img class="chevron-droit" src="../images/chevron-droit.png" alt="chevron">
                    <p>Accueil</p>
                </div>
                <div id="info-acces-rapide">
                    <p id="acces-rapide">Accès rapide</p>
                    <div id="info-offre-billeterie-contacter">
                        <div id="info-offre-billeterie">
                            <img class="chevron-droit" src="../images/chevron-droit.png" alt="chevron">
                            <p>Offres / Billeterie</p>
                        </div>
                        <div id="info-contacter">
                            <img class="chevron-droit" src="../images/chevron-droit.png" alt="chevron">
                            <p>Nous contacter</p>
                        </div>
                    </div>
                </div>
                <div id="info-contact">
                    <p id="information-contact">Informations de contact</p>
                    <div id="info-tel-email-lieu">
                        <div id="info-tel">
                            <img class="chevron-droit" src="../images/chevron-droit.png" alt="chevron">
                            <p>Par téléphone : <a id="tel" href="#">+33303030303</a></p>
                        </div>
                        <div id="info-email">
                            <img class="chevron-droit" src="../images/chevron-droit.png" alt="chevron">
                            <p>Par email : <a id="email" href="#">cse@lyceestvincent.fr</a></p>
                        </div>
                        <div id="info-lieu">
                            <img class="chevron-droit" src="../images/chevron-droit.png" alt="chevron">
                            <p>Au lycée : <a id="lieu" href="#">Bureau du CSE (1er étage bâtiment Saint-Vincent)</a></p>
                        </div>
                    </div>
                </div>
                <div id="partenaires">
                    <p id="nos-partenaires">Nos partenaires</p>
                    <div id="rectangle">
                        <div id="content-img-rectangle">
                            <div id="slider-gauche">
                                <img id="chevron-gauche-slider" src="../images/chevron-gauche.png" onclick="plusSlides(-1)" alt="chevron">
                            </div>
                            <div class="content-img-partenaire">
                                <img class="rectangle-img" src="../images/Leonidas.png" alt="image">
                            </div>
                            <div class="content-img-partenaire">
                                <img class="rectangle-img" src="../images/leonidas_blanc.png" alt="leonidas">
                            </div>
                            <div class="content-img-partenaire">
                                <img class="rectangle-img" src="../images/history_logo_leonidas_new.jpg" alt="leonidas">
                            </div>
                            <div id="slider-droit">
                                <img id="chevron-droit-slider" src="../images/chevron-droit.png" onclick="plusSlides(1)" alt="chevron">
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="all-partenaire">
                <p><a href="#">Découvrir tous nos partenaires</a></p>
            </div>
        </div>
        <div id="font-bleu">
            <div id="menu-hamburger">
                <span class="trait"></span>
                <span class="trait"></span>
                <span class="trait"></span>
            </div>
            <nav>
                <li id="accueil"><a href="#">Accueil</a></li>
                <li id="partenariats"><a href="#">Partenariats</a></li>
                <li id="billeterie"><a href="#">Billeterie</a></li>
                <li id="li-contact"><a href="#">Contact</a></li>
            </nav>
        </div>
    </header>
    <script src="../carousel.js"></script>
</body>
</html>

problème responsive dans id =container-info