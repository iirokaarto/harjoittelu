<?php

require "./database/connection.php";
function getAllnews()
{
    global $pdo;
    $sql = "SELECT * FROM uutinen";
    $stm = $pdo->query($sql); 
    
    $news = $stm->fetchAll(PDO::FETCH_CLASS);
    return $news;
}
/*
hakee id:llä uutisen
*/

function getNewbyid($id)
{
    global $pdo;
    $sql = "SELECT * FROM uutinen where uutinenID = ?";
    $stm = $pdo->prepare($sql); 
    $stm->bindValue(1, $id);
    $stm->execute();

    $news = $stm->fetchAll(PDO::FETCH_CLASS);
    return $news;
}
/*
lisää uutisen
*/
function addnew($data)
{
    global $pdo;
    $sql = "INSERT INTO uutinen(kirjoittaja, otsikko, sisalto) VALUES (?,?,?)";

    $stm = $pdo->prepare($sql);
   
    $ok = $stm->execute($data); //palauttaa true tai false
    return $ok;
}
/*
poista uutinen byid
*/
function deleteNew($id)
{
    global $pdo;
    $sql = "DELETE FROM uutinen WHERE uutinenID = ?";

    $stm = $pdo->prepare($sql);
    $stm->bindValue(1, $id);

    $ok = $stm->execute();
    return $ok;
}

function editNew($data)
{
    global $pdo;
    $sql = "UPDATE uutinen SET kirjoittaja = ?, otsikko = ?, sisalto = ? WHERE uutinenID = ?";

    $stm = $pdo-> prepare($sql);
 

    $ok = $stm->execute($data);
    return $ok;
}


?>