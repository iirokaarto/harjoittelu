<?php
require "./database/connection.php";
if (!function_exists('getAllusers')) {
function getAllusers()
{
    global $pdo;
    $sql = "SELECT käyttäjäID, kayttajatunnus, salasana FROM h14_kayttajat";
    $stm = $pdo->query($sql); 

    $users = $stm->fetchAll(PDO::FETCH_CLASS);
    return $users;
}
}

if (!function_exists('getUserbyname')) {
function getUserbyname($kayttajatunnus)
{
    global $pdo;
    $sql = "SELECT * FROM h14_kayttajat where kayttajatunnus = ?";
    $stm = $pdo->prepare($sql); 
    $stm->bindValue(1, $kayttajatunnus);
    $stm->execute();

    $user = $stm->fetchAll(PDO::FETCH_CLASS);
    return $user;
}
}
function addEvent($data)
{
    global $pdo;
    $sql = "INSERT INTO h14_kayttajat(kayttajatunnus, salasana) VALUES (?,?)";

    $stm = $pdo->prepare($sql);
   
    $ok = $stm->execute($data); //palauttaa true tai false
    return $ok;
}

function deleteUser($käyttäjäid)
{
    global $pdo;
    $sql = "DELETE FROM h14_kayttajat WHERE käyttäjäID = ?";

    $stm = $pdo->prepare($sql);
    $stm->bindValue(1, $käyttäjäid);

    $ok = $stm->execute();
    return $ok;

}
function loginUser($kayttajatunnus,$salasana)
{
    global $pdo;   
    $sql = "SELECT kayttajatunnus,salasana FROM h14_kayttajat WHERE kayttajatunnus = ?";

    $stm = $pdo->prepare($sql);
    $stm->bindValue(1,$kayttajatunnus);
    $stm->execute();

    $user = $stm->fetchAll(PDO::FETCH_CLASS);
    var_dump($user);
    echo $user[0]->salasana;
    if(password_verify($salasana,$user[0]->salasana)) {
        echo "onnistui";
        return TRUE;
    }
    
    else echo "virhe";
    return FALSE;
    
}

function authentication($data)
{
    global $pdo;
    $sql = "UPDATE h14_kayttajat SET etunimi = ?, sukunimi = ?, paikkakunta = ? WHERE id = ?";

    $stm = $pdo->prepare($sql);
    return $stm->execute($data);    
}

?>