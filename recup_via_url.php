<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>récupérés à partir de l'URL</title>
</head>
<body>
    <h1>Calculer la somme de deux entiers récupérés à partir de l'URL via $_GET</h1>

    <?php
    // Récupération des valeurs des paramètres 'nombre1' et 'nombre2' de l'URL
    $a = $_GET["nombre1"];
    $b = $_GET["nombre2"];

    // Affichage de la somme des deux nombres
    // L'opérateur de concaténation '.' est utilisé pour joindre les chaînes de caractères et les valeurs des variables
    echo "La somme de " . $a . " et " . $b . " est égal à " . ($a + $b);
    ?>

</body>
</html>