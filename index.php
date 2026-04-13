<?php
$erreurs = [];

$prenom = $nom = $email = $age = $filiere = $motivation = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    
    $prenom = trim($_POST["prenom"] ?? '');
    $nom = trim($_POST["nom"] ?? '');
    $email = trim($_POST["email"] ?? '');
    $age = trim($_POST["age"] ?? '');
    $filiere = trim($_POST["filiere"] ?? '');
    $motivation = trim($_POST["motivation"] ?? '');
 
   
    if (empty($prenom)) $erreurs[] = "Prénom obligatoire";
    if (empty($nom)) $erreurs[] = "Nom obligatoire";

    if (empty($email)) {
        $erreurs[] = "Email obligatoire";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs[] = "Email invalide";
    }

    if (empty($age)) {
        $erreurs[] = "Âge obligatoire";
    } elseif (!is_numeric($age) || $age <= 0) {
        $erreurs[] = "Âge invalide";
    }

    if (empty($filiere)) $erreurs[] = "Filière obligatoire";
    if (empty($motivation)) $erreurs[] = "Motivation obligatoire";

    
    if (empty($erreurs)) {
        echo "<h3 style='color:green;'>Formulaire envoyé avec succès ✅</h3>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>TP Formulaire</title>
</head>
<body>

<h2>Formulaire d'inscription</h2>

<?php
if (!empty($erreurs)) {
    echo "<ul style='color:red;'>";
    foreach ($erreurs as $e) {
        echo "<li>$e</li>";
    }
    echo "</ul>";
}
?>

<form method="POST">

    Prénom : <br>
    <input type="text" name="prenom" value="<?= htmlspecialchars($prenom) ?>"><br><br>

    Nom : <br>
    <input type="text" name="nom" value="<?= htmlspecialchars($nom) ?>"><br><br>

    Email : <br>
    <input type="email" name="email" value="<?= htmlspecialchars($email) ?>"><br><br>

    Âge : <br>
    <input type="number" name="age" value="<?= htmlspecialchars($age) ?>"><br><br>

    Filière : <br>
    <input type="text" name="filiere" value="<?= htmlspecialchars($filiere) ?>"><br><br>

    Motivation : <br>
    <textarea name="motivation"><?= htmlspecialchars($motivation) ?></textarea><br><br>

    <button type="submit">Envoyer</button>

</form>

</body>
</html>