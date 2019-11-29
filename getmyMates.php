<?php


$user = 'd041e_gibucher';
$password = '54321_Db!!!';

$pdo = new PDO('mysql:host=10.20.18.122;dbname=d041e_gibucher', $user, $password, [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
]);



/*

            <div class="card col-12 col-md-6 p-3 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/product1.jpg" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-5">
                            Watch Star
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Diese Webseite wurde von Luca erstellt. Luca ist mein nebenstift und arbeitet ebenfalls in der Suva.</p>
                        <!--Btn-->
                        <div class="mbr-section-btn align-left"><a href="https://mobirise.co" class="btn btn-warning-outline display-4">
                                zu Luca</a></div>
                    </div>
                </div>
            </div>
*/
$mID = 0;
$stmt = $pdo->query("SELECT * FROM `ipadressen`");
$mate = $stmt->fetchAll();
while ($mID < 9){

    $name = $mate[$mID]['vorname'];
    $IP = $mate[$mID]['Ip'];

    if ($name === 'Luca'){
        $Desc = "Diese Webseite wurde von $name erstellt. $name ist mein nebenstift und arbeitet ebenfalls in der Suva.";
    }
    elseif ($name === 'Urs') {
        $Desc = "Diese Webseite wurde von Unserem BLJ-Coach $name erstellt. PS: Diese Webseite ist Unwichtig.";
    }
    else{
        $Desc = "Diese Webseite wurde von $name erstellt. $name wird mit mir zusammen im Basislehrjahr Ausgebildet.";
    }

    if ($name === 'Nicola'){
        $Desc = "Diese Webseite wurde von mir, $name erstellt. Ich bin Lernender bei der Suva, werde Jedoch im BLJ ausgebildet.";
    }
    
    //if ($name !== 'Nicola'){
    echo'
    <div class="card col-12 col-md-6 p-3 col-lg-4">
        <div class="card-wrapper">
            <div class="card-img">
                <img src="img/web_'.$name.'.png" alt="Bild der Webseite von'.$name.'">
            </div>
            <div class="card-box">
                <h4 class="card-title mbr-fonts-style display-5">
                    '.$name.' - Webseite
                </h4>
                <p class="mbr-text mbr-fonts-style display-7">
                    '.$Desc.'</p>
                <!--Btn-->
                <div class="mbr-section-btn align-left"><a href="http://'.$IP.'" class="btn btn-warning-outline display-4">
                        zu '.$name.'</a></div>
            </div>
        </div>
    </div>
    ';
    //}






    $mID++;
}


/*
$AutorOfPost = $mate[$ID]["created_by"];
$PostTitel = $mate[$ID]["post_titel"];
$PostInhalt = $mate[$ID]["post_inhalt"];
$picture = $mate[$ID]["picture"];
$PostID = $mate[$ID]["id"];



*/