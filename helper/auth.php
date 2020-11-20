<?php 
function isAuthenticated()
{
    if(isset($_SESSION["id"],$_SESSION["ip"]) && $_SESSION["ip"] == $_SERVER["REMOTE_ADDR"]) {
        return TRUE;
    }
    else return FALSE;
}
?>