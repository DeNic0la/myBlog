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
</section>
*/

if (isset($MessageToUser) === false){
    $MessageToUser = 'Registrieren';
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {




    $username =  addslashes($_POST['name'] ?? '');
    $email = addslashes($_POST['email'] ?? '');
    $password = addslashes($_POST['password'] ?? '');
    $username = htmlentities(trim($username));
    $email = htmlentities(trim($email));
    $password = htmlentities($password);
    $Unique = true;
    
    $Empty_Email = false;
    $Empty_password = false;
    $Empty_Username = false;
    $TMP_U = false;
    $TMP_E = false;
    if ($username === ''){
        //Errormessage Username is Empty
        $Empty_Username = true;
        $Unique = false;
    }
    if ($email === ''){
        //Errormessage Username is Empty
        if ($TMP_7 === 'true'){
            $Empty_Email = true;
        }
        $TMP_7= true;
        $Unique = false;
    }
    if ($password === ''){
        //Errormessage Username is Empty
        $Empty_password = true;
        $Unique = false;
    }



    $stmt = $pdo->prepare('SELECT * FROM `users` WHERE name = :username');
    $stmt->execute([':username' => $username]);
    $TMP_1 = $stmt->fetchAll();

    if (isset($TMP_1[0]['name']) ){
    if ($TMP_1[0]['name'] === "$username" ){
        //Error message E-Mail bereits vorhanden
        $TMP_U = true;
        $Unique = false;

    }}


    $stmt = $pdo->prepare('SELECT * FROM `users` WHERE name = :email');
    $stmt->execute([':email' => $email]);
    $TMP_1 = $stmt->fetchAll();

    if (isset($TMP_1[0]['email']) ){
    if ($TMP_1[0]['email'] === "$email" ){
        //Error Message E-Mail bereits Vorhanden 
        $TMP_E = true;
        $Unique = false;
    }}
    

    if ($Unique){
        $hashword = password_hash($password,PASSWORD_BCRYPT);
        $stmt2 = $pdo->prepare("INSERT INTO `users` (name, email, password, create_date) VALUES( :name , :email, :password, now() ) ");
        $stmt2->execute([':name' => $username, ':email' => $email, ':password' => $hashword]);
        session_start();
        $_SESSION['user'] = "$username";
    }

}




echo'
<section class="header15 cid-rJ6Twl5kng mbr-fullscreen mbr-parallax-background" id="header15-17">

    

    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(7, 59, 76);"></div>

    <div class="container align-right">
        <div class="row">
            <div class="mbr-white col-lg-8 col-md-7 content-container">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    Registrieren</h1>
                <div class="mbr-text pb-3 mbr-fonts-style display-5 conntetn-align-right">';

                if ($TMP_U || $TMP_E||$Unique || $Empty_Username || $Empty_Email || $Empty_password||$UserExists){
                    echo '<div class="container">
                        <div class="row justify-content-center">
                        <div class="alert col-7 ">
                        <ul>
                        ';

                    if ($TMP_U){
                        echo '<li class = "alert Nicola-Margin-Left" id = "Nicola-Red">Name ist Bereits vorhanden</li>';
                    }
                    if ($TMP_E){
                        echo '<li class = "alert Nicola-Margin-Left" id = "Nicola-Red">E-Mail Adresse ist Bereits Vorhanden</li>';
                    }
                    if ($Empty_Email){
                        echo '<li class = "alert Nicola-Margin-Left" id = "Nicola-Red">Geben sie eine E-Mail Adresse an !</li>';
                    }
                    if ($Empty_password){
                        echo '<li class = "alert Nicola-Margin-Left" id = "Nicola-Red">Geben sie ein Passwort an !</li>';
                    }
                    if ($Empty_Username){
                        echo '<li class = "alert Nicola-Margin-Left" id = "Nicola-Red">Geben sie einen Namen an !</li>';
                    }
                    if ($Unique){
                        echo '<li class = "alert Nicola-Margin-Left " id = "Nicola-Green"> Ihr Benutzer wurde erfolgreich Registriert. Sie müssen 5 Minuten Warten bis sie Ihren Ersten beitrag erstellen können, Laden sie die seite in 5 Minuten neu.</li>';
                    }
                    if ($UserExists){
                        echo '<li class = "alert Nicola-Margin-Left " id = "Nicola-Red"> Der von Ihnen angegebene Benutzer existiert noch nicht. Melden sie sich jetzt hier an ! </li>';
                    }
                    echo '
                        </ul>
                        </div>
                        </div>
                        </div>';
                }



                    echo '&nbsp;</div>
            </div>
            <div class="col-lg-4 col-md-5 Nicola-Margin-Top">
                <div class="form-container">
                    <div class="media-container-column" data-form-type="formoid">
                        <!---Formbuilder Form--->
                        <form action="mylogin.php" method="POST" class="mbr-form form-with-styler">
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
                                <div data-for="password" class="col-md-12 form-group ">
                                    <input type="password" name="password" placeholder="Passwort" data-form-field="Phone" class="form-control px-3 display-7" id="phone-header15-17">
                                </div>
                                
                                <div class="col-md-12 input-group-btn"><button type="submit" class="btn btn-secondary btn-form display-4">Registrieren</button></div>
                            </div>
                        </form><!---Formbuilder Form--->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
';