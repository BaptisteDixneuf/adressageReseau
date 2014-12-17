<!-- Ceci est un commentaire
Bienvenue sur le projet d'isn sur l'adressage rÃ©seau

Date de de crÃ©ation du fichier: 
12 Octobre 2012 par LÃ©o

Historique de modifications du fichier (personne,date, les modfications apportées)
- Barreau Léo Création de la page 3 (Partie II)
- Dumez Dorian Modification de la partie 1 et écriture des partie 3 à 5
- Barreau Léo Remodifiction de la partie 1 et ajout d'une nouvelle sous partie
- Barreau Leo Modification partie 1
- Barreau Léo Modification partie 2
-Barreau Léo Modif balise 
-- Baptiste Dixneuf Ajout du spoiler
-->

<?php
 require("entete.php");
 entete();
?><!--Demande d'affichage de l'entete-->
    <section>
        <article>
            <h1>II. Les types d'adresses</h1> <!--Titre de la Partie-->
			
            <h2 id="les_types_de_classes">Les types de classes</h2> <!--Titre de la sous-partie-->
			
	<!--paragraphe principal-->		
<p>
L'adressage IP est réparti en 5 classes, 
désignées par une lettre de l'alphabet, de A à E. 
Ces classes d'adresses sont définies en fonction de 
la taille du réseau (exprimé en nombre d'hôtes
potentiellement connectés), ainsi il y a les réseaux 
de grandes tailles, « classe A ».
 Les réseaux de tailles moyennes utilisent la « classe B ».
 Et enfin pour les réseaux de petites tailles il y a la « classe C ».
 </p>
 
<p>
Et les classes D et E dans tout ça ? La classe D est réservée 
 au multicast* et la classe E pour les expérimentations et les besoins futurs.
 De plus la valeur 127 du premier octet sert, elle pour les adresses de 
 bouclages (nous verrons tous cela plus loin).
 </p> <!--paragraphe-->
 
 <table class="tableau"> <!--Tableau sur les classes-->
    <tr>
        <th> Classe </th>
        <th> Début de plage <br>
           (en valeur décimale) </th>
        <th> Fin de plage <br>
           (en valeur décimale) </th>
        <th> Type de réseaux </th>
    </tr> <!--Titre des colones-->
    <tr>
        <td> A </td>
        <td> 0.0.0.0 </td>
        <td> 127.255.255.255 </td>
        <td> Grand </td>
    </tr> <!--Deuxieme ligne-->
    <tr>
        <td> B </td>
        <td> 128.0.0.0 </td>
        <td> 191.255.255.255 </td>
        <td> Moyen </td>
    </tr> <!--Troizieme ligne-->
    <tr>
        <td> C </td>
        <td> 192.0.0.0 </td>
        <td> 224.255.255.255 </td>
        <td> Petit  </td>
    </tr> <!--Quatrieme ligne-->
    <tr>
        <td> D </td>
        <td> 225.0.0.0 </td>
        <td> 239.255.255.255 </td>
        <td>Multicast</td>
    </tr> <!--cinquieme ligne-->
    <tr>
        <td> E </td>
        <td> 240.0.0.0 </td>
        <td> 255.255.255.255 </td>
        <td>Expérimentation</td>
    </tr> <!--sixieme ligne-->
  </table>
  
        </article>
		
        <aside>
            <p> 
			*Un multicast consiste à délivrer un message à un ensemble de 
                destinataires manifestant un intérêt pour un groupe. 
			</p>
			
        </aside> <!--Info complémentaire : définition-->
		
        <article>
            <p>
			Nous avons vu précédement qu'une IP est constituée d'une partie hôte
                et d'une partie réseau ? Je vous invite à relire la <a href="Page2.php">partie I</a>
            si vous ne l'avez pas comprise, car elle va être nécessaire à  la compréhension de la suite.
			</p>
			
            <p>
			En effet, si l'IP fait partie de la classe A, la partie réseau portera sur le premier octet
                et donc la partie hôte sur les 3 autres octets. Si l'IP fait partie de la classe B, la partie réseau
            portera sur les 2 premiers octets et donc la partie hôte sur les 2 autres.
            Je vous laisse deviner pour la classe C ?
			</p>
			
	<div id="container">
	<a id="hide" href="#show" class="button">Cacher</a><a id="show" href="#container" class="button">Montrer</a>
	
	<p id="content">La partie réseau sur le les 3 premiers octets et la partie hôte sur le dernier.</p>
	
	</div>
			<p>
             Voici ci-dessous
            l'explication sous forme de schémas.
            </p>
