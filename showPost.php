<?php

require 'connectDB.php';


$stmt = $pdo->query("SELECT * FROM `beiträge`");

$beitrag = $stmt->fetchAll();



$BeitragsID = $pdo->query('SELECT MAX(id) FROM `beiträge`');
$Result = $BeitragsID->fetchAll();
var_dump($Result);
$ID = $Result[0][0];

for (i = 0; i > 10; i++;) {

    $AutorOfPost = $beitrag[$ID]["created_by"];
    $PostTitel = $beitrag[$ID]["post_titel"];
    $PostInhalt = $beitrag[$ID]["post_inhalt"];
    $picture = $beitrag[$ID]["picture"];
    $ID--;
}



