<?php
if (isset($_GET['largeur']) && isset($_GET['hauteur'])) {
    $largeur = $_GET['largeur'];
    $hauteur = $_GET['hauteur'];
    ?>

    <div class="maison">
        <div class="toit" style="border-left: <?= $largeur / 2; ?>px solid transparent; border-right: <?= $largeur / 2; ?>px solid transparent; border-bottom: <?= $largeur / 2; ?>px solid brown;"></div>
        
        <div class="mur" style="height: <?= $hauteur; ?>px;">
            <div class="fenetre" style="height: <?= $hauteur / 3; ?>px; width: <?= $largeur / 3; ?>px;"></div>
            <div class="porte" style="height: <?= $hauteur / 3; ?>px; width: <?= $largeur / 5; ?>px;"></div>
        </div>
    </div>

    <?php
} else {
    echo "Veuillez entrer la largeur et la hauteur de la maison.";
}
?>