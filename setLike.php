<?php

echo "Set Like Php has been summon";
if ($_SESSION['five'] === true){
    echo "Session Five is True";
    $NLD = $_SESSION['Like'] ?? '';
    $CommentCreator = 'Admin';//$_SESSION['user'] ?? '';

$U_1 = $pdo->prepare('SELECT * FROM `lks` WHERE idPost = :idofpost AND created_by = :cUser');
$U_1->execute([':idofpost' => $idOfPost, ':cUser' => $CommentCreator ]);
$NumLike = 0;
var_dump($U_1);
foreach($U_1->fetchAll() as $U_2) {
    
    $NumLike++;
}
if ($NumLike = 1){
    $U_1 = $U_1->fetchAll();
    $DBLD = $U_1['LD'] ?? '';
    
    if ($DBLD === $NLD){
        //Do Nothing because Cant Doublelike
        echo "Already didi That";
    }
    else{
        //Update Database
        echo "Reverse";

    }
}
else {
    //Make Dataslot with Like
    $U_3 = $pdo->prepare("INSERT INTO `likes` (idPost, user, LD) VALUES(:PostID, :Luser, :Likes) ");
    $U_3->execute([':PostID' => $idPost, ':Luser' => $CommentCreator, ':Likes' => $NLD]);
    echo "Like has been set";
}

}
else{
    //ErrorMessage Kein 5 Minuten alter Account
    echo "Account is not old enough";
}