<!--les tableau suivant ilustre le nombre de bit pour l'adresse réseau et d'hôte dans les 3 classes-->
<p>Adresse de type A :</p>

 <table>
	<tr>
        <th> 1er octet </th>
		<th> 2eme octet </th>
		<th> 3eme octet </th>
		<th> 4eme octet </th>
	</tr>
	<tr>
		<td class="red" > xxxxxxxx </td>
		<td class="green" colspan="3"><pre>xxxxxxxx     xxxxxxxx       xxxxxxxx</pre></td>
	</tr>
	<tr>
		<td class="red" > Réseau </td>
		<td class="green" colspan="3">Hôte </td>
	</tr>	
 </table>
 
 <br>
 
 <p>Adresse de type B : </p>
 
 <table>
	<tr>
		<th> 1er octet </th>
		<th> 2eme octet </th>
		<th> 3eme octet </th>
		<th> 4eme octet </th>
	</tr>	
	<tr>
		<td class="red" colspan="2">xxxxxxxx xxxxxxxx</td>
		<td class="green" colspan="2"><pre>xxxxxxxx     xxxxxxxx</pre></td>
	</tr>
	<tr>
		<td class="red" colspan="2">Réseau </td>
		<td class="green" colspan="2">Hôte </td>
	</tr>
 </table>
 
 <br>
 
 <p>Adresse de type C : </p>
 
 <table>
	<tr>
		<th> 1er octet </th>
		<th> 2eme octet </th>
		<th> 3eme octet </th>
		<th> 4eme octet </th>
	</tr>
        <tr>
		<td colspan="3" class="red" ><pre>xxxxxxxx   xxxxxxxx    xxxxxxxx</pre> </td>
		<td class="green" > xxxxxxxx </td>
	</tr>
	<tr>
		<td class="red" colspan="3"> Réseau </td>
		<td class="green">Hôte </td>
	</tr>
 </table>

 <p>
	Grâce à des calculs nous pouvons donc savoir le nombre d'hôtes possibles
     sur chaque réseau (pour acceder aux calculs cliquer sur les nombres).
</p>
	<table id="nombre_d_hotes"> <!--tableau résumé des caractéristiques des 3 classes -->
		<tr>
			<th> Classe </th>
			<th> Nombre d'hôtes maximum sur chaque réseau </th>
		</tr>
		<tr>
			<td> A </td>
			<td> <a href="Page4.php#hote_1">16646144</a> </td>
		</tr>
		<tr>
			<td>  B </td>
			<td> <a href="Page4.php#hote_2">65534</a> </td>
		</tr>
		<tr>
			<td> C </td>
			<td> <a href="Page4.php#hote_3">254</a> </td>
		</tr>
	</table>
	
<p>
Par exemple une adresse de valeur décimale 153.47.126.86 
fait partie de la classe B car 128<153<191 l'adresse 
du réseau occupe donc les 2 premiers octets (elle est donc 153.47)
et l'adresse de l'hôte les 2 derniers (elle est donc 126.86).
</p> <!--exemple-->
    </article>	
	
    <article> 
        <h2 id="les_masques_de_sous_réseau">Les masques de sous réseau.</h2>	
		
 <p>
	Nous avons vu dans la partie précédente qu'une adresse IP était composée
    de la partie réseau et de la partie hôte. Nous pouvions les différencier grâce à la classe de l'adresse.
	Mais en fait c'est un peu plus compliqué que ça. Ce sont les masques de sous réseaux qui les différencient.
    Un masque de sous réseau est une suite de 4 octets. Il est inséparable de l'adresse IP. Mais rien ne vaut mieux
	que du concret pour comprendre, voici un exemple :
