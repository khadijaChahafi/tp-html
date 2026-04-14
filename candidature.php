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

<?php if ($_SERVER["REQUEST_METHOD"] === "POST" && empty($erreurs)): ?>

    <h2>Candidature envoyée avec succès ✅</h2>

    <p><strong>Prénom :</strong> <?= $prenom ?></p>
    <p><strong>Nom :</strong> <?= $nom ?></p>
    <p><strong>Email :</strong> <?= $email ?></p>
    <p><strong>Âge :</strong> <?= $age ?></p>
    <p><strong>Filière :</strong> <?= $filiere ?></p>
    <p><strong>Motivation :</strong> <?= $motivation ?></p>

<?php else: ?>

    <form method="POST">

        <input type="text" name="prenom" value="<?= $prenom ?>" placeholder="Prénom">
        <input type="text" name="nom" value="<?= $nom ?>" placeholder="Nom">
        <input type="email" name="email" value="<?= $email ?>" placeholder="Email">
        <input type="number" name="age" value="<?= $age ?>" placeholder="Âge">

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

        <textarea name="motivation"><?= $motivation ?></textarea>

        <button type="submit">Envoyer</button>

    </form>

<?php endif; ?>

</body>
</html>
