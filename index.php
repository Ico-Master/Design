<!DOCTYPE html>
<html>
<head>
    <title>TP en PHP</title>
</head>
<body>
    <h1>Mon petit TP en PHP</h1>

    <?php
    // Code PHP à insérer ici

    // Exemple d'affichage d'un message
    $message = "Bienvenue sur mon site !";
    echo "<p>" . $message . "</p>";

    // Exemple de boucle
    echo "<ul>";
    for ($i = 1; $i <= 5; $i++) {
        echo "<li>Élément " . $i . "</li>";
    }
    echo "</ul>";

    // Exemple d'utilisation de tableau associatif
    $personne = array(
        "nom" => "Dupont",
        "prénom" => "Jean",
        "âge" => 30,
        "ville" => "Paris"
    );

    echo "<p>Nom: " . $personne['nom'] . "</p>";
    echo "<p>Prénom: " . $personne['prénom'] . "</p>";
    echo "<p>Âge: " . $personne['âge'] . "</p>";
    echo "<p>Ville: " . $personne['ville'] . "</p>";
    ?>

    <!-- Scripts JavaScript -->
    <script>
        // Script 1: Afficher une alerte
        alert("Ceci est un message JavaScript !");
    </script>

    <script>
        // Script 2: Modifier le contenu de la page avec JavaScript
        document.addEventListener("DOMContentLoaded", function() {
            var titre = document.querySelector("h1");
            titre.textContent = "Bienvenue sur Mon Petit TP en PHP";
        });
    </script>

</body>
</html>
