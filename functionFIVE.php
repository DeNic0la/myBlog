<?php


/*
//Set currentTime to now with the correct format
$timestamp = time();
$datum = date("Y-m-d H:i:s", $timestamp);
$currentTime = $datum;

$createtime = $TMP_1[0]['create_date'];

$datetime1 = date_create($createtime);
$datetime2 = date_create($currentTime);
$interval = date_diff($datetime1, $datetime2);



$interval->format('%i');
*/




if (isset($_SESSION['user'])){
    $stmt3 = $pdo->prepare('SELECT * FROM `users` WHERE name = :username');
    $stmt3->execute([':username' => $_SESSION['user']]);
    $TMP_1 = $stmt3->fetchAll();
    $timestamp = time();
    $datum = date("Y-m-d H:i:s", $timestamp);
    $currentTime = $datum;

    $createtime = $TMP_1[0]['create_date'];

    $datetime1 = date_create($createtime);
    $datetime2 = date_create($currentTime);
    $interval = date_diff($datetime1, $datetime2);

    if ($interval->format('%d') > 0 ){
        $_SESSION['five'] = true ;
    }
    else if ($interval->format('%H') > 0 ){
        $_SESSION['five'] = true ;
    }
    else if ($interval->format('%i') > 4 ){
        $_SESSION['five'] = true ;
    }

    



}
else{

}




