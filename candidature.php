<?php
$prenom = '';
$nom = '';
$email = '';
$age = '';
$filiere = '';
$motivation = '';
$erreurs = [];
?>
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $prenom = $_POST['prenom'] ?? '';
    $nom = $_POST['nom'] ?? '';
    $email = $_POST['email'] ?? '';
    $age = $_POST['age'] ?? '';
    $filiere = $_POST['filiere'] ?? '';
    $motivation = $_POST['motivation'] ?? '';

    if (empty($prenom)) $erreurs[] = "Prénom obligatoire";
    if (empty($nom)) $erreurs[] = "Nom obligatoire";
    if (empty($email)) $erreurs[] = "Email obligatoire";
    if ($age < 18) $erreurs[] = "Âge minimum 18";
    if (empty($filiere)) $erreurs[] = "Choisir filière";
    if (empty($motivation)) $erreurs[] = "Motivation obligatoire";
    if (empty($_POST['reglement'])) $erreurs[] = "Accepter règlement";
}
<!DOCTYPE html>
<html>
<head>
    <title>Candidature</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php if (!empty($erreurs)): ?>
<ul>
    <?php foreach ($erreurs as $e): ?>
        <li><?= $e ?></li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>
<form action="candidature.php" method="post">

    <label>Prénom</label>
    <input type="text" name="prenom">

    <label>Nom</label>
    <input type="text" name="nom">

    <label>Email</label>
    <input type="email" name="email">

    <label>Âge</label>
    <input type="number" name="age">

    <label>Filière</label>
    <select name="filiere">
        <option value="">-- Choisir --</option>
        <option value="Informatique">Informatique</option>
        <option value="Électronique">Électronique</option>
        <option value="Mécanique">Mécanique</option>
    </select>

    <label>Motivation</label>
    <textarea name="motivation"></textarea>

    <label>
        <input type="checkbox" name="reglement"> Accepter
    </label>

    <button type="submit">Envoyer</button>

</form>

</body>
</html>