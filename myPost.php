
<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.11.6, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/mybloglogo-310x191.png" type="image/x-icon">
  <meta name="description" content="Hier ist ein Post des Blogs myBlog">
  
  <title>myPost</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-rIyq8prT5i" once="menu" id="menu1-v">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.php">
                         <img src="assets/images/mybloglogo-310x191.png" alt="myBlogLogo" title="Home" style="height: 6.7rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="https://mobirise.com"></a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="myBlog.php">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>myBlog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="page2.php">
                        <span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>myAbout &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</a>
                </li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="myLogin.php">
                    
                    Anmelden</a></div>
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.info/s">TEST</a></section><section class="mbr-section content4 cid-rIytqJB91J" id="content4-w">

<?php
    require 'dbgetpost.php';

    /* Variablen dekleration
    $CreateDate = Der Erstellzeitpunkt diese Posts
    $AutorOfPost = Der Ersteller des Posts
    $PostTitel = Titel des Posts
    $PostInhalt = Inhalt des Posts
    $picture = bild URL wenn kein = kein bild vorhanden

*/


?>

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2"><?= $PostTitel ?></h2>
                
                
            </div>

            
        </div>
       
    </div>
</section>

<?php 

if ($picture !== 'kein'){

    ?>

<section class="testimonials3 cid-rIyudH03TW" id="testimonials3-y">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="media-content px-3 align-self-center mbr-white py-2">
                <p class="mbr-text testimonial-text mbr-fonts-style display-7"><span style="font-style: normal;"><?= $PostInhalt ?></span></p>
                <p class="mbr-author-name pt-4 mb-2 mbr-fonts-style display-7"><?= $AutorOfPost ?></p>
                <p class="mbr-author-desc mbr-fonts-style display-7">
                <?= $CreateDate ?></p>
            </div>

            <div class="mbr-figure pl-lg-5" style="width: 105%;">
              <img src="<?= $picture ?>" alt = "Bild des Beitrags">
            </div>
        </div>
    </div>
</section>
<?php 
}
else
{
    ?>

<section class="mbr-section article content1 cid-rIyuQpdVOS" id="content1-z">
    
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 mbr-fonts-style display-7 col-md-8"><p><strong><?= $PostInhalt ?></strong></p><p><br></p><p><strong><?= $AutorOfPost ?></strong></p><p><?= $CreateDate ?></p></div>
        </div>
    </div>
</section>
<?php } ?>

<section class="cid-rIyz56TmMi" id="social-buttons1-15">
    
    

    

    <div class="container">
        <div class="media-container-row">
            <div class="col-md-8 align-center">
                
                <div>
                    <div class="mbr-social-likes" data-counters="false">
                        <span class="btn btn-social facebook mx-2" title="Link auf Facebook teilen">
                            <i class="socicon socicon-facebook"></i>
                        </span>
                        <span class="btn btn-social twitter mx-2" title="Link auf Twitter teilen">
                            <i class="socicon socicon-twitter"></i>
                        </span>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                <form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="P1H2ngZS9AFoOovXnz9DU6DajOgkNZ/yBMgj6/CBIIzCF2prnJe8v9P8lVlaidOwxgJ3C45fLvFJCcZ3nSDc74S/EOYCfGObUMdjRTORywOMUc/PZi8kbR6eBvW8kwAc">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Ihr Kommentar wird Gepostet</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="form-group col" data-for="email">
                            <input type="email" name="email" placeholder="Kommentar" data-form-field="Email" required="required" class="form-control display-7" id="email-form3-16">
                        </div>
                        <div class="col-auto input-group-btn"><button type="submit" class="btn btn-primary display-4">Senden</button></div>
                    </div>
                </form><!---Formbuilder Form--->
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/sociallikes/social-likes.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
</body>
</html>