<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Foire à Questions</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/css_general.css">
    <link rel="stylesheet" type="text/css" href="css/css_navbar.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="../web/assets/js/bootstrap.js"></script>
</head>
<body>

    <?php include 'header.php'; ?>


    <nav class="sousmenu navbar">    
        <ul  class="nav">
            <li class="active col-xs-12"><a data-toggle="tab"><h1 class="text-center">Foire à questions</h1></a></li>
        </ul>


    <div class="main container">
        <div class="panel-group" id="accordion">
            <h1><span>></span> La timeline</h1>
            <br>
            <div class="panel panel-default noborder">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Qu'est-ce que c'est?</a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse">
                    <div class="panel-body">
                        La timeline est un <strong>emploi du temps</strong> sur une semaine basé sur celui des étudiants de MMI, soit du Ludni au Vendredi, de 8h à 18h30.
                        Elle est accessible en cliquant sur l'icone de Timeline, depuis la barre de navigation.<br>
                        Chaque bloc d'1h30 correspond à un bloc pouvant contenir des vidéos correspondant à une catégorie définie.
                    </div>
                </div>
            </div>
            <div class="panel panel-default noborder">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">A quoi correspond les couleurs des blocs?</a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        Chaque couleur correspond à une <strong>catégorie</strong> de vidéos. Il y a 6 catégories: <br><br>
                        <strong>ACTUS</strong> : Vidéos sur la culture web, actus du monde technologique, les dernières tendances ou les sorties ciné intéressantes. <br>
                        <strong>VISUEL</strong> : Tutoriels et actus sur le graphisme, l’audiovisuel, le webdesign et la communication (TED, conférences, etc.) <br>
                        <strong>TECHNO</strong> : Tutoriels et actus sur le développement front et back, réseaux... <br>
                        <strong>ATELIERS</strong> : Les dernières œuvre sorties des ateliers : Web TV, FanZine, Photographie, Graffiti, Théâtre, Musique...<br>
                        <strong>FUN</strong> : Diffusion de projets personnels autres projets intéressants en rapport avec les domaines de la formation.<br>
                        <strong>AFTERMMI</strong> : Portraits d’étudiants, d'agence, débouchés actuels. Opportunités de stages. La vie après MMI, quoi.
                    </div>
                </div>
            </div>
            <div class="panel panel-default noborder">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Combien de vidéos peuvent contenir chaque bloc et comment les voir?</a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                        Chaque bloc peut contenir un nombre infini de vidéos, tant que la durée de l'ensemble des vidéos ne dépasse pas 1h30. <br>
                        Toutes les vidéos déjà ajoutées sont visibles en cliquant sur le <strong>"i"</strong> du bloc, dans l'<strong>aperçu de lecture</strong> à gauche.
                    </div>
                </div>
            </div>
            <div class="panel panel-default noborder">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Comment savoir si un bloc est remplis?</a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse">
                    <div class="panel-body">
                        Si un bloc dispose d'assez de place pour ajouter une ou plusieurs vidéos, il apparait dans la <strong>couleur</strong> de sa catégorie.<br>
                        Au contraire, si un bloc est entièrement remplis, il apparait en <strong>blanc</strong>.<br>
                        <br>
                        Dans tous les cas, le <strong>nombre des vidéos</strong> qu'il contient apparait dans le bloc en dessous du nom de la catégorie à laquelle il appartient.
                    </div>
                </div>
            </div>

            <br>

            <h1><span>></span> La Bibliothèque</h1>
            <br>
            <div class="panel panel-default noborder">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFifteen">Qu'est-ce que c'est et comment y accéder?</a>
                    </h4>
                </div>
                <div id="collapseFifteen" class="panel-collapse collapse">
                    <div class="panel-body">
                        La bibliothèque est une page regroupant <strong>la totalité des vidéos ajoutées</strong> sur le site par tous les étudiants depuis le début de l'année.
                        Elle est accessible en cliquant sur l'icone de Bibliothèque, depuis la barre de navigation.<br>
                        Chaque vidéo est triée en fonction de sa catégorie et est visible depuis l'Aperçu des vidéos. 
                    </div>
                </div>
            </div>

            <br>

            <h1><span>></span> L'aperçu des vidéos</h1>
            <br>
            <div class="panel panel-default noborder">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Qu'est-ce que c'est?</a>
                    </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse">
                    <div class="panel-body">
                        L'aperçu des vidéos est la fenêtre à gauche permettant d'accéder à plus d'informations sur le bloc ou la vidéo sélectionnée.
                        <br>
                        On y trouve plusieurs types d'informations:<br><br>

                        <ul>
                            <li>La <strong>catégorie</strong> du bloc ou de la vidéo, en titre au sommet de la fenêtre.</li>
                            <li>Le <strong>lecteur</strong> de la vidéo, comprenant tous les boutons de lecture.</li>
                            <li>Le <strong>titre</strong> de la vidéo, tel qu'il est sur YouTube ou modifié par l'auteur de la vidéo.</li><br>
                            <li>La <strong>description</strong> de la vidéo, tel qu'il est sur YouTube ou modifié par l'auteur de la vidéo.</li>
                            <li>L'<strong>auteur</strong> qui a ajouté la vidéo, s'il s'agit de quelqu'un d'autre que vous. Si vous en êtes l'auteur, alors rien n'apparait.</li>
                            <li>Le <strong>bouton de signalement</strong> de la vidéo, si l'auteur est quelqu'un d'autre que vous.</li>
                            ou<br>
                            <li>Les <strong>boutons de modification et suppression</strong> de la vidéo, si vous en êtes l'auteur.</li>
                        </ul><br>

                        Si l'élément sélectionné est un bloc:<br>
                        <ul>
                            <li>La <strong>liste des vidéos</strong> du bloc, avec un contour turquoise autour de la vidéo sélectionnée dans le bloc.</li>
                        </ul>
                        
                    </div>
                </div>
            </div>
            <div class="panel panel-default noborder">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Certaines infos ne s'affichent pas. Où puis-je les voir?</a>
                    </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse">
                    <div class="panel-body">
                        Lors de la sélection d'un bloc, l'emplacement réservé à l'affichage des vidéos du bloc sert également à afficher la description, l'auteur et les bouttons de la vidéo.<br>
                        Pour afficher ces informations supplémentaires, <strong>cliquez sur "i"</strong> à côté du titre de la vidéo. Pour masquer ces informations, <strong>cliquez sur "x"</strong> à ce même.
                    </div>
                </div>
            </div>
            <div class="panel panel-default noborder">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">A quoi sert le bouton "signaler"?</a>
                    </h4>
                </div>
                <div id="collapseSeven" class="panel-collapse collapse">
                    <div class="panel-body">
                        Le bouton "signaler" s'affiche seulement s'il s'agit d'une vidéo ajoutée par quelqu'un d'autre que vous. <br>
                        Il sert à demander la <strong>suppression d'une vidéo</strong> jugée incorrecte ou comportant des erreurs dans les informations. Au bout de 5 signalements, la vidéo est automatiquement supprimée. Sinon, elle sera analysée par l'administrateur à la fin de la semaine et modifiée ou supprimée.
                    </div>
                </div>
            </div>
            <div class="panel panel-default noborder">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseHeight">A quoi sert les boutons "modifier" et "supprimer"?</a>
                    </h4>
                </div>
                <div id="collapseHeight" class="panel-collapse collapse">
                    <div class="panel-body">
                        Les boutons "modifier" et "supprimer" s'affichent seulement s'il s'agit de l'un de vos vidéos.<br><br>

                        Le bouton "modifier" sert à modifier les informations de votre vidéo, à savoir le titre, la description et la catégorie.<br>
                        Le bouton "supprimer" sert à supprimer définitivement votre vidéo du bloc et de la bibliothèque.<br><br>

                        Ces fonctionnalités sont également disponibles depuis votre profil.
                    </div>
                </div>
            </div>
        
            <br>

            <h1><span>></span> Ajouter une vidéo</h1>
            <br>
            <div class="panel panel-default noborder">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">Comment ajouter une vidéo?</a>
                    </h4>
                </div>
                <div id="collapseNine" class="panel-collapse collapse">
                    <div class="panel-body">
                        L'ajout de vidéo se fait depuis la <strong>Timeline</strong>, en survolant un bloc puis en cliquant sur le "+" qui s'affiche.<br>
                        Deux choix s'offrent alors à vous:<br>
                        <ul>
                            <li>Envoyer une vidéo déjà existante <strong>depuis la bibliothèque</strong> via l'onglet "Bibliothèque".</li>
                            <li>Envoyer une nouvelle vidéo <strong>depuis un lien YouTube</strong> via l'onglet "Lien YouTube".</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel panel-default noborder">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">Puis-je envoyer plusieurs vidéos en même temps?</a>
                    </h4>
                </div>
                <div id="collapseTen" class="panel-collapse collapse">
                    <div class="panel-body">
                        Il est possible d'envoyer une seule vidéo à la fois, soit depuis la bibliothèque, soit depuis un lien YouTube, mais pas les deux.
                    </div>
                </div>
            </div>

                        <div class="panel panel-default noborder">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">Puis-je modifier les informations d'une vidéo que j'ajoute?</a>
                    </h4>
                </div>
                <div id="collapseEleven" class="panel-collapse collapse">
                    <div class="panel-body">
                        Il n'est pas possible de modifier les informations d'une vidéo déjà importée dans la bibliothèque.<br>
                        Mais lors de l'ajout d'une nouvelle vidéo, les informations pré-remplies par YouTube sont modifiables.
                    </div>
                </div>
            </div>

            <br>


            <h1><span>></span> Mon profil</h1>
            <br>
            <div class="panel panel-default noborder">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve">Qu'est-ce que c'est et comment y accéder?</a>
                    </h4>
                </div>
                <div id="collapseTwelve" class="panel-collapse collapse">
                    <div class="panel-body">
                        "Mon profil" est une page personnelle contenant des informations sommaire à propos de vous, ainsi que l'ensemble des vidéos ajoutées par vous depuis votre première connexion, triées en fonction de leur catégorie.<br>
                        Elle est accessible en cliquant sur votre photo et votre prénom, depuis la barre de navigation.
                    </div>
                </div>
            </div>
            <div class="panel panel-default noborder">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen">Puis-je modifier ou supprimer des vidéos depuis mon profil?</a>
                    </h4>
                </div>
                <div id="collapseThirteen" class="panel-collapse collapse">
                    <div class="panel-body">
                        Il est possible de modifier ou supprimer vos vidéos via l'Aperçu de vidéo, en sélectionnant une vidéo de votre profil.
                    </div>
                </div>
            </div>

            <div class="panel panel-default noborder">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen">Pourquoi l'une de mes vidéos a disparue?</a>
                    </h4>
                </div>
                <div id="collapseFourteen" class="panel-collapse collapse">
                    <div class="panel-body">
                        Une vidéo disparue est une vidéo qui a été supprimée pour non conformité au site. Il y a deux cas de suppression possibles:<br>
                        <ul>
                            <li>Elle a été jugée non conforme <strong>par l'administrateur</strong> du site.</li>
                            <li>Elle a été jugée non conforme <strong>par plusieurs étudiants</strong> et a reçu plus de 5 signalements.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </nav>


</body>

<script type="text/javascript">
    $("#faqa").addClass("current");
    </script>
</html>