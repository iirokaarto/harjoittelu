<!doctype html>
<html lang="fi">
<head>
<meta charset ="utf-8">
<title>adminview</title>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>tapahtuminehallinta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type ="text/css" href="./public/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php if(isset($_SESSION["id"],$_SESSION["ip"])) { ?>
    <a href="./index.php?action=logout">Kirjaudu ulos</a><br>
<?php }
?> 
<hr>