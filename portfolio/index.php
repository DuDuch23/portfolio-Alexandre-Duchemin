<?php
require('./require/connexion_bdd.php');

$erreur = [];
if(empty($_POST) === false)
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $sujet = $_POST['sujet'];
    $contenu = $_POST['contenu'];

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
        $erreur['email'] = "Veuillez saisir votre adresse mail";
    }
    else
    {
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false)
        {
            $erreur['email'] = "Veuillez saisir une adresse mail valide";
        }
    }
    if(empty($_POST['sujet']))
    {
        $erreur['sujet'] = "Pourquoi me contactez vous ?";
    }
    if(empty($_POST['contenu']))
    {
        $erreur['contenu'] = "Veuillez saisir votre message";
    }

    if(empty($erreur))
    {
        try{
            $insertion = $con->prepare('INSERT INTO message_portfolio (nom_message, prenom_message, email_message, sujet_message, contenu_message) VALUES (:nom_message, :prenom_message, :email_message, :sujet_message, :contenu_message)');
            $insertion->bindParam(':nom_message', $_POST['nom']);
            $insertion->bindParam(':prenom_message', $_POST['prenom']);
            $insertion->bindParam(':email_message', $_POST['email']);
            $insertion->bindParam(':sujet_message', $_POST['sujet']);
            $insertion->bindParam(':contenu_message', $_POST['contenu']);

            $insertion->execute();

            echo "Votre demande a bien été transmise";
        } catch (\Exception $exception)
        {
            echo 'Erreur lors de l\'ajout de la demande de contact.';
        }
    }
}



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
    <title>Portfolio</title>
    <link href="portfolio.css" rel="stylesheet">
</head>

