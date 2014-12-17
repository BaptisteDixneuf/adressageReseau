<!-- Ceci est un commentaire
Bienvenue sur le projet d'isn sur l'adressage réseau

Date de de création du fichier: 
12 Octobre 2012 par Léo

Historique de modifications du fichier (personne,date, les modfications apporté)
- Barreau Léo Création de la page 4 (Partie III)
- integration des calculs du nombres d'hote
-->
<?php
 require("entete.php");
 entete();
?>
    <section>
        <article>
		<h1>III. Les calculs</h1> <!--Titre de la Partie-->
		
		<article>
		<h2 id="du_nombre_d_hôtes_par_classe">Calculs du nombre d'hôtes par classe</h2> <!--titre de la sous-partie-->
		<p id = "hote_1">Dans les adresses de types A, l'adresse réseau est défini sur 1 octet at l'adresse 
		d'hôte est définie sur 3 octets donc  8*3 bits soit 24 bits. Mais on sait que le dernier octet ne peut 
		être égal à 255 et à 0 ce qui enlève 2 possiblités. Le nombre de possibilités est donc égal à 2^24-2 = 16777214. 
		Il y a donc 16777214 hôtes possibles dans un réseau de classe A </p>
		<p id = "hote_2">Dans les adresses de types B, l'adresse réseau est définie sur 2 octets at l'adresse 
		d'hôte est définie sur 2 octets donc  8*2 bits soit 16 bits. Mais on sait que le dernier octet ne peut 
		être égal à 255 et à 0 ce qui enlève 2 possiblités. Le nombre de possibilités est donc égal à 2^16-2 = 65534. 
		Il y a donc 65534 hôtes possibles dans un réseau de classe B  </p>
		<p id = "hote_3">Dans les adresses de types C, l'adresse réseau est définie sur 3 octets at l'adresse 
		d'hôte est définie sur 1 octet donc  8 bits. Mais on sait que le dernier octet (donc ici le seul qui défini l'hôte) ne peut 
		être égal à 255 et à 0 ce qui enlève 2 possiblités. Le nombre de possibilités est donc égal a 2^8-2 = 254. 
		Il y a donc 254 hôtes possibles dans un réseau de classe C </p>
             <a href="Page3.php#nombre_d_hotes" class="bouton_rouge">
			 Revenir au chapitre en cours <img src="flecheblanchedroite.png" alt="Voir le compte-rendu"/></a>
		</article>
		<article>
       <h2 id = "adresse">Calculs des adresses de sous réseau</h2> <!--titre de la sous-partie-->
		<p>Faire un "Et logique" est simple. Tout d'abord il faut prendre l'adresse IP et masque sous réseau.</p>
		
		<ol>
		<li>@IP = 11000000.10101000.00101010.01000001</li>
		<li>MSR = 11111111.11111111.11111111.11110000</li>
		</ol>
		
		<p>
		0 associé à 0 donne 0; 1 associé à 0 donne 0 et 1 associé à 1 donne 1. Ainsi, ici l'adresse de sous réseau donne : 11000000.10101000.00101010.01000000 soit 192.168.42.64
		</p>
		
		<a href="Page3.php#Et_logique" class="bouton_rouge">Revenir au chapitre en cours <img src="flecheblanchedroite.png" alt="Voir le compte-rendu"/></a>
	   </article>
	   </article>
    </section>
<?php
 require("footer.php");
 footer();
?>