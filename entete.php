<!-- Ceci est un commentaire
Bienvenue sur le projet d'isn sur l'adressage réseau

Date de de création du fichier: 
09 Octobre 2012 par Baptiste,Léo et Dorian

Historique de modifications du fichier (personne,date, les modfications apporté)
-Dixneuf Baptitse: Création de la page entete.php + explication du fonctionnement de php
-Barreau Léo :Création de lien vers les autres pages dans le menu.
-Barreau Léo :Ajout de parties. 
-Baptiste Dixneuf: Ajout prototype de logo +id au menu
-Dixneuf Baptiste: Ajout de comentaire pour que le html5 soit compris par INTERNET explorer
-Barreau Léo Changement du logo 
-->
<?php
function entete (){
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<!--[if IE]>
    <script type="text/javascript">
  document.createElement("header");
  document.createElement("footer");
  document.createElement("section");
  document.createElement("aside");
  document.createElement("nav");
  document.createElement("article");
  document.createElement("figure");
  document.createElement("figcaption");
    </script>
<![endif]-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36387664-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</script>
<script type="text/javascript" src="date_heure.js"></script>

<html>
    <head>
        <title>L'adressage réseau</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link rel="stylesheet" href="reset.css"/> <!--reset les parametres par défault du navigateur-->
		 <link rel="stylesheet" href="design_ensemble.css"/> <!--Design du site--> 
         <link rel="stylesheet" href="design_entete.css"/> <!--Design du site-->
		<link rel="stylesheet" href="design_corps.css"/> <!--Design du site--> 
		<link rel="stylesheet" href="design_footer.css"/> <!--Design du site--> 
		
    </head>
    <body>
        <header>
            <h1>
            <img src="viewlogo2.png" width="80px">
            L'adressage réseau pour les nuls</h1>
        </header> <!--Entête du site-->
        <div class="BarreMenu">
          <nav>
            <ul id="menu_horizontal">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="Page2.php">Les adresses IP</a>
					<ul class="sousMenu">
						<li><a href="Page2.php#adresse_IP">Adresse IP</a></li>
						<li><a href="Page2.php#la_forme_d_une_adresse_IP">La forme d'une adresse IP</a></li>
						<li><a href="Page2.php#IP_statique_ou_dynamique">IP statique ou dynamique?</a></li>
						<li><a href="Page2.php#composition_d_une_IP">Composition d'une IP</a></li>
					</ul>
				</li>
                <li><a href="Page3.php">Les types d'adresses</a>
					<ul class="sousMenu">
						<li><a href="Page3.php#les_types_de_classes">Les types de classes</a></li>
						<li><a href="Page3.php#les_masques_de_sous_réseau">Les masques de sous réseau</a></li>
						<li><a href="Page3.php#les_adresses_réseaux_publiques_et_privées">Les adresses réseaux publiques et privées</a></li>
						<li><a href="Page3.php#les_adresses_de_broadcast">Les adresses de broadcast</a></li>
						<li><a href="Page3.php#les_adresses_de_bouclage">Les adresses de bouclage</a></li>
					</ul>
				</li>
                <li><a href="Page4.php">Les calculs</a>
					<ul class="sousMenu">
						<li><a href="Page4.php#du_nombre_d_hôtes_par_classe">du nombre d'hôtes par classe</a></li>
						<li><a href="Page4.php#adresse">des adresses de sous réseau</a></li>
					</ul>
				</li>
                <li><a href="Page5.php">Les noms de domaines</a>
					<ul class="sousMenu">
						<li><a href="Page5.php#qu_est-ce_qu_un_nom_de_domaine">Qu'est-ce qu'un nom de domaine ?</a></li>
						<li><a href="Page5.php#relation_entre_le_nom_de_domaine_et_l_adresse_IP">Relation entre le nom de domaine et l'adresse IP</a></li>
						<li><a href="Page5.php#la_composition_d_une_URL">La composition d'une URL</a></li>
					</ul>
				</li>
                <li><a href="Page6.php">Du concret: les adresses mails</a>
					<ul class="sousMenu">
						<li><a href="Page6.php#petite_histoire">Petite histoire</a></li>
						<li><a href="Page6.php#la_constitution_des_adresses_mails">La constitution des adresses mails</a></li>
						<li><a href="Page6.php#L_envoi_des_mails_:_le_protocole_SMTP">L’envoi des mails : le protocole SMTP</a></li>
						<li><a href="Page6.php#La_réception_:_les_protocoles_POP_et_IMAP">La réception : les protocoles POP et IMAP</a></li>
					</ul>
				</li>
            </ul>
        </nav><!--Menu du site-->
      </div>
	  <div class="date">
	  <span id="date_heure"></span>
			<script type="text/javascript">window.onload = date_heure('date_heure');</script>
      </div> 
        
 <?php
 }
?>
