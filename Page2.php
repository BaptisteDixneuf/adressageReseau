<!-- Ceci est un commentaire
Bienvenue sur le projet d'isn sur l'adressage réseau

Date de de création du fichier: 
12 Octobre 2012 par Léo

Historique de modifications du fichier (personne,date, les modfications apporté)
- Barreau Léo Création de la page 2 (Partie I)
- Dixneuf Baptiste - Recherche d'infos sur cette partie + début d'écriture de cette partie
- Dixneuf Baptiste - Rédaction de la page en HTML 
- Dixneuf Baptiste - Ajustement à certain endroit
- Dixneuf Baptiste - Ajout du bouton "lire la suite"
-->
<?php
 require("entete.php");
 entete();
?>
<section>
    <article>
        <h1>I.	Les adresses IP</h1> <!--Titre de la Partie-->
		
			<h2 id="adresse_IP">Adresse IP</h2> <!--Titre de la sous-partie-->
			
			<p>
			Une adresse IP est  une suite de nombres servant à identifier chaque ordinateur
			connecté à internet en utilisant le protocole IP (pour Internet Protocol). 
			Chaque ordinateur n’est pas associé de manière durable à une IP, 
			quand un ordinateur est remplacé par un autre, le nouveau peut hériter 
			de l’adresse IP de l’ancien. A l’inverse, si un ordinateur est déplacé
			d’un lieu à un autre, il change d’adresse IP . 
			</p>
	</article>	
	<article>
		<h2 id="la_forme_d_une_adresse_IP">La forme d'une adresse IP</h2><!--Titre de la sous-partie-->
			<p>
			Il existe des adresses IP de version 4 (sur 32 bits, soit 4 octets) et de version 6 (sur 128 bits, soit 16 octets).
			</p>

			<ul>
				<li>-Le bit est un chiffre binaire, c'est-à-dire 0 ou 1.</li>
				<li>-Un octet est toujours composé de 8 bits, soit 8 chiffres binaires.</li>
			</ul>

			<p>
			Les adresses IP dans la version 4 (la plus commune acutellement), 
			se représentent sous la forme de 4 nombres séparés d'un point,
			comprits entre 0 et 255 comme par exemple:
			<br>
			212.85.150.134
			<br>
			Les plages d'adresses IP v4 étant proches de la saturation, les opérateurs incitent à la transition d'IPv4 vers IPv6.
			</p>
			
			<p>
			Aisni IPv6 offre un plus grand espace
			d’adressage qu’en IPv4 : on passe d’un codage
			des adresses en IPv4 sur 32 bits (4.3 milliards
			d’adresses) à un codage en IPv6 sur 128 bits
			(3.4*10^38, soit 340 milliards de milliards de milliards
			de milliards d’adresses).
			</p>
			
	</article>
	<aside>
			<p>
			Comment trouver l’adresse IP  associée à son ordinateur ?
			</p>
			
			<ul>
				<li>
				- Ouvrir la fenêtre de commandes ( Bouton Démarrer > Exécuter…> Taper « cmd »)
				</li>
				<li>
				- Taper « ipconfig » et faire entrer 
				</li>
				<li>
				- Ainsi  différentes informations s’affichent, relatives  à la connexion 
				de son ordinateur au réseau. On reconnaît parmi ces informations des adresses
				de la forme 216.239.59.104 : un quadruplet de nombres compris entre 0 et 255.
				Il s’agit d’adresses Ipv4 attribuées à chacune des cartes réseaux de l’ordinateur.
				</li>
			</ul>
			
	</aside>
	<article>	
		<h2 id="IP_statique_ou_dynamique">IP statique ou dynamique?</h2><!--Titre de la sous-partie-->
		
			<p>
			Quand vous vous connectez à internet, votre fournisseur d'accès (F.A.I),
			par exemple orange, sfr,free où bouygues, vous affecte une adresse IP. 
			Il peut vous attribuer tout le temps la même adresse IP (=IP fixe)
			ou bien vous donner à chaque connexion une adresse IP différente (=IP dynamique). 
			</p>
			
			<p>
			Donc une adresse IP peut être statique ou dynamique :
			</p>
			
			<ul>
				<li>
				-Si l'ordinateur utilise la même adresse IP à chaque fois qu'il se connecte
				au réseau (Internet par exemple), alors il est dit d'avoir une adresse IP statique (fixe).
				</li>
				<li>
				-Si l'adresse IP change souvent, lorsque l'ordinateur se connecte au réseau (Internet), 
				alors il est dit d'avoir une adresse IP dynamique. Pour obtenir une adresse ip dynamique,
				on utilise le DHCP,c’est un protocole réseau dont le rôle est d’assurer la configuration 
				automatique des paramètres IP
				</li>
			</ul>
			
			<br>
			<p>
			Le but des adresses IP dynamiques est la simplification de l'administration d'un réseau et l'économie des adresses IP
			</p>
			
	</article>	
    <article>		
		<h2 id="composition_d_une_IP">Composition d'une IP : Partie réseau et hôte </h2>
		
			<p>
			Chaque adresse IP contient donc deux informations élémentaires,	une adresse de réseau et une adresse d'hôte.
			La combinaison des deux désigne de manière unique une machine et une seule sur l'internet
			Ainsi, l'IP est divisée en 2 parties, une patie réseau et une partie hôte.
			La partie réseau sert à déterminer à quel réseau appartient la machine utilisant cet adresse IP 
			et la partie hôte nous renseigne sur l'hôte dont il sagit et le nombre d'hôte possible.
			Nous détaillerons ce point dans une prochaine partie.
			</p>
			
	</article>	
    <aside>
    		<p>
			Un réseau informatique est un ensemble d'équipements reliés entre eux pour échanger des informations.<br>
			Hôte : Terme souvent utilisé pour désigner un ordinateur relié à un réseau et assurant des fonctions autres que le transport
			 (en particulier des fonctions de niveau application).
			</p>

	</aside>

		<a href="Page3.php" class="bouton_rouge"> Lire la suite <img src="flecheblanchedroite.png" alt="Voir le compte-rendu"></a>
       
</section>
<?php
 require("footer.php");
 footer();
?>