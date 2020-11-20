<?php

include_once "./database/models/kayttaja.php";

if(isset($_SESSION["ip"],$_SESSION["id"]))
{
    session_unset(); //poistaa kaikki muuttujat
    session_destroy();
    require "./views/index.view.php";
}
else require "./views/index.view.php";
?>