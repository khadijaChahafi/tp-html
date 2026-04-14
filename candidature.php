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
}
<!DOCTYPE html>
<html>
<head>
    <title>Candidature</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

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