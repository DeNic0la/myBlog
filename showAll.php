<?php
/*
            <div class="card px-3 col-12">
                <div class="card-wrapper media-container-row media-container-row">
                    <div class="card-box">
                        <div class="top-line pb-3">
                            <h4 class="card-title mbr-fonts-style display-5">
                                <a href="Beitrag_11" class="text-black"><strong>Beitrag_11</strong></a></h4>
                            <p class="mbr-text cost mbr-fonts-style m-0 display-5">
                                Creator_11</p>
                        </div>
                        <div class="bottom-line">
                            <p class="mbr-text mbr-fonts-style m-0 b-descr display-7">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, odit?
                            </p>
                        </div>
                    </div>
                </div>
            </div>


    $AutorOfPost = $beitrag[$ID]["created_by"];
    $PostTitel = $beitrag[$ID]["post_titel"];
    $PostInhalt = $beitrag[$ID]["post_inhalt"];
    $picture = $beitrag[$ID]["picture"];
    $PostID = $beitrag[$ID]["id"];



*/
$Preview = substr ($PostInhalt, 0, 100);



while ($ID > '0'){

    $AutorOfPost = $beitrag[$ID]["created_by"];
    $PostTitel = $beitrag[$ID]["post_titel"];
    $PostInhalt = $beitrag[$ID]["post_inhalt"];
    $picture = $beitrag[$ID]["picture"];
    $PostID = $beitrag[$ID]["id"];

    $Preview = substr ($PostInhalt, 0, 100);

echo'            
<div class="card px-3 col-12">
    <div class="card-wrapper media-container-row media-container-row">
        <div class="card-box">
            <div class="top-line pb-3">
                <h4 class="card-title mbr-fonts-style display-5">
                    <a href="myPost.php?post='.$PostID.'" class="text-black"><strong>'.$PostTitel.'</strong></a></h4>
                <p class="mbr-text cost mbr-fonts-style m-0 display-5">
                    '.$AutorOfPost.'</p>
            </div>
            <div class="bottom-line">
                <p class="mbr-text mbr-fonts-style m-0 b-descr display-7">
                   '.$Preview.'
                </p>
            </div>
        </div>
    </div>
</div>';

    $ID--;
}