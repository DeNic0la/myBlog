<?php


// Post ID Abfragen und entsprechnde Posts aus der Datenbank holen

$com1 = $pdo->prepare('SELECT * FROM `comments` WHERE idPost = :idPost');
$com1->execute([':idPost' => $idOfPost]);


?>
<section class="mbr-section article content11 cid-rIyvAfga96" id="content11-12">
     

     <div class="container">
         <div class="media-container-row">
             <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                 <ul class = "Nicola-Ul">
<?php

foreach($com1->fetchAll() as $comment) {


    $CommentCreator = $comment['created_by'];
    $CommentConntent = $comment['comment'];
    ?>
<div class = "Nicola-Grey">
    <li class = "Nicola-Comment "><strong>
    <?php echo $CommentCreator ; ?>
    </strong>
    <?php echo $CommentConntent ; ?>
    </li>
</div>
    
    
    

<?php
}
?>

</ul>
            </div>
        </div>
    </div>
</section>


<?php

/*
$CreateDate = $beitrag[0]["created_at"];
$AutorOfPost = $beitrag[0]["created_by"];
$PostTitel = $beitrag[0]["post_titel"];
$PostInhalt = $beitrag[0]["post_inhalt"];
$picture = $beitrag[0]["picture"];
*/



/*  
<section class="mbr-section article content11 cid-rIyvAfga96" id="content11-12">
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                <ol>



                    <li><strong>Comment_Creator_Name</strong>-Comment Konnten</li>
                    <li><strong>Comment_Creator_Name</strong> -Comment Konntent</li>
                    <li><strong>Comment_Creator_Name</strong>&nbsp;-Comment Konntent</li>



                </ol>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section form3 cid-rIyzkiAtCq" id="form3-16">
*/