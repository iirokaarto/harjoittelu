<?php
require "./database/models/kayttaja.php";
require "./helper/helper.php";

if(isset($_POST["salasana"],$_POST["kayttajatunnus"])) {
    $kayttajatunnus = sanit($_POST["kayttajatunnus"]);
    $salasana = sanit($_POST["salasana"]);
    $ok = loginUser($kayttajatunnus,$salasana);
    if($ok) {
        $user = getUserbyname($kayttajatunnus);
        $käyttäjäID = $user[0]->käyttäjäID;
        $ip = $_SERVER["REMOTE_ADDR"];

        $_SESSION["käyttäjäID"] = $käyttäjäID;
        $_SESSION["ip"] = $ip;

      
        require "./views/admin.view.php";
        
    } else {
       
        
        $message ="Käyttäjän salasana ja käyttäjätunnus eivät vastaa toisiaan";
        require "./views/loginform.view.php";
    }
}
else 
{
    $message ="Et lähettänyt tietoja!!";
    require "./views/loginform.view.php";
}
?>