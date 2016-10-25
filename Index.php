<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>TP SiteWebPHP</title>
<!-- il faudra une balise description décrivant chacune des pages-->
<meta name="description" content="La description de votre page">
<!-- il faudra une balise description décrivant chacune des pages-->
<meta name="keyword" content="mot clé, mot clé">
<!-- la balise keyword n'est plus d'une grande utilité, mettez la quand même (qui peut le plus peut le moins, mettre une balise keyword en lien avec le contenu de chaque page)-->
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<!-- balise pour responsive design-->

<!--lien vers le fichier javascript (dans dossier js) qui nous permet de contourner IE9-->
<!--[if lt IE 9]>
	<script src="inc/js/html5shiv.min.js"></script>
<![endif]--> 

<!--lien vers le fichier javascript (dans dossier js) qui nous permet de contourner IE9-->
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link href="css/style.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

<!-- lien vers votre feuille de style-->
</head>
<!-- ceci est l'entête http -->
<body>
<!-- ceci est le corps de votre page -->
<h1>TP Bootstrap</h1>

	<header> <!-- le header est l'etête de votre site, à ne pas confondre avec le head, le header est un élément qui appartient au body -->
		<nav class="navbar navbar-default">
  			<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    			<div class="navbar-header">
      			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        			<span class="sr-only">Toggle navigation</span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
      			</button>
      			<a class="navbar-brand" href="index.php"><img src="Images/liftarn_Cat_silhouette.png" id="Accueil"></img></a>
    		</div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
        			<li class="active"><a href="#">Accueil<span class="sr-only">(current)</span></a></li>
        			<li><a href="#">Le Chat</a></li>
        			<li><a href="#">Les Races</a></li>
                    <li><a href="#">Contact</a></li>
      			</ul>
    		</div><!-- /.navbar-collapse -->
  			</div><!-- /.container-fluid -->
		</nav>
	</header>
		<h1>Git est passé par la</h1>
<h1>Bienvenue sur Chat Magazine</h1>
		<div class="container-fluid"> <!-- le main est le container (la boite) de votre contenu principal -->
			<section class="row"><!--représente une section générique d'un document, c'est à dire un groupement thématique de contenu, généralement avec un en-tête.-->
				    <h1>Présentation</h1>
                    <div class="row">    
                <a class=" col-xs-offset-1 col-xs-10 col-sm-offset-4 col-sm-8 col-lg-offset-5 col-lg-4">
                    <figure>
                        <img src="Images/chat.jpg" class="img-circle img-responsive"></img>
                    </figure>
                    </a>
                    </div>
                <p class="col-xs-12">Le chat est un animal qui nous fascine par sa beauté, sa souplesse et son caractère entier. Nous aimons le chat car il nous rapproche du monde sauvage : le chat civilisé reste un chasseur hors pair et un être indompté.</p>
            <p class="col-xs-12">Contrairement au chien, le chat est un être indépendant. A l’état sauvage, le chat vit seul et assure seul sa survie. Chasseur perfectionné, il n’a pas de mal a trouvé de la nourriture. Attiré par les humains il y a seulement 5 000 ans, il a choisi de vivre progressivement des restes de nourriture plutôt que de la chasse. De chasseur solitaire qui a son propre territoire, il est donc entré dans nos maisons sans pour autant être totalement domestiqué. Dans notre foyer, Il a su s’adapter et trouver du confort et de la sécurité auprès de nous. Pour autant, il est capable de revenir à l’état sauvage si cela devient nécessaire. De la même façon il est facilement apprivoisable. Avec la croissance des naissances, nombreux sont les chatons sauvages trouvés ou amenés aux associations protectrices des animaux, qui jamais touchés par un homme, deviennent parfaitement apprivoisables au bout de quelques jours.

            Dès lors qu’il entre dans nos foyers, le chat s’accapare un territoire qu’il va marquer et défendre. Le marquage prend différentes formes (griffes, traces d’urines, ou frottement du corps). L’ordre hiérarchique est absent de cet animal. Au contact de ses congénères « étrangers », il peut donc devenir agressif car il protège son domaine. Pour autant, rien ne l’empêche de vivre avec d’autres animaux de compagnie. Il partagera donc son territoire si les conditions sont optimales : grand espace, nourriture à volonté, plusieurs espaces de repos, plusieurs espaces de toilettes, etc.

            Dans la maison, l’homme est considéré comme faisant partie de l’univers du chat. Lorsqu’il se frotte à lui, il laisse son odeur sur ce dernier. Il est à la fois semblable et différent du chat. L’homme est un compagnon de jeu, apporte nourriture et sécurité ce qui ne le place pas comme un concurrent.

            En résumé, le chat est un animal territorialiste et solitaire qui, en ayant choisi de vivre auprès de l’homme, s’adapte au foyer tout en conservant une indépendance. Il est donc primordial que le chat ait un « coin » à lui afin qu’il se sente bien.</p>
            <p class="col-xs-12">Le chat est un animal qui nous fascine par sa beauté, sa souplesse et son caractère entier. Nous aimons le chat car il nous rapproche du monde sauvage : le chat civilisé reste un chasseur hors pair et un être indompté.</p>
			</section>
            <section class="row">
                    <h1 classh="col-xs-12">Les Races de Chats</h1>
                <a class="col-xs-10 col-sm-6 col-md-2  col-lg-2">
                    <figure>
                        <img src="Images/chat.jpg" class="img-circle img-responsive "></img>
                        <figcaption>Chat Européen</figcaption>
                    </figure>
                </a>
                <a class="col-xs-10 col-sm-6 col-md-2  col-lg-2">
                    <figure>
                        <img src="Images/chat.jpg" class="img-circle img-responsive "></img>
                        <figcaption>Race 2</figcaption>
                    </figure>
                </a>
                <a class="    col-xs-10 col-sm-6 col-md-2  col-lg-2">
                    <figure>
                        <img src="Images/chat.jpg" class="img-circle img-responsive "></img>
                        <figcaption>Race 3</figcaption>
                    </figure>
                </a>
                <a class="    col-xs-10 col-sm-6 col-md-2  col-lg-2">
                    <figure>
                        <img src="Images/chat.jpg" class="img-circle img-responsive "></img>
                        <figcaption>Race 4</figcaption>
                    </figure>
                </a>
                <a class="    col-xs-10 col-sm-6 col-md-2  col-lg-2">
                    <figure>
                        <img src="Images/chat.jpg" class="img-circle img-responsive "></img>
                        <figcaption>Race 5</figcaption>
                    </figure>
                </a>
                <a class=" col-xs-10 col-sm-6 col-md-2  col-lg-2">
                    <figure>
                        <img src="Images/chat.jpg" class="img-circle img-responsive "></img>
                        <figcaption>Race 6</figcaption>
                    </figure>
                </a>
                
            </section>
        
			<section>
                <article>
                    <h1>Contact</h1>
                    <a>
                    <figure>
                        <img class="img-circle"></img>
                        <figcaption>Race 1</figcaption>
                    </figure>
                
                    </a>
                <!-- Formulaire de contact à placer tout à l'heure -->
                </article>
            </section>		
		</div>
</body>


</html>