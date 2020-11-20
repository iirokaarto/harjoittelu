

<?php
require "./database/models/kayttaja.php";
require "./helper/helper.php";

function userindexcontroller()
{
    $users = getAllusers();
    require "./views/kayttaja.view.php";
}
/*
poistaa käyttäjän
*/

function deleteUsercontroller()
    {
    try {
       
    } catch (Exception $e) {
        echo $e;
    }
    
    if(isset($_GET["käyttäjäID"])) {
        $kayttajaID = $_GET["käyttäjäID"];
        $users = getAllusers();
        if(deleteUser($kayttajaID)) $message="käyttäjä on poistettu";
        require "./views/admin.view.php";
        }
        else
        { $message="käyttäjä ei poistunut";
        $users = getAllusers();
        require "./views/kayttaja.view.php";
        }
        
    }

/*
lisää uuden käyttäjän
*/
function addUsercontroller()
{
    if(isset($_POST["kayttajatunnus"],$_POST["salasana"]))  {
        
        $kayttajatunnus = sanit($_POST["kayttajatunnus"]);
        $salasana = sanit($_POST["salasana"]);
        $salasana = password_hash($salasana, PASSWORD_DEFAULT);


        $data = array($kayttajatunnus,$salasana);

       

        $ok = addEvent($data);
    
        if($ok) {
            $message = "Lisäys  onnistui";
            $users = getAllusers();
            require "./views/kayttaja.view.php";
        }
        else {
            $message = "Lisäys ei onnistu...";
            require "./views/addevent.php";
        }
    }
}
function postcontrollerlogin()
{
if(isset($_POST["kayttajatunnus"],$_POST["salasana"])) {
    $kayttajatunnus = sanit($_POST["kayttajatunnus"]);
    $salasana = sanit($_POST["salasana"]);
    var_dump($salasana);
    var_dump($kayttajatunnus);
    $ok = loginUser($kayttajatunnus,$salasana);
    if($ok) {
        $user = getUserbyname($kayttajatunnus);
        $id = $user[0]->käyttäjäID;
        $ip = $_SERVER["REMOTE_ADDR"];

        $_SESSION["id"] = $id;
        $_SESSION["ip"] = $ip;

        $users = getallusers();
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
}




function admincontroller()
{


$users = getAllusers();

require "./views/admin.view.php";
}


?>