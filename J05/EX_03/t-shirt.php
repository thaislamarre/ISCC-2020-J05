<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8">

        <title>T-shirt</title>  

    </head>

    <body>

   <?php
        $nom_produit="T-shirt Simple"; 
        $phrase1="Le nom du produit est $nom_produit";

        $couleur="Blanc";
        $phrase3="Le produit $nom_produit est de couleur $couleur.";

        $prix=10.50;
        $nombre=3;
        $phrase4="Acheter 3 produits coûterait ".($prix*$nombre);

        $quantite=10; 
        $phrase2="Il reste $quantite produit en stock";
        $phrase5="Acheter la totalité des produits disponibles coûterait ".($prix*$quantite);

        $phrase6="Si 3 produits sont vendus, il reste " .($quantite-$nombre). "produits en stock";


        echo "<h3$phrase1</h3>";
        
        echo "<h3$phrase2</h3>";

        echo "<h3$phrase3</h3>";

        echo "<h4$phrase4</h4>";

        echo "<h4$phrase5</h4>";

        echo "<h4$phrase6</h4>";

        $disponible=true;
        if ($disponible=true) {
            $hi="<p>Le produit" .$nom_produit . "est disponible en ligne.</p>";
        }

        echo $hi;

        $disponible=false;
        if ($disponible=false) {
            $hi="Le produit" . $nom_produit . "n'est malheureusement plus disponible.";
        }

        echo $hi;

        if ($quantite >=5)
        {
            echo "Il reste" .$quantite. "produits en magasin.";
        }

        if ($quantite <=5)
        {
            echo "Il ne reste plus que" .$quantite. "produits en magasin.";
        }

        if ($quantite ==1)
        {
            echo "Il ne reste qu'un produit en magasin.";
        }

        if ($quantite ==0)
        {
            echo "Il ne reste plus de produit en magasin.";
        }

    ?>
    </body>

</html>
    
   