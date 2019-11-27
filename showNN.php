<?php

require 'connectDB.php';


$stmt = $pdo->query("SELECT * FROM `beiträge`");

$beitrag = $stmt->fetchAll();



$BeitragsID = $pdo->query('SELECT MAX(id) FROM `beiträge`');
$Result = $BeitragsID->fetchAll();

$ID = $Result[0][0];

for (i = 0; i > 10; i++;) {
    $AutorOfPost = $beitrag[$ID]["created_by"];
    $PostTitel = $beitrag[$ID]["post_titel"];
    $PostInhalt = $beitrag[$ID]["post_inhalt"];
    $picture = $beitrag[$ID]["picture"];
    $PostID = $beitrag[$ID]["id"];

    $Preview = substr ($PostInhalt, 0, 200);

    
    echo '
    <div class="media-container-row">
    
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <a href="myBlog.php?post='.$PostID.'"><span class="mbr-iconfont mbri-mobile"></span></a>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-7">
                        <a href="myPost.php?post=">'.$PostTitel.'</a></h4>
                    <p class="mbr-text mbr-fonts-style display-7">'.$Preview.'

                </p>
            </div>
        </div>';
        
        $ID--;



}



