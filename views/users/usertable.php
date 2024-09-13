<?php
// Require om de database verbinding $pdo te importeren.
require "../../config/db.conf.php";
require "../../database/connection.php";

// SQL query om alle gebruikers op te halen
$sql = 'SELECT * FROM user';
$stmt = $pdo->query($sql);
$users = $stmt->fetch(PDO::FETCH_ASSOC);

// Zo kun je het resultaat beijken.
// echo "<pre>";
// print_r($users);
// echo "</pre>";

// Maak hier een HTML-pagina aan om alle gebruikers netjes te laten zien.
// Hoe zorg je ervoor dat de gebruikers georderd worden op achternaam?