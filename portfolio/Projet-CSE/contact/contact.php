<?php
require('../include/connexion_bdd.php');

$erreur = [];
    if(empty($_POST) === false)
    {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        if(empty($_POST['nom']))
        {
            $erreur['nom'] = "Veuillez saisir votre nom";
        }
        if(empty($_POST['prenom']))
        {
            $erreur['prenom'] = "Veuillez saisir votre prénom";
        }
        if(empty($_POST['email']))
        {
            $erreur['email'] = "Veuillez saisir un email";
        }
        else
        {
            if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false)
            {
                $erreur['email'] = "Veuillez saisir un email valide";
            }
        }
        if(empty($_POST['message']))
        {
            $erreur['message'] = "Veuillez saisir votre message";
        }
    }

    
//var_dump($erreur);

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
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
    
    <div id="container-formulaire">
        <div id="formulaire">
            <div id="titre">
                <h1>Contactez Nous !</h1>
            </div>
            <form id="contact" method="POST" action="#">
                <div class="item-contact">
                    <input class="input" type="text" name="nom" placeholder="Nom">
                    
                    <?php
                    if(isset($erreur['nom']))
                    {
                        ?><div class="erreur">
                            <p class="message-erreur"><?php echo $erreur['nom']; ?></p>
                        </div><?php
                    }
                    else
                    {
                        echo "";
                    }
                    ?>
                </div>

                <div class="item-contact">
                    <input class="input" type="text" name="prenom" placeholder="Prénom">

                    <?php
                    if(isset($erreur['prenom']))
                    {
                        ?><div class="erreur">
                            <p class="message-erreur"><?php echo $erreur['prenom']; ?></p>
                        </div><?php
                    }
                    else
                    {
                        echo "";
                    }
                    ?>

                </div>

                <div class="item-contact">
                    <input class="input" type="email" name="email" placeholder="E-mail">

                    <?php
                    if(isset($erreur['email']))
                    {
                        ?><div class="erreur">
                            <p class="message-erreur"><?php echo $erreur['email']; ?></p>
                        </div><?php
                    }
                    else
                    {
                        echo "";
                    }
                    ?>
                </div>

                <div id="item-message">
                    <textarea id="input-message" type="text" name="message" placeholder="Entrez votre message"></textarea>

                    <?php
                    if(isset($erreur['message']))
                    {
                        ?><div class="erreur">
                            <p class="message-erreur"><?php echo $erreur['message']; ?></p>
                        </div><?php
                    }
                    else
                    {
                        echo "";
                    }
                    ?>

                </div>

                <div class="item-contact">
                    <input id="submit" type="submit">
                    <?php
                    if(empty($erreur))
                    {
                        try{
                            $sth = $con -> prepare("INSERT INTO message (nom_message, prenom_message, adresse_mail_message, contenu_message) 
                                VALUES (:nom_message, :prenom_message, :adresse_mail_message, :contenu_message)");
                            $sth->bindParam(':nom_message', $_POST['nom']);
                            $sth->bindParam(':prenom_message', $_POST['prenom']);
                            $sth->bindParam(':adresse_mail_message', $_POST['email']);
                            $sth->bindParam(':contenu_message', $_POST['message']);
                    
                            $sth->execute();
                    
                            echo 'Votre demande a bien été prise en compte';
                        }
                        catch (PDOException $exception)
                        {
                            echo 'erreur';
                        }
                    }
                    ?>
                </div>
            </form>
        </div>
    </div>

        <footer>
            <div id="content-footer">
                <div id="footer-logo">
                    <img class="img-lsv" src="../images/LSV.png" alt="Lycée St-Vincent">
                </div>
                <div id="titre-cse-raccourcis">
                    <div id="titre-cse">
                        <p id="cse-lsv">CSE Lycée Saint-Vincent</p>
                    </div>
                    <div id="raccourcis">
                        <div class="chevron-blanc-raccourcis">
                            <div class="chevron-blanc">
                                <span class="trait-blanc-incline30deg"></span>
                                <span class="trait-blanc-incline-30deg"></span>
                            </div>
                            <div id="raccourcis-partenariats">
                                <p><a href="#">Accueil</a></p>
                            </div>
                        </div>
                        <div class="chevron-blanc-raccourcis">
                            <div class="chevron-blanc">
                                <span class="trait-blanc-incline30deg"></span>
                                <span class="trait-blanc-incline-30deg"></span>
                            </div>
                            <div id="raccourcis-partenariats">
                                <p><a href="#">Partenariats</a></p>
                            </div>
                        </div>
                        <div class="chevron-blanc-raccourcis">
                            <div class="chevron-blanc">
                                <span class="trait-blanc-incline30deg"></span>
                                <span class="trait-blanc-incline-30deg"></span>
                            </div>
                            <div id="raccourcis-billeterie">
                                <p><a href="#">Billeterie</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="../carousel.js"></script>
</body>
</html>

probleme responsive dans id "container-info"