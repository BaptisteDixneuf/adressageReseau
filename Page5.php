<!-- Ceci est un commentaire
Bienvenue sur le projet d'isn sur l'adressage réseau

Date de de création du fichier: 
12 Octobre 2012 par Léo

Historique de modifications du fichier (personne,date, les modfications apporté)
- Barreau Léo Création de la page 5 (Partie IV)
- - Dixneuf Baptiste - Recherche d'infos sur cette partie + début d'écriture de cette partie
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
  
    <h1>IV.Les noms de domaines</h1> <!--Titre de la Partie--> 
	
      <h2 id="qu_est-ce_qu_un_nom_de_domaine">Qu'est-ce qu'un nom de domaine ?</h2> <!--Titre de la sous-partie-->
	  
<p>
		Un nom de domaine est en lien avec une adresse IP.
           Par exemple, au lieu de taper 
    		   <?php
    		   //Petit fonction php qui permet de récupérer l'ad(ressse ip à un adresse 		   
    		   $ip = gethostbyname("isnreseau.koding.com"); 
    		   echo $ip;
    		   ?>
		      vous pouvez taper isnreseau.koding.com, 
          ce qui est plus facilement mémorisable. Les noms de domaines permettent ainsi d’avoir une meilleure
          lisibilité sur le réseau internet.
</p>

      <h2 id="relation_entre_le_nom_de_domaine_et_l_adresse_IP"> Relation entre le nom de domaine et l'adresse IP </h2>
	  
<p>
    Nous avons vu que les ordinateurs travaillent avec des chiffres (adresses IP). 
    Néanmoins, lorsque vous consulter un site vous insérez son adresse (URL) et non pas son adresse IP. 
    Comment la liaison, alors, est elle effectuée?
</p>

<br>
<p> Ce sont les serveurs DNS qui sont chargés de faire la correspondance entre un nom de domaine (adresse virtuelle)
    et son adresse IP (adresse physique).
</p>

  </article>
  
  <aside>
<p>
    DNS = Domain Name Server = Serveur de nom de domaine 
</p>

<p>
    C'est un répertoire d’adresses Web qui a été mis en place dès la fin des années quatre-vingt qui permet de savoir 
    quelle est l'adressse IP d'un nom de domaine.
</p>   
    </aside>
	
<article>

<p>
L'organisme chargé de gérer le DNS est l’IANA (Internet Numbers Assigned Authority).
</p>

<p>
 Voici comment ce déroule cette étape en détail, lorsque vous cherchez un nom de domaine comme www.yahoo.com:
</p>
      
     
<ol>
    <li><strong>1.</strong> Recherche du serveur DNS qui gère le nom de domaine cherché </li>
    <li><strong>2.</strong> Le navigateur demande d'abord aux serveurs DNS présents dans le système quel serveur s'occupe des extensions .com.</li>
    <li><strong>3.</strong> Après avoir obtenu la réponse, le navigateur demande à ce serveur quel serveur DNS s'occupe de www.yahoo.com.</li>
    <li><strong>4.</strong> Après avoir obtenu la réponse, le navigateur demande enfin au serveur DNS qui gère www.yahoo.com,
        qui s'occupe de www.yahoo.com, ce dernier répondant que c'est lui-même.</li>
</ol>

      <p>
      Le navigateur a trouvé le serveur DNS qui gère le nom de domaine www.yahoo.com
      </p>
	  
      <br>
	  
      <p>
     Ensuite, on recherche l'adresse IP du site Internet recherché:
      </p>
	  
      <ul>
        <ol><strong>1.</strong> Le navigateur demande au serveur DNS gérant le site www.yahoo.com quelle est l'adresse IP de ce dernier.</ol>
        <ol><strong>2.</strong> Le serveur DNS répond en lui donnant l'adresse IP du site composée de 4 nombres entiers (IP).</ol>
        <ol><strong>3.</strong> Le navigateur a trouvé l'adresse physique www.yahoo.com, il peut à présent établir une connexion.</ol>
      </ul>
	  
</article> 

<article>   
  
      <h2 id="la_composition_d_une_URL"> La composition d'une URL </h2>
	 
<p>
    Une URL (Uniform Resource Locator) est un suite de caractères associée à une page web.
    Il s'agit donc d'une chaîne de caractères qui se décompose en cinq parties :
</p>

<br>

<ol>
    <li><strong>1.</strong> Le nom du protocole : c'est-à-dire en quelque sorte le langage utilisé pour communiquer sur le réseau.
          Le protocole le plus largement utilisé est le protocole HTTP (HyperText Transfer Protocol), le protocole permettant d'échanger des pages Web au format HTML. 
          De nombreux autres protocoles sont toutefois utilisables (FTP,News,Mailto,Gopher,...) </li>
           
    
	<li><strong>2.</strong>  Identifiant et mot de passe : permet de spécifier les paramètres d'accès à un serveur sécurisé. 
          Cette option est déconseillée car le mot de passe est visible dans l'URL</li>
              
    <li><strong>3.</strong> Le nom du serveur : Il s'agit d'un nom de domaine de l'ordinateur hébergeant la ressource demandée.</li>
         
            
    <li><strong>4.</strong> Le numéro de port : il s'agit d'un numéro associé à un service permettant au serveur de savoir quel type de ressource est demandée. 
          Le port associé par défaut au protocole est le port numéro 80. Ainsi, lorsque le service Web du serveur est associé au numéro de port 80,
          le numéro de port est facultatif </li>
            
    <li><strong>5.</strong>  Le chemin d'accès à la ressource : Cette dernière partie permet au serveur de connaître l'emplacement auquel la ressource est située,
            c'est-à-dire de manière générale l'emplacement (répertoire) et le nom du fichier demandé </li>
</ol>

<br>

<p>
	Une URL a donc la structure suivante :
</p>

        <table>
          <tr> 
            <th>Protocole </th>
            <th>Mot de passe (facultatif)</th>
            <th>Nom du serveur </th>
            <th>Port(facultatif si 80) </th>
            <th>Chemin </th>
        </tr> 
          <tr> 
            <td>http://	</td>
            <td>user:password@ </td>
            <td>isnreseau.koding.com</td>
            <td>:80	</td>
            <td>/index.php</td>
          </tr>
        </table>
		
  </article>           
    <a href="Page6.php" class="bouton_rouge"> Lire la suite <img src="flecheblanchedroite.png" alt="Voir le compte-rendu"></a>
       
</section>
<?php
 require("footer.php");
 footer();
?>