<body>
    <div id="container-menu-hamburger">
        <div id="menu-hamburger">
            <div class="container-button-menu-hamburger">
                <div class="button-hamburger" onclick="hideHamburger()">
                    <span class="trait-menu-hamburger"></span>
                    <span class="trait-menu-hamburger"></span>
                    <span class="trait-menu-hamburger"></span>
                </div>
            </div>
            <nav id="nav-hamburger">
                <li id="Accueil-hamburger"><a href="#bloc-accueil" onclick="hideHamburger()">Accueil</a></li>
                <li id="Projets-hamburger"><a href="#bloc-projets" onclick="hideHamburger()">Projets</a></li>
                <li id="Timeline-hamburger"><a href="#bloc-timeline" onclick="hideHamburger()">Timeline</a></li>
                <li id="Parcours-hamburger"><a href="#bloc-parcours" onclick="hideHamburger()">Mon Parcours</a></li>
                <li id="Contact-hamburger"><a href="#bloc-contact" onclick="hideHamburger()">Me Contacter</a></li>
            </nav>
        </div>
    </div>
    <header>
        <nav id="container-nav-bar">
            <div class="container-button-hamburger">
                <div class="button-hamburger" onclick="modal()">
                    <span class="trait-menu-hamburger"></span>
                    <span class="trait-menu-hamburger"></span>
                    <span class="trait-menu-hamburger"></span>
                </div>
            </div>
            <ul id="nav-bar">
                <li id="Accueil-nav-bar"><a href="#bloc-accueil">Accueil</a></li>
                <li id="Projets-nav-bar"><a href="#bloc-projets">Projets</a></li>
                <li id="Timeline-nav-bar"><a href="#bloc-timeline">Timeline</a></li>
                <li id="Parcours-nav-bar"><a href="#bloc-parcours">Mon Parcours</a></li>
                <li id="Contact-nav-bar"><a href="#bloc-contact">Me Contacter</a></li>
            </ul>
        </nav>
    </header>
    <div id="gr"></div>
    <div id="bloc-accueil">
        <div class="titre">
            <h1 id="accueil">Accueil</h1>
        </div>
        <div id="presentation">
            <div id="pdp">
                <img id="img-pdp" src="photo-de-profil.jfif" alt="pdp"> <!--demander de l'aide pour qu'elle devienne responsive-->
            </div>
            <div id="container-text">
                <p class="presentation-text">Bienvenue</p>
                <p class="presentation-text">Vous êtes sur le portfolio de : </p>
                <p id="nom-prenom">Duchemin Alexandre</p>
                <p class="presentation-text">Futur Développeur Full Stack Junior</p>
                <p class="presentation-text">En BTS SIO (Services Informatiques aux Organisations) à Saint-Vincent de Senlis</p>
            </div>
            <div id="CV">
                <button id="bouton-CV"><a href="https://aduchemin.lyceestvincent.fr/CV-Alexandre-Duchemin.pdf">Télécharger mon CV</a></button>
            </div>
        </div>
    </div>
                                                        <!--Projets-->
    <div id="bloc-projets">
        <div class="titre">
            <h1 id="mes-projets">Mes Projets</h1>
        </div>
        <div class="projets">
            <div class="info-projet">
                <div class="titre-projet">
                    <h2>CV Alex Johnson</h2>
                </div>
                <div class="container-projet">
                    <div class="projet">
                        <a href="https://aduchemin.lyceestvincent.fr/Projet_1_cv/CV-Alex-Johnson.html"><img id="Alex-Johnson" onclick="modal()" src="Alex-Johnson.png" alt="Projet CV Alex Johnson" ></a>
                    </div>
                </div>
            </div>
            <div class="info-projet">
                <div class="titre-projet">
                    <h2>Page Disney+</h2>
                </div>
                <div class="container-projet">
                    <div class="projet">
                        <a href="https://aduchemin.lyceestvincent.fr/Projet_2_Disney+/Disney+.html"><img id="disney" src="Disney.png" alt="Projet Disney+"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="projets">
            <div class="info-projet">
                <div class="titre-projet">
                    <h2>Projet CSE Lycée Saint-Vincent(En cours)</h2>
                </div>
                <div class="container-projet">
                    <div class="projet">
                        <a href="https://aduchemin.lyceestvincent.fr/Projet-CSE/contact/contact.php"><img id="cse" src="cse.PNG" alt="Projet-CSE"></a>
                    </div>
                </div>
            </div>
            <div class="info-projet">
                <div class="titre-projet">
                    <h2>Projet CSE Lycée Saint-Vincent(En cours)</h2>
                </div>
                <div class="container-projet">
                    <div class="projet">
                        <a href="https://aduchemin.lyceestvincent.fr/Projet3/contact/contact.php"><img id="cse" src="cse.PNG" alt="Projet-CSE"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-projet">
        <div id="container-modal-projet">

        </div>
    </div>
                                                        <!--Timeline-->
    <div id="bloc-timeline">
        <div class="wrapper">
            <div class="titre">
                <h1 id="ma-timeline">Timeline</h1>
            </div>
            <div id="timeline">
                <div id="container-timeline">
                    <span class="trait"></span>
                    <div class="timeline-item">
                        <div class="timeline-item-date">
                            <p class="date">2017-2022</p>
                        </div>
                        <div class="timeline-item-content">
                            <div class="timeline-item-content-logo">
                                <img class="img-lang" src="HTML5.png" alt="html">
                            </div>
                            <h3 class="timeline-item-titre">HTML5</h3>
                            <p class="timeline-item-texte">J'ai acquis des compétences en HTML grâce à des formations en ligne, pendant mes cours de BTS SIO (Services Informatiques aux Organisations) et à la pratique, par le biais d'éxercice en cours et surtout par la réalisation de Projets m'ayant permis d'approndir mes connaissances.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-item-date">
                            <p class="date">2017-2022</p>
                        </div>
                        <div class="timeline-item-content">
                            <div class="timeline-item-content-logo">
                                <img class="img-lang" src="CSS3.png" alt="css">
                            </div>
                            <h3 class="timeline-item-titre">CSS3</h3>
                            <p class="timeline-item-texte">Tout en acquisissant des compétences et connaissances en HTML, je me suis mis à apprendre le language css que j'ai vite adopter et approfondit pendant mes cours et projets. Je suis assez aisé dans ce language et possède assez de facilité à intégrer du css en HTML et PhP.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-item-date">
                            <p class="date">Novembre 2022</p>
                        </div>
                        <div class="timeline-item-content">
                            <div class="timeline-item-content-logo">
                                <img class="img-lang" src="cSharp.png" alt="c#">
                            </div>
                            <h3 class="timeline-item-titre">C#</h3>
                            <p class="timeline-item-texte">Je pratique le C# en cours de BTS SIO (Services Informatiques aux Organisations), je possède les bases du language et mes connaissances s'approfondissent de cours en cours par des exercices dans lesquels nous programmons des applications type .NET.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-item-date">
                            <p class="date">Janvier 2023</p>
                        </div>
                        <div class="timeline-item-content">
                            <div class="timeline-item-content-logo">
                                <img class="img-lang" src="php.png" alt="php">
                            </div>
                            <h3 class="timeline-item-titre">Php</h3>
                            <p class="timeline-item-texte">Je pratique le php en général, ce language me fascine, il est celui que je maîtrise le mieux de tout les languages ayant appris. Mes connaissances dans ce language sont approfondis, grâce à un professionnel lors de mes cours de BTS SIO, des projets en PHP et des ressources en lignes.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-item-date">
                            <p class="date">2023</p>
                        </div>
                        <div class="timeline-item-content">
                            <div class="timeline-item-content-logo">
                                <img class="img-lang" src="js.png" alt="javascript">
                            </div>
                            <h3 class="timeline-item-titre">JavaScript</h3>
                            <p class="timeline-item-texte">Je pratique et apprend le JavaScript dans mes projet et pendant mon temps libre. Mes connaissances en JavaScript ne sont pas encore approfondi mais je me renseigne et l'apprends.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                                                        <!--Contact-->
    <div id="bloc-contact">
        <div class="wrapper">
            <div class="titre">
                <h1>Me Contacter</h1>
            </div>
            <form id="contact" method="POST" action="#">

                <div class="item-contact">
                    <input class="input" type="text" name="nom" placeholder="Nom">
                </div>

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

                <div class="item-contact">
                    <input class="input" type="text" name="prenom" placeholder="Prenom">
                </div>

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

                <div class="item-contact">
                    <input class="input" type="email" name="email" placeholder="email">
                </div>
    
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

                <div class="item-contact">
                    <select class="input" name="sujet" placeholder="sujet">
                        <option class="option-sujet" value=""></option>
                        <option class="option-sujet" value="demande-partenariat">Demande de partenariats</option>
                        <option class="option-sujet" value="demande-offre">Demande d'offre</option>
                        <option class="option-sujet" value="??">??</option>
                        <option class="option-sujet" value="autre">Autre...</option>
                    </select>
                </div>

                <?php
                if(isset($erreur['sujet']))
                {
                    ?><div class="erreur">
                        <p class="message-erreur"><?php echo $erreur['sujet']; ?></p>
                    </div><?php
                }
                else
                {
                    echo "";
                }
                ?>

                <div class="item-contact">
                    <textarea class="input" type="text" name="contenu" placeholder="Votre message"></textarea>
                </div>

                <?php
                if(isset($erreur['contenu']))
                {
                    ?><div class="erreur">
                        <p class="message-erreur"><?php echo $erreur['contenu']; ?></p>
                    </div><?php
                }
                else
                {
                    echo "";
                }
                ?>

                <div id="button-submit">
                    <input id="submit" type="submit">
                </div>
            </form>
        </div>
    </div>

    <div id="foot-page"></div>
    <script src="script.js"></script>

</body>
</html>