</p>

<p>
	Soit l'adresse IP 153.47.126.86 qu'on associe au masque de sous-réseau 255.255.0.0 .
	Il est nécessaire de les convertir en binaire pour mieux comprendre :
</p>
	<ol>
	<li>MSR (Masque de sous reseau)= 11111111.11111111.00000000.00000000</li>
	<li>@IP 153.47.126.86 (L'adresse IP 153.47.126.86)= 10011001.00101111.01111110.01010110</li>
	</ol>
	
<p>
Les bits à 1 sont associés à une partie réseau et les bits
    à 0 à une partie hôte(dans le MSR).
</p> 
	<ol>
	<li>MSR 255.255.0.0= <span class="red">11111111.11111111</span>.<span class="green">00000000.00000000</span></li> <!-- Mettre les 1 en rouge; les 0 en vert-->
	<li>153.47.126.86= <span class="red">10011001.00101111</span>.<span class="green">01111110.01010110</span></li>	<!-- Ce qui est associé aux 1 en rouge; ce qui est associé aux 0 en vert-->
	</ol>
	
	<p>
	Sur l'adresse IP : en rouge c'est la partie réseau et en vert la partie hôte. Donc la partie réseau est "153.47" 
	et la partie hôte "126.86"
	Logique vu que c'était une adresse de classe B. Donc si nous gardons ce raisonnement et que 
	nous utilisons ce que nous avons vu juste avant nous pouvons en déduire
	les masques de sous réseaux de chaque classe.
	</p>
	
	<table>
	<tr>
		<th>Classe de l'adresse</th>
		<th>Masque de sous réseau associé</th>
	</tr>
	<tr>
		<td>A</td>
		<td>255.0.0.0</td>
	</tr>
	<tr>
		<td>B</td>
		<td>255.255.0.0</td>
	</tr>
	<tr>
		<td>C</td>
		<td>255.255.255.0</td>
	</tr>
    </table>
	
	
	<p>
	Simple non ? Bon attention ça va se corser un peu. Les masques de sous réseaux nous sont vraiment utiles lorsque
	la séparation se fait en plein milieu d'un octet puisqu'ils vont nous servir à calculer l'adresse de sous réseau de l'adresse IP.
	Je sens que vous mourrez d'envie d'avoir un exemple :
	</p>
	
	<ol>
	<li>Soit une adresse IP : 192.168.42.65 associée au masque de sous réseau : 255.255.240.0</li> 
	<li>Ce qui donne en binaire :</li>
	
	<li>@IP 192.168.42.65 (adresse IP)= <span class="red">11000000.10101000.00101010.0100</span><span class="green">0001</span></li> <!-- Ce qui est associé aux 1 en rouges; et le reste en vert-->
	
	<li>MSR=<span class="red">11111111.11111111.11111111.1111</span><span class="green">0000</span></li> <!--Mettre les 1 en rouge; et les 0 en vert-->
	</ol>
	
	<p>
	Il faut maintenant appliquer un <a id="Et_logique" href="Page4.php#adresse">"ET logique"</a>
	Ce qui nous donne ici l'adresse de sous réseau : 192.168.42.64
	</p>
	
        </article>		
        <article>
		
			<h2 id="les_adresses_réseaux_publiques_et_privées">Les adresses réseaux publiques et privées</h2>
			
<p>
 Nous avons vu précédemment de quoi une adresse réseau était 
constituée mais il faut savoir qu'il en existe de deux sorte : privée et publique.
</p>

<p>
Une adresse publique est une adresse qui définit un hôte relié à internet donc qui 
peut communiquer avec n'importe quel autre hôte relié à internet donc possédant 
lui aussi une adresse publique. Aucune adresse publique ne doit être en doublon
 sur toute la planète pour éviter tout conflit d'information. Une très grande quantité
 d'IP publique est donc nécessaire (et elles sont presque toutes prises).
 </p>
 
 <p>
 Au contraire une adresse privée définit un hôte dans un réseau local. 
 Cet hôte ne pourra donc pas communiquer avec d'autres hôtes ne faisant 
 pas partie de son réseau local : il n'est pas connecté à internet. De la même
 manière qu'une adresse publique, une adresse privée ne doit pas être en doublon 
 mais cette fois ci seulement dans le réseau local car cet hôte ne communiquera pas 
 de toute manière avec l'extérieur. Ce système permet donc une économie d'adresses
 publiques. Ce type d'adresses est utilisée, par exemple, pour définir des imprimantes.
 </p>
        </article>
		
        <article>	
		
        <h2 id="les_adresses_de_broadcast">Les adresses de broadcast</h2>
					
<p>
 Une adresse de broadcast est une adresse spéciale qui permet 
de communiquer des paquets d'information à un groupe entier d'un seul 
coup et non en les communiquant un à un.Ces adresses sont celles de 
l'hôte ayant le numéro le plus grand possible dans le réseau ou sous réseau. 
 En binaire son adresse d'hôte sera uniquement composée de 1.On les obtient 
 en remplacent tous les 0 du masque sous réseau par des 255 et en remplacent
 les numéros correspondants dans l'adresse. Ces adresses sont aussi appelées adresses 
 de diffusion. Ce type d'adresse n'est pas physique mais virtuel, il ne définit pas 
 un hôte mais une fonction, il n'est donc pas utilisable pour définir une machine.
 </p>
 
 <p>
 exemple :
 </p>
 
 <p>
 Soit une adresse de type B : 192.168.0.0, son masque sous réseau sera 
 255.255.0.0 donc son adresse de broadcast sera 192.168.255.255
 </p>
 
 <p>
 Soit une adresse IP : 192.168.2.5, son masque sous réseau est 255.255.255.0
 , l'adresse de diffusion correspondant sera  192.168.2.255
 </p>
 
 <p>
 Soit une adresse de type B : 192.168.2.5 ayant pour masque sous 
 réseau 255.255.255.240 cela s'écrira en binaire 11111111.11111111.11111111.11110000 
 donc si on fait l'inverse cela donne		     00000000.0000000.00000000.00001111 or 1111
 en binaire vaut  15 et  5 s'écrit en binaire 101 donc le dernier bit sera 01011111 soit 95 
 donc l'adresse de broadcast de ce sous réseau sera 192.168.2.95 
 </p>
        </article>
		
        <article>
		
        <h2 id="les_adresses_de_bouclage">Les adresses de bouclage</h2>
							
<p>
 Dans le premier chapitre, nous avons pu remarquer que la valeur 127 
du premier octet de l'adresse n'était utilisable par aucune des classes. Elle 
n'est donc utilisable par aucune société. Cette adresse est dite réservée et 
est nommée adresse de bouclage ou « loopback ». Ce type d'adresses est 
« 127.x.x.x » ou les x peuvent prendre n'importe quelle valeur entre 0 et 255 
(sauf le dernier qui ne peut être égal à 0); la plus utilisée étant 127.0.0.1
</p>

<p>
Cela sert à tester la carte réseau de l'ordinateur ainsi
 que la liaison avec le routeur. Pour cela, on teste le ping 
 de cette adresse dans l'invite de commandes, l'ordinateur va 
 alors envoyer un paquet à la box qui va le lui renvoyer c'est une 
 fonction constante liée à cette adresse réseau. Si le message est
 positif alors tout fonctionne correctement.
 </p>
 
 <br>
	
     <a href="Page5.php" class="bouton_rouge"> Lire la suite <img src="flecheblanchedroite.png" alt="Voir le compte-rendu"></a>
     
        </article>
    </section>
<?php
 require("footer.php");
 footer();
?> <!--Demande d'affichage du pied de page-->