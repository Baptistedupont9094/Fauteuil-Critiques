<?php include 'header.php' ?>
<main id="swup" class="transition-fade">

  <content class="reviews">

    <div class="reviews-navbar">

      <div class="reviews-filter">

        <button id="filter-off" type="text" onclick="reviewclick('all')">

          <h3>Afficher tout</h3>
        </button>
      </div>

      <ul class="reviews-logo">

        <li>
          <button id="reviews-button1" class="select-review" data-category="videogame" type="image" style="background-image: url(source/manette.png);"></button>
        </li>

        <li>
          <button id="reviews-button2" class="select-review" data-category="film" type="image" style="background-image: url(source/films.png);"></button>
        </li>

        <li>
          <button id="reviews-button3" class="select-review" data-category="book" type="image" style="background-image: url(source/livre.png);"></button>
        </li>
        <li>
          <button id="reviews-button4" class="select-review" data-category="music" type="image" style="background-image: url(source/guitare2.png);"></button>
        </li>
      </ul>
    </div>

    <div class="reviews-separator"></div>

    <div class="underlay"></div>

    <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <div class="reviews-card">

      <div class="cat-1">

        <h1>Critiques Jeux Vidéos</h1>

        <div class="reviews-category">

          <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->

          <button onclick="toggleOneReview('.review1')" class="iconeReview" style="background-image: url(source/Assassins-Creed-Black-Flag.jpg)"></button><br />
          <div id="card" class="review1 hidden">
            <h3>Assassin’s Creed: Black Flag</h3><br />
            Editeur: Ubisoft<br />
            Date de sortie: 2013<br />
            <p>
              Un monde ouvert énorme et immersif dans les caraibes de l’age d’or de la piraterie. On se régale d’aller
              traquer les templiers sur des iles bien remplies, les combats navals sont bien fait (au détriment du parkour qui forcément est un peu laissé de côté)
              et rafraichissent le gameplay de la série. Niveau scénario c’est par contre le début de la fin pour la série,
              fini l’arc Desmond qu’on suit depuis le premier épisode, la couche «présent» est sans interet et votre personnage
              Edward Kennway est extrèmement balourd et moins charismatique qu’Eric Zemmour. J’y ai quand même passé un très bon moment
              et vous le recommande chaudement.
            </p>
            <button onclick="toggleOneReview('.review1')" class="close-icon">Close</button>
          </div>
          
          <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->
          
          <button onclick="toggleOneReview('.review2')" class="iconeReview" style="background-image: url(source/Final-Fantasy-VII-remake.png)"></button>
          <div id="card" class="review2 hidden">
            <br />
            <h3>Final Fantasy VII: Remake</h3><br />
            Editeur: Square Enix<br />
            Date de sortie: 2020<br />
            <p>
              Un remake de la première partie du jeu culte sorti en 1997 qui se concentre sur la partie Midgar avec un peu de
              réécriture scénaristique par rapport au premier qui permet de creuser les rapports entre les personnages et suciter
              de l’interet pour la suite. Le plaisir de ce balader dans les taudis ou le Wall Market est indéniable, les musiques sont
              superbement réorchestrées et nos héros (qui ont désormais une voix et des expressions faciales) sont toujours aussi attachants.
              Le gameplay est un hybride entre action-RPG et système de tour à tour comme sur l’original. Les déplacements sont assez lents
              et la promesse de liberté dans Midgar n’est pas vraiment tenue tant les niveau sont finalement des suites de couloirs avec
              assez peu d’interraction. Bon jeu quand même pour les nostalgiques qui se termine assez rapidement et nous donne envie de
              voir la suite.
            </p>
            <button onclick="toggleOneReview('.review2')" class="close-icon">Close</button>
          </div>

          <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->

        </div>

      </div>

      <!----------------------------------------------------------------------------------------------------------------------------------------------------------------------->

      <div class="cat-2">

        <h1>Critiques Filmographiques</h1>

        <div class="reviews-category">

          <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->

          <button onclick="toggleOneReview('.review3')" class="iconeReview" style="background-image: url(source/choc_titans.jpg)"></button>
          <div id="card" class="review3 hidden">
            <br />
            <h3>Le Choc des Titans</h3><br />
            Réalisateur: Louis Leterrier<br />
            Date de sortie : 2010<br />
            <p>
              Un peplum sur la mythologie grècque version 21ème siècle (donc quasi intégralement sous fond vert, comme 300)
              avec un casting XXL (Liam Neeson aka Qui-gon Jinn, Ralph Fiennes aka Voldemort, Madds Mikkelsen aka le mec qui cherche
              votre bébé dans Death Stranding et qui pleure du pétrole avec ses yeux..). Scénario assez classique et personnages un peu
              caricaturaux mais dans l’ensemble un bon diversement pour en prendre plein les yeux sans trop se prendre la tête, j’ai bien aimé.
              <p>
                <button onclick="toggleOneReview('.review3')" class="close-icon">Close</button>
                </div>
                
          <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->

          <button onclick="toggleOneReview('.review4')" class="iconeReview" style="background-image: url(source/la_mome.jpeg)"></button>
          <div id="card" class="review4 hidden">
            <h3>La Môme</h3><br />
            Réalisateur: Olivier Dahan<br />
            Date de sortie : 2007<br />
            <p>
              J’ai beaucoup aimé l’ambiance et les décors et Marion Cotillard joue très bien, même si elle est particulièrement
              énervante lors de la scène où elle apprend la mort de Marcel Cerdan et hurle “MARCEEEEEEEEL” dans le hall de chez elle.
              Bon film un peu déprimant.
              <p>
                <button onclick="toggleOneReview('.review4')" class="close-icon">Close</button>
                </div>
                
                <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                
          <button onclick="toggleOneReview('.review5')" class="iconeReview" style="background-image: url(source/lucy.jpg)"></button>
          <div id="card" class="review5 hidden">
            <h3>Lucy</h3><br />
            Réalisateur: Luc Besson<br />
            Date de sortie : 2014<br />
            <p>Peut-être l’un des pires films que j’ai jamais vu. Gros casting, Morgan Freeman joue le type plein de sagesse comme d’habitude,
              Scarlett Johansson est magnifique et le démarrage est plutôt sympa puis à partir de la scène ou elle se réveille en prison et
              commence à découvrir ses pouvoirs tout part en sucette avec des rebondissements toujours plus imporbables et mal amenés.
              Et puis ce final en apothéose (spoiler : à la fin Scarlett devient tellement intelligente qu’elle se transforme en clef USB ).
              Nul de chez nul, à éviter à tout prix.
              <p>
                <button onclick="toggleOneReview('.review5')" class="close-icon">Close</button>
                </div>
                
                <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->

          <button onclick="toggleOneReview('.review6')" class="iconeReview" style="background-image: url(source/de-l-autre-cote-du-periph.jpeg)"></button>
          <div id="card" class="review6 hidden">
            <h3>De l’Autre Coté du Périph</h3><br />
            Réalisateur: David Charhon<br />
            Date de sortie : 2012<br />
            <p>
              C’est l’heure de la comédie policière à la française. Le sympathique Omar Sy, ici dans le role du flic banlieusard donne la réplique à Laurent Laffite lui même dans le
              role du commissaire de la PJ en mode gros con raciste et obsédé qui forcément se fait victimiser quand il débarque… de l’autre coté du périph.
              En résulte une comédie très légère, les vannes sont assez attendues et la dynamique entre les deux héros pas forcément orignale
              (quoi qu’au moins on échape à la très galvaudée dynamique du jeune flic/vieux flic) mais assez sympathique et divertissante.
              <p>
                <button onclick="toggleOneReview('.review6')" class="close-icon">Close</button>
                </div>
                
                <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->

        </div>

      </div>

      <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->

      <div class="cat-3">

        <h1>Critiques Littéraires</h1>

        <div class="reviews-category">

          <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->
          <button onclick="toggleOneReview('.review7')" class="iconeReview" style="background-image: url(source/obelix_compagnie.jpg)"></button>
          <div id="card" class="review7 hidden">
            <h3>Obélix et Compagnie</h3><br />
            Auteur: René Goscinny et Albert Uderzo<br />
            Date de sortie: 1976<br />
            <p>
              Cesar fait appel à un jeune romain sorti d’une grande école pour pervertir le célèbre village gaulois à l’aide de l’or et du travail.
              Il achète les menhir d’Obelix à un prix toujours plus fort et le contraignant à produire toujours plus. Au point que tout le village fini
              par travailler pour un Obelix perverti par l’argent et isolé de ses amis Asterix et Idefix et des plaisir simples de la chasse et la rigolade
              entre copains. Une belle histoire et une jolie morale anti-capitaliste qui en font pour moi undes meilleurs albums de la collection Asterix.
            </p>
            <button onclick="toggleOneReview('.review7')" class="close-icon">Close</button>
          </div>
          
          <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->

          <button onclick="toggleOneReview('.review8')" class="iconeReview" style="background-image: url(source/Décadence.jpg)"></button>
          <div id="card" class="review8 hidden">
            <h3>Décadence</h3><br />
            Auteur: Michel Onfray<br />
            Date de sortie: 2017<br />
            <p>
              Michel Onfray continue sa lente descente aux enfers de la boulimie littéraire
              (plus de 100 livres à son actif) et des polémiques pour plateaux TV entamée depuis la fin de sa colossale et géniale série
              sur Contre-histoire de la Philosophie. Dans ce gros pavé (650 pages) le Michel nous radotte inlassablement ses sujets préférés
              (les mensonges de l’église, les mensonges de l’histoire, le nihilisme moderne, la « montée » de l’islam..). En résulte un livre
              largement dispensables pour ceux qui l’ont déjà entendu exprimer son sombre avis sur la question dans les médias
              (où il n’est pourtant « jamais invité »..), préférez-y la Contre-histoire de la philosophie qui reste son seul vrai
              travail de fond sur un sujet passionant.
            </p>
            <button onclick="toggleOneReview('.review8')" class="close-icon">Close</button>
          </div>

          <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->

          <button onclick="toggleOneReview('.review9')" class="iconeReview" style="background-image: url(source/Samarcande.jpg)"></button>
          <div id="card" class="review9 hidden">
            <h3>Samarcande</h3><br />
            Auteur: Amin Maalouf<br />
            Date de sortie: 2017<br />
            <p>
              Un roman historique en deux parties, la première dans la Perse des années 1000 et la seconde au début de siècle dernier. On
              y suit l’histoire de Omar Khayyam, mathématicien et érudit libertaire qui écrit des courtes odes à l’amour au sexe et à l’alcool
              dans son gros manuscrit puis dès siècles plus tard la recherche de ce manuscrit par nos contemporains. Les amateurs d’Assassin’s
              Creed se feront une joie de croiser les nazirites d’Alamut, la “vraie” secte des assassins et Hassan-I-Sabbah (que l’on croise
              dans le premier, c’est le vieux qui nous file des contrats d’assassinat et qui fini par nous trahir, comme tout le monde dans
              les jeux de la franchise) et les autres se régaleront de ce récit de la vieille Perse et de la révolution iranienne, immersion
              garantie.
            </p>
            <button onclick="toggleOneReview('.review9')" class="close-icon">Close</button>
          </div>
          <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->

        </div>

      </div>

      <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->

      <div class="cat-4">

        <h1>Critiques Musicales</h1>
        <div class="reviews-category">

          <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->

          <button onclick="toggleOneReview('.review10')" class="iconeReviewAlbum" style="background-image: url(source/white-fence.jpg)"></button>
          <div id="card" class="review10 hidden">
            <h3>For The Recently Found Innocent</h3><br />
            Auteur: White Fence<br />
            Date de sortie: 2014<br />
            <p>
              Entre deux collaborations avec son ami Ty Seagall, Tim Presley (Darker My Love) continue son projet solo White
              Fence avec un nouveau disque moins lo-fi que les précédents (au revoir le 4 pistes à cassettes, bonjour le vrai studio
              d’enregistrement) mais dans lequel les habitués retrouveront les marqueurs du style Presley: voix légèrement fragile, melodies
              accrocheuses (le single “Sandra”), et arrangements minimalistes et guitares joliment déconstruites. Le disque constitue une entrée
              en matière accessible pour découvrir le personnage et si vous l’aimez je ne peux que vous recommander d’écouter ses autres albums,
              particulierement Is Growing Faith.
            </p>
            <button onclick="toggleOneReview('.review10')" class="close-icon">Close</button>
          </div>

          <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->

          <button onclick="toggleOneReview('.review11')" class="iconeReviewAlbum" style="background-image: url(source/the-harder-they-come.jpg)"></button>
          <div id="card" class="review11 hidden">
            <h3>The Harder They Come</h3><br />
            Auteur: Jimmy Cliff, The Maytals, Desmond Dekker, The Melodians<br />
            Date de sortie: 1972<br />
            <p>
              Bande originale du film jamaicain du même nom (sorti en France sous le titre “Tout, tout de suite”) décrivant le
              quotidien d’un jeune chanteur de reggae (inteprété par Jimmy Cliff en dans le ghetto Trenchtown de Kingston. L’OST est à
              l’image des compils Trojan de la même époque une compilation des artistes à succès du fameux Studio One et tous les titres font
              mouche, on y retrouve aussi le tube Many Rivers To Cross de Jimmy Cliff enregistré deux ans plus tôt. Une belle introduction au
              Rocksteady et au early ska de cette grande époque du raggae.
            </p>
            <button onclick="toggleOneReview('.review11')" class="close-icon">Close</button>
          </div>
          
          <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->

          <button onclick="toggleOneReview('.review12')" class="iconeReviewAlbum" style="background-image: url(source/thdafreak.jpeg)"></button>
          <div id="card" class="review12 hidden">
            <h3>Party Flub</h3><br />
            Auteur: TH da Freak & Friends<br />
            Date de sortie: 2021<br />
            <p>
              Le prolifique bordelais revient avec un album collaboratif incluant lui même, son frère Siz et d’autres artistes du
              collectif Flippin Freaks. On y retrouve le même coolisme naturel et la même esthétique garage axé 90’s que sur ses disques
              précédents mais l’aspect collaboratif du disque en font un disque (ou plutôt une cassette puisque c’est le seul format physique
              de cet album) finalement assez varié au niveau de l’écriture. On y découvre des membres du collectif moins médiatisés et qui gagnent
              largement à être connus (Twingo Reverse ou Pikto). Un de mes disques de rock garage français préférés dont
              le seul vrai défaut est de ne pas dépasser la demi heure de musique.
            </p>
            <button onclick="toggleOneReview('.review12')" class="close-icon">Close</button>
          </div>

          <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->

        </div>

      </div>

      <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    </div>

    <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->
  </content>
</main>
<?php include 'footer.php' ?>