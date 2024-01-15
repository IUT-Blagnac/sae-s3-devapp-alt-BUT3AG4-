
<?php

//include("connexionBaseDeDonnees.php");
// phpinfo();
//echo "<a href='Page2.php'>Page 2</a>";

//echo "<br>";

// DEBUG
//echo "<a href='connexionMQTT.php'>PageDonnes</a>";

// afficherDonnees();

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <div class="navbar">
        <a href="https://www.irit.fr/plateformes/plateforme-locura4iot/">A propos</a>

        <div class="dropdown">
            <button class="dropbtn"> Noeuds
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <label><input type="checkbox" name="Noeud1" id="Noeud1"> Noeud 1</label>
                <label><input type="checkbox" name="Noeud2" id="Noeud2"> Noeud 2</label>
                <label><input type="checkbox" name="Noeud3" id="Noeud3"> Noeud 3</label>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn"> Couches
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <label><input type="checkbox" name="firstLayer" id="firstLayer"> Couche 1 </label>
                <label><input type="checkbox" name="secondLayer" id="secondLayer"> Couche 2 </label>
                <label><input type="checkbox" name="thirdLayer" id="thirdLayer"> Couche 3 </label>
            </div>
        </div>
    </div>

    <!-- Inclure jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Inclure le fichier JavaScript pour AJAX -->
    <script src="scriptRecupererDonnes.js"></script>
    <!-- Inclure le fichier JavaScript pour créer les points -->
    <script src="scriptCreerPoint.js" ></script>
    <!-- Inclure le fichier JavaScript pour les couches -->
    <script src="ajaxRequestToDataPHP.js" ></script>

    <img id="map-image" src="Images/blank.png" class="map-image">
    
    <div id="map"></div>

    <!-- Ajoutez cette balise div à l'endroit où vous souhaitez afficher la boîte de dialogue -->
    <div id="popup" class="popup">
        <div id="popup-content" class="popup-content">
            <!-- Le contenu de la boîte de dialogue sera affiché ici -->
        </div>
    </div>
</body>
</html>