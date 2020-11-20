<?php
require "./database/models/uutinen.php";


function indexcontroller()
{
    $news = getAllnews();
    require "./views/index.view.php";
}

/*
poistaa tietyn uutisen
*/
function deleteEventcontroller()
    {

    if(isset($_GET["uutinenID"])) {
        $uutinenID = $_GET["uutinenID"];
        if(deleteNew($uutinenID)) $message="Uutinen on poistettu";
        else $message="uutinen ei poistunut";
        $news = getAllnews();
        require "./views/index.view.php";
    }
    else{
        echo "kusi";
    }
}
/*
lisää uutisen
*/
function addEventcontroller()
{
    if(isset($_POST["otsikko"],$_POST["sisalto"],$_POST["kirjoittaja"]))  {
        
        $otsikko = ($_POST["otsikko"]);
        $sisalto = ($_POST["sisalto"]);
        $kirjoittaja = ($_POST["kirjoittaja"]);


        $data = array($otsikko,$sisalto, $kirjoittaja);

       

        $ok = addnew($data);
    
        if($ok) {
            $message = "Lisäys  onnistui";
            $news = getAllnews(); 
            require "./views/index.view.php";
        }
        else {
            $message = "Lisäys ei onnistu...";
            $news = getAllnews();
            require "./views/addevent.php";
        }
    }
}
/*
 muokkaa uutisen
*/
function editEventcontroller() 
    {
    if(isset($_POST["uutinenID"],$_POST["kirjoittaja"],$_POST["otsikko"],$_POST["sisältö"]))  {
            
        $otsikko = ($_POST["otsikko"]);
        $sisalto = ($_POST["sisalto"]);
        $kirjoittaja = ($_POST["kirjoittaja"]);


        $data = array($otsikko,$sisalto, $kirjoittaja);

    

        $ok = editNew($data);
    
        if(editNew($data)) {
            $message = "muokkaus onnistui";
            $news = getAllnews();
            require "./views/index.view.php";
        }
        else {
            $message = "muokkaus ei onnistu";
            $news = getAllnews();
            require "./views/edit.view.php";
        }
    }
}
function getediteventcontroller()
{
    if(isset($_GET["uutinenID"])) {
        $uutinenID=$_GET["uutinenID"];
        $news = getNewbyid($uutinenID);
        var_dump($news);
        require "./views/edit.view.php";
    } else {
        $message="Ei valittuna pelaajaa";
        $news = getAllnews();
        require "./views/index.view.php";
    }
}

?>