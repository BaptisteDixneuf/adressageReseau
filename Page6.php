<!-- Ceci est un commentaire
Bienvenue sur le projet d'isn sur l'adressage réseau

Date de de création du fichier: 
12 Octobre 2012 par Léo

Historique de modifications du fichier (personne,date, les modfications apporté)
- Barreau Léo Création de la page 6 (Partie V)
- Dumez dorian écriture de la partie V
- Dumez dorian modification des asides
-->
<?php
 require("entete.php");
 entete();
?>
    <section>
	
        <article>
		
        <h1>V. Du concret: les adresses mails</h1>
		
         <h2 id="petite_histoire">Petite histoire </h2>  
		 
         <p>
		 En 1971 Ray Tomlinson envoie son premier mail. 
         Il travaillait dans une grosse entreprise qui possédait 2 
         ordinateurs (c’était il y a 40 ans), donc les ingénieurs
         travaillaient chacun leur tour sur ces ordinateurs en ouvrant 
         leurs sessions. Mais quand un utilisateur voulait prévenir un autre
         pour quelque chose il laissait un post'it à côté de 
         l’ordinateur pour qu’il puisse le lire quand il irait 
         travailler à son tour. Les problèmes de cette méthode sont que 
         très vite il y avait beaucoup de post’it et que tout le monde pouvait 
         les lire.
		 </p> 
		 
		 <p>
		 Revenons à notre Ray Tomlinson, il a eu l’idée de mettre le post’it
         dans la session de la personne à qui on voulait écrire un message donc il a créé
         un logiciel pour ça. La première fois qu’il l’a testé avec un de ses amis chacun
         c’était connecté sur un des ordinateurs et il lui a envoyé un e-mail, mais rien, donc
         il croyait que son idée ne fonctionnait pas, en fait si, le mail a juste mis un quart 
         d’heure à arriver et il ne se souvient pas ce qu’il avait écrit dans le premier e-mail de l’histoire.
		</p>
		
        <p>
        Et bien sur le système a beaucoup évolué depuis.
        </p>
        
        <h2 id="la_constitution_des_adresses_mails">La constitution des adresses mails</h2>
		
        <p>
		Une adresse mail est divisée en 2 parties séparées par un arobase : le nom 
        d’utilisateur et le nom du fournisseur de messagerie. Le nom d’utilisateur est à 
        droite et le nom du fournisseur de messagerie a gauche : nom_d’utilisateur@fournisseur_de_messagerie.
        Le fournisseur de messagerie est défini par un IP classique car en réalité c’est un 
        gros serveur qui gère tout ça et le nom d’utilisateur est un compartiment de ce serveur.
		</p>
		
        <aside>
		@ est un caractère réservé on ne peut pas l’utiliser dans son nom d’utilisateur ou le
        nom du fournisseur de messagerie, il sert uniquement à séparer les 2 parties.
		</aside>
        
        <h2 id="L_envoi_des_mails_:_le_protocole_SMTP">L’envoi des mails : le protocole SMTP</h2>
		
        <p>
		Quand vous envoyez un mail vous vous connectez sur votre compte, tapez votre mail et l’envoyez.  
        A ce moment là vous interrogez le serveur SMTP(SMTP = Simple Mail Transfer Protocol traduit littéralement 
		« Protocole simple de transfert de courrier ») associé a votre fournisseur mail via le port 25 de votre ordinateur. 
        Normalement il vous répondra qu’il est près à vous écouter donc vous lui envoyez votre mail encodé 
        (les ordinateurs parlent en binaire et non en français donc il faut encoder les lettres : ne pas confondre avec le
        codage) avec le standard MIME.
		</p>
		
        <aside>
		Le standard MIME utilise la table ASCII (127 caractères définis sur 7 bits donc ne permettant pas le
        caractère accentué par exemple) en mettant un 0 par défaut sur le dernier bit. Les caractères accentués seront
        définis grâce à des algorithmes associés à ce standard : base64 pour les fichiers attachés (pièce jointe : 
        cet algorithme permet aussi de définir des images et des vidéos) et quotte-printable (d'abréviation QP) pour le corps du message.
		</aside>
        
        <h2 id="La_réception_:_les_protocoles_POP_et_IMAP">La réception : les protocoles POP et IMAP</h2>
		
        <p>
		- Nous commencerons par le protocole le plus rependu : POP3 (POP = Post Office Protocol,traduit littéralement par «protocole du bureau de poste »,
		il est actuelement à sa version 3 donc POP3). Premièrement il faut se connecter sur son client mail ce qui va interroger 
		le port  110 (et non 25 car c’est un serveur POP et non SMTP).Dès que la communication est établie le serveur envoie les mails reçus 
		sur la machine cliente qui va les télécharger,une fois reçus les mails seront supprimés du serveur : ils seront disponibles via le 
		logiciel de gestion des mails mais pas sur un autre poste.
		</p>
		
        <p>
		- Le protocole IMAP(IMAP = Internet Message Access Protocol, traduit littéralement par : protocole d’accès de message internet, il en
        est actuelement a sa version 4 donc IMAP4)  est très semblable au protocole POP. Premièrement ce protocole n’interroge pas le port 
        110 mais le port 143. De plus, c’est son principal avantage, quand on consulte un mail il est téléchargé par
        le logiciel de messagerie mais il est aussi conservé sur le serveur tand que l’utilisateur ne les a pas supprimés 
        ( sauf que généralement les entreprises qui proposent ce service incluent une sécurité qui supprime les messages au bout d’un
        certain temps mais ce n'est pas défini dans le protocole), associé à cela le protocole permet de trier les messages dans
        des dossiers directement dans le serveur.
		</p>
		
		<div id="centrer"> <img src="schema_mail.jpg" title="Shema recapitulatif du protocole mail"/> </div>
		
        <aside>
		Il existe différents logiciels de client messagerie. On pourra citer :
            <ul>
                <li>- tunderbird</li>
                <li>- microsoft outlook</li>
                <li>- windows mail</li>
            </ul>
		Les logiciels de messagerie ne sont pas à confondre avec les interfaces qui permettent de consulter ses 
        mails via son navigateur. Dans ce système le serveur vous envoie une page comprenant ce que contient le message 
        après avoir comuniqué en internet, grâce au protocole POP ou IMAP, avec le seveur qui gère la réception et 
        l’envoi des mails ( les serveurs POP/IMAP et SMTP comme vus précédemment)
		</aside>
        
         <a href="index.php" class="bouton_rouge"> Retour au menu <img src="flecheblanchedroite.png" alt="Voir le compte-rendu"></a>
		 
        </article>
    </section>
<?php
 require("footer.php");
 footer();
?>