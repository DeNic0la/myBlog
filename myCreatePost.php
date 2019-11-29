<?php
session_start();

/*
$NoInhalt = false;
$NoTitiel = false;
*/
    require 'setPostData.php';
    
?>
<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.11.6, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/mybloglogo-310x191.png" type="image/x-icon">
  <meta name="description" content="Hier können Posts erstellt werden,">
  
  <title>myCreatePost</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="nStyle.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
</head>
<body>
  <section class="menu cid-rIyq8prT5i" once="menu" id="menu1-t">

    

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
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="index.php"></a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="myBlog.php">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>myBlog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="myAbout.php">
                        <span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>myAbout &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</a>
                </li></ul>
                                <?php

                                

                                require 'AnmeldeButton.php';

                                ?>
    </nav>
</section>

<section class="engine"><a href="">Something went wrong</a></section><section class="mbr-section form1 cid-rIyqVks4At" id="form1-u">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    Beitrag Erstellen</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                    Hier kannst du einen Beitrag für die Webseite myBlog erstellen</h3>

            </div>
        </div>
    </div>
    <?php
                    if ($NoTitiel || $NoInhalt||$Success||$NotVerified){
                        echo '<div class="container">
                            <div class="row justify-content-center">
                            <div class="alert col-7 ">
                            <ul>
                            ';

                        if ($NoTitiel){
                            echo '<li class = "alert" id = "Nicola-Red">Bitte Geben sie einen Titel an</li>';
                        }
                        if ($NoInhalt){
                            echo '<li class = "alert" id = "Nicola-Red">Ihr Beitrag hat kein Inhalt</li>';
                        }
                        if ($Success){
                            echo '<li class = "alert" id = "Nicola-Green">Ihr Beitrag wurde Erfolgreich erstellt,  <a id = "Nicola-Font-Color"href = "'.$Beitragslink.'">  Zum Beitrag</a> </li>';
                        }
                        if ($NotVerified){
                            echo '<li class = "alert" id = "Nicola-Red">Sie müssen mit einem Mindestens 5 Minuten alten Account angemeldet sein um Beiträge erstellen zu können</li>';
                        }
                        echo '
                            </ul>
                            </div>
                            </div>
                            </div>';
                    }


                ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <!---Formbuilder Form--->
                <form action="myCreatePost.php" method="POST" class="mbr-form form-with-styler" >
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Dein Blogpost wird Hochgeladen.</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md-4  form-group" data-for="name">
                            <label for="name-form1-u" class="form-control-label mbr-fonts-style display-7">Titel</label>
                            <input type="text" name="name" data-form-field="Name"  class="form-control display-7" id="name-form1-u">

                        </div>
                        <div class="col-md-4  form-group" data-for="name">
                            <label for="url" class="form-control-label mbr-fonts-style display-7">Url zu Bild (Optional)</label>
                            <input type="text" name="url" data-form-field="Name" class="form-control display-7" id="url">
                        </div>
                        
                        
                        <div data-for="message" class="col-md-12 form-group">
                            <label for="message-form1-u" class="form-control-label mbr-fonts-style display-7">Text</label>
                            <textarea name="message" data-form-field="Message" class="form-control display-7" id="message-form1-u"></textarea>
                        </div>
                        <div class="col-md-12 input-group-btn align-center"><button type="submit" class="btn btn-primary btn-form display-4">Post Absenden</button></div>
                    </div>
                </form><!---Formbuilder Form--->
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
 
  
  
</body>
</html>