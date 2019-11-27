<?php


$idOfPost =  $_GET['post'] ?? '3';

require 'connectDB.php';

/* Variablen dekleration
    $CreateDate = Der Erstellzeitpunkt diese Posts
    $AutorOfPost = Der Ersteller des Posts
    $PostTitel = Titel des Posts
    $PostInhalt = Inhalt des Posts
    $picture = bild URL wenn 'kein' = kein bild vorhanden

*/

$picture = 'kein';


$stmt = $pdo->query("SELECT * FROM `beiträge` where id = $idOfPost");

$beitrag = $stmt->fetchAll();

    $CreateDate = $beitrag[0]["created_at"];
    $AutorOfPost = $beitrag[0]["created_by"];
    $PostTitel = $beitrag[0]["post_titel"];
    $PostInhalt = $beitrag[0]["post_inhalt"];
    $picture = $beitrag[0]["picture"];




