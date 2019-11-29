<?php



/*<section class="mbr-section form3 cid-rIyzkiAtCq" id="form3-16">

    

    

    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="align-center pb-2 mbr-fonts-style display-2">
                    Schreiben auch sie eine Kommentar</h2>
                
            </div>
        </div>

        <div class="row py-2 justify-content-center">
            <div class="col-12 col-lg-6  col-md-8 " data-form-type="formoid">
                <!---Formbuilder Form--->
                <form action="myPost.php" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="P1H2ngZS9AFoOovXnz9DU6DajOgkNZ/yBMgj6/CBIIzCF2prnJe8v9P8lVlaidOwxgJ3C45fLvFJCcZ3nSDc74S/EOYCfGObUMdjRTORywOMUc/PZi8kbR6eBvW8kwAc">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Ihr Kommentar wird Gepostet</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="form-group col" data-for="email">
                            <input type="text" name="comment" placeholder="Kommentar" data-form-field="Email" required="required" class="form-control display-7" id="email-form3-16">
                        </div>
                        <div class="col-auto input-group-btn"><button type="submit" class="btn btn-primary display-4">Senden</button></div>
                    </div>
                </form><!---Formbuilder Form--->
            </div>
        </div>
    </div>
</section>

*/

$NoUser = false;
$CommentIsEmpty = false;
$CommentIsWritten = false;
$ToEarly = false ;
$ToManyCom = false;

if($_SERVER['REQUEST_METHOD'] === 'POST') {


    $CommentWrote = addslashes($_POST['comment'] ?? '');  
    $CommentWrote = htmlentities(trim($CommentWrote));

    $idPost = $idOfPost;

    if ($CommentWrote === ''){
        $CommentIsEmpty = true;

    }
    $CommentCreator = $_SESSION['user'] ?? '';

    if ($CommentCreator === '' ){
        $NoUser = true;

    }
    if ($_SESSION['five'] === false){
        $ToEarly = true ;

    }
    $pdo2 = new PDO('mysql:host=localhost;dbname=blog', $user, $password, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    ]);
    $NumCom = 0;
    $TMP_134 = $pdo2->prepare('SELECT * FROM `comments` WHERE idPost = :idPost AND created_by = :macher');
    $TMP_134->execute([':idPost' => $idOfPost, ':macher' => $CommentCreator]);
    
    foreach($TMP_134->fetchAll() as $T_68) {
        $NumCom++;
    }
    if ($NumCom > 5){
        $ToManyCom = true;
    }


    if ($ToEarly||$NoUser||$CommentIsEmpty ||$ToManyCom){

    }else{
       

        $TMP_65 = $pdo->prepare("INSERT INTO `comments` (idPost, created_by, comment) VALUES(:PostID, :CC, :com) ");
        $TMP_65->execute([':PostID' => $idPost, ':CC' => $CommentCreator, ':com' => $CommentWrote]);
        $CommentIsWritten = true;
        
    }
}
