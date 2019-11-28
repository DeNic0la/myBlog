<?php
/*

<section class="header15 cid-rJ6Twl5kng mbr-fullscreen mbr-parallax-background" id="header15-17">

    

    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(7, 59, 76);"></div>

    <div class="container align-right">
        <div class="row">
            <div class="mbr-white col-lg-8 col-md-7 content-container">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    Anmelden/Registrieren</h1>
                <p class="mbr-text pb-3 mbr-fonts-style display-5">
                    Here is Much Place for Error Messages&nbsp;</p>
            </div>
            <div class="col-lg-4 col-md-5">
                <div class="form-container">
                    <div class="media-container-column" data-form-type="formoid">
                        <!---Formbuilder Form--->
                        <form action="login_succsess.ch" method="POST" class="mbr-form form-with-styler">
                            <div class="row">
                                
                                <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                                </div>
                            </div>
                            <div class="dragArea row">
                                <div class="col-md-12 form-group " data-for="name">
                                    <input type="text" name="name" placeholder="Name" data-form-field="Name" required="required" class="form-control px-3 display-7" id="name-header15-17">
                                </div>
                                <div class="col-md-12 form-group " data-for="email">
                                    <input type="email" name="email" placeholder="Email" data-form-field="Email" required="required" class="form-control px-3 display-7" id="email-header15-17">
                                </div>
                                <div data-for="phone" class="col-md-12 form-group ">
                                    <input type="tel" name="phone" placeholder="Passwort" data-form-field="Phone" class="form-control px-3 display-7" id="phone-header15-17">
                                </div>
                                
                                <div class="col-md-12 input-group-btn"><button type="submit" class="btn btn-secondary btn-form display-4">Anmelden/Registrieren</button></div>
                            </div>
                        </form><!---Formbuilder Form--->
                    </div>
                </div>
            </div>
        </div>
    </div>
                            <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
                                <a href="#next">
                                    <i class="mbri-down mbr-iconfont"></i>
                                </a>
                            </div>
</section>
*/



if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username =  addslashes($_POST['name'] ?? '');
    $password = addslashes($_POST['password'] ?? '');
    $username = htmlentities(trim($username));
    $password = htmlentities($password);
    


    $stmt = $pdo->prepare('SELECT * FROM `users` WHERE name = :username');
    $stmt->execute([':username' => $username]);
    $TMP_1 = $stmt->fetchAll();

    if ($TMP_1[0]['name'] === "$username" ){
        

    }
    else{
        //isRegister Aufrufen

        require 'isregister.php';
        $MessageToUser = "Der von dir Gewählte Name Existiert nicht. Registriere dich Jetzt hier!";
        die;
    }

}


$TMP_2 = password_hash("Test",PASSWORD_BCRYPT);

$TMP_3 = password_verify("baum",'$2y$10$Fw/q2BDlMxgfsghxAS3p.uXSS8928McMGivlDrZjFgdPc3iyMhFwe');

if ($TMP_3 === true){
    $TMP_2 = "True";
}



echo'
<section class="header15 cid-rJ6Twl5kng mbr-fullscreen mbr-parallax-background" id="header15-17">
    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(7, 59, 76);"></div>

    <div class="container align-right">
        <div class="row">
            <div class="mbr-white col-lg-8 col-md-7 content-container">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    Anmelden</h1>
                <p class="mbr-text pb-3 mbr-fonts-style display-5">
                    Anmelden'.$TMP_2.'&nbsp;</p>
            </div>
            <div class="col-lg-4 col-md-5 Nicola-Margin-Top">
                <div class="form-container">
                    <div class="media-container-column" data-form-type="formoid">
                        <form action="mylgin.php" method="POST" class="mbr-form form-with-styler">
                            <div class="row">
                                
                                <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                                </div>
                            </div>
                            <div class="dragArea row align-left">
                                <div class="col-md-12 form-group " data-for="name">
                                    <input type="text" name="name" placeholder="Name" data-form-field="Name" required="required" class="form-control px-3 display-7" id="name-header15-17">
                                </div>
                                
                                <div data-for="phone" class="col-md-12 form-group ">
                                    <input type="password" name="password" placeholder="Passwort" data-form-field="Phone" class="form-control px-3 display-7" id="phone-header15-17">
                                </div>
                                
                                <div class="col-md-12 input-group-btn"><button type="submit" class="btn btn-secondary btn-form display-4">Anmelden</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
';