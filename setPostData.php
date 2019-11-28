<?php


$NoInhalt = false;
$NoTitiel = false;
$Success = false;
$NotVerified = false;


if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $titel = addslashes($_POST['name'] ?? '');  //BlogBeitragsTitel
    $URL = addslashes($_POST['url'] ?? 'kein');
    $inhalt = addslashes($_POST['message'] ?? '');
    $titel = htmlentities(trim($titel));
    $URL = trim($URL);
    $inhalt = htmlentities(trim($inhalt));


            if ($titel === ''){
                //Display Error Message Titel Darf nicht Leer sein
                $NoTitiel = true;
            }
            if ($inhalt === ''){
                //Display Error Message Post muss inhalt haben
                $NoInhalt = true;
            }
            if ($URL === ''){
                $URL = 'kein';
            }

        $CurrentUser = 'Enter Username Here';
        
        require 'connectDB.php';

        if ($NoInhalt || $NoTitiel){
   
        }else if ($_SESSION['five'] === true) {
        $stmt = $pdo->prepare("INSERT INTO `beiträge` (created_at, created_by, post_titel, post_inhalt, picture) VALUES( Now() , :user, :postTitel, :postInhalt, :picture ) ");
        $stmt->execute([':user' => $CurrentUser, ':postTitel' => $titel, ':postInhalt' => $inhalt, ':picture' => $URL]);

        $BeitragsID = $pdo->query('SELECT MAX(id) FROM `beiträge`');
        $Result = $BeitragsID->fetchAll();
        var_dump($Result);
        $ID = $Result[0][0];
        
            
        //Print Succsess Message
        $Success = true;
        $Beitragslink = "myPost.php?post=$ID"; // TMP

        }
        else{
            //Error Message "You have to wait 5 Minutes untill you can Create your first Post"
            $NotVerified = true;
        }
}
