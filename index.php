<!doctype html>
<html lang="en">

<head>

    <?php
    session_start(); //aloittaa istunnon
    //pyynnöt ovat muotoa index.php?action=edit&id=5
    require "./helper/auth.php";
    if (isset($_GET["action"])) $action = $_GET["action"];
    else $action = "index"; //mitä tehdään

    $method = strtolower($_SERVER["REQUEST_METHOD"]); //onko post vai get
    //otetaan kirjastot käyttöön
    require "./controllers/tapahtumacontroller.php";
    require "./controllers/kayttajacontroller.php";

    switch ($action) {

        case "index":
            indexcontroller(); //funktio, joka hakee etusivun tarvitsemat asiat
            break;

        case "userindex":
            userindexcontroller();
            break;

        case "deleteuser":
            if (isAuthenticated()) {
                deleteUsercontroller();
            }
            else userindexcontroller();
        
            
            break;

        case "delete":
            if (isAuthenticated()) {
                deleteEventcontroller();
            } else indexcontroller();
            break;

        case "addevent":
            addEventcontroller();
            break;

        case "adduser":
            addUsercontroller();
            break;

        case "edit":
            geteditEventcontroller();
            break;

        case "logout":
            if (isAuthenticated()) {
                require "./controllers/logoutcontroller.php";
            } else indexcontroller();
            break;

        case "login":
            postcontrollerlogin();


            break;


        case "admin":
            if (isAuthenticated())
                admincontroller();
            else require "./controllers/loginform.view.php";
            break;

        default:
            echo "404";
    }
    ?>

</head>
</body>

</html>