<?php
$erreurs = [];


$prenom = $nom = $email = $age = $filiere = $motivation = "";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $prenom = $_POST["prenom"] ?? "";
    $nom = $_POST["nom"] ?? "";
    $email = $_POST["email"] ?? "";
    $age = $_POST["age"] ?? "";
    $filiere = $_POST["filiere"] ?? "";
    $motivation = $_POST["motivation"] ?? "";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire candidature</title>
</head>

<body>

<form method="POST">

    <!-- Prénom -->
    <input type="text" name="prenom" value="<?= $prenom ?>">

    <!-- Nom -->
    <input type="text" name="nom" value="<?= $nom ?>">

    <!-- Email -->
    <input type="email" name="email" value="<?= $email ?>">

    <!-- Age -->
    <input type="number" name="age" value="<?= $age ?>">

    <!-- Filière -->
    <select name="filiere">
        <option value="">-- Choisir --</option>

        <option value="Informatique" <?= $filiere=="Informatique" ? "selected" : "" ?>>
            Informatique
        </option>

        <option value="Gestion" <?= $filiere=="Gestion" ? "selected" : "" ?>>
            Gestion
        </option>

        <option value="Réseaux" <?= $filiere=="Réseaux" ? "selected" : "" ?>>
            Réseaux
        </option>
    </select>

    <!-- Motivation -->
    <textarea name="motivation"><?= $motivation ?></textarea>

    <button type="submit">Envoyer</button>

</form>

</body>
</html>
