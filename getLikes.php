<?php


$l1ke = $pdo->prepare('SELECT * FROM `lks` WHERE idPost = :idPost');
$l1ke->execute([':idPost' => $idOfPost]);

$LikeCount = 0;
$DislikeCount = 0;

foreach($l1ke->fetchAll() as $lke) {
    $CurrentLike = $lke['LD'];

    if ($CurrentLike === 'Like'){
        $LikeCount++;
    }
    if ($CurrentLike === 'Dislike'){
        $DislikeCount++;
    }
}
$AllLike = $LikeCount + $DislikeCount;