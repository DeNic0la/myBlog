<?php

require 'connectDB.php';



$stmt = $pdo->query("SELECT * FROM `beiträge`");

$beitrag = $stmt->fetchAll();

//var_dump($beitrag);

$BeitragsID = $pdo->query('SELECT MAX(id) FROM `beiträge`');
$Result = $BeitragsID->fetchAll();

$ID = $Result[0][0];
$ID--;
//echo 'ID: ' . $ID . "<br>";



for ($i = 0; $i < 9; $i++) {


    $AutorOfPost = $beitrag[$ID]["created_by"];
    $PostTitel = $beitrag[$ID]["post_titel"];
    $PostInhalt = $beitrag[$ID]["post_inhalt"];
    $picture = $beitrag[$ID]["picture"];
    $PostID = $beitrag[$ID]["id"];

    if ($picture == 'kein'){
        //Alternativbild
        $img = '';//<span class="mbr-iconfont mbri-mobile"></span></a>';
        $Preview = substr ($PostInhalt, 0, 400);
    }else{
        $img = '<img src="'.$picture.'" alt="Zu Diesem Post wurde kein gültiges bild angegeben" />';
        $Preview = substr ($PostInhalt, 0, 200);
    }


    
    if ($i == 0||$i == 3||$i == 6){
        echo '<div class="container">
            <div class="media-container-row">
        ';
    }
    
    echo '
    
    
            <div class="Nicola-Grey card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <a href="myPost.php?post='.$PostID.'">
                    
                   '.$img.'


                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-7">
                        <a href="myPost.php?post='.$PostID.'">'.$PostTitel.'</a></h4>
                    <p class="mbr-text mbr-fonts-style display-7">'.$Preview.'

                </p>
            </div>
        </div>';

        if ($i == 2||$i == 5||$i == 8){
            echo '</div>
                </div>';
        }
        
        
        $ID--;



}






