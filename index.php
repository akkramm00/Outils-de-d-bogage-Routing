<html>
  <head>
    <title>Le routing/ Débogage</title>
  </head>
  <body>
  <h1>Outils de débogage </h1>
    <p>
      Les outils de débogage pour symfony sont des fonctionnalités intégrés dans le framework qui permettent aux développeurs de diagnostiquer et de résoudre les erreurs et les problèmes dans lleur applicationSymfony. Dans cette partie du cours,nous allons nous en imprégner en commençant par présenter brièvement la commande "debug:router" .

      La commande "debug:router" permet de connaitre toutes les routes qui sont dans l'application .
    </p>
    <h2>Méthode</h2>

    $ symfony console debug:router

    grace à la commande "debug:router" nous pourrons visualiser toutes les routesde l'application dans un tableau.

    Ici, il y a 3 routes dans le cadre d'un environnement en développement.
    Nous verrons plus de routes ,notamment celles liées au débogage.


    <h2>Essentiel</h2>

    <p>
      Le routing ou routage est un élément clé des applications web modernes. il permet de définir comment les URL de votre application doivent être mappées aux actions. 
      
      Symfony permet de configurer simplement le routing à l'aide d'un système d'annotations ou de PHP attributes, d'un fichier tiers en YAML ou plus rarement en XML voire en PHP.
      
      De plus , nous avnos vu comment relier le routage a nos controllers. Nous avons également vu qu'il exixteplusieurs paramètres de route et nous avons étudieé les p^lus utilisés : name, path et son paramètre, methods, requirements, schemes, defaults.
      
      Méme s'il est possible de faire cohabiter p^lusieurs méthodes de routing, il est de rigueur pour nous et pour ceux qui reprendront éventuellement le code, de choisir une seule méthode, àsavoir un système d'annotations qui permetde visualiser immédiatement le routing avec la méthode du controller.

      Cependant, les fichiers YAML sont une bonne alternative, même s'ils nécessitent plus de manipulation dans notre code. Pensez à bien organiser vos fichiers si vous travaillez ou opter pouir cette solutionde routing, ainsi qu'à utiliser les outils de débogage qui vous feront gagner un temps précieux.

      
    </p>
  </body>
</html>