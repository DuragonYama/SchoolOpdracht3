<?php 
    include "db.php";

    if (isset($_POST['knop'])) {
        $naam = $_POST["Naam"];
        $prijs = $_POST["prijs"];
        $oms = $_POST["Omschrijving"];

        $sql = "INSERT INTO producten (product_naam, prijs_per_stuk, omschrijving) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$naam, $prijs, $oms]);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="Naam" placeholder="Naam" required>
        <input type="number" name="prijs" placeholder="Prijs" required>
        <input type="text" name="Omschrijving" placeholder="Omschrijving" required>
        <input type="submit" name="knop">
    </form>
</body>
</html>