?>
<div class="container">   
<h1>Kaikki käyttäjät</h1>
<a href="./index.php"> kotisivu</a>
<?php
require "./views/partials/adminhead.php";
if(isset($kayttajatunnus,$_SESSION["ID"])) echo "kirjautuneena $kayttajatunnus";
?>
<table class="table">
<td><a class="btn btn-primary" role="button"style="float:right" href="./views/adduser.php">Lisää uusi käyttäjä </a></td>
<table class='table'>

<th scope='col' ></th><th scope='col'>Käyttäjä</th><th scope='col' >salasana</th><th scope='col'></th></tr></thead><tbody><tr><td></td><td></a> 

<?php
foreach($users as $user) { ?>
<th scope='col'> </th><tbody><tr><td>1</td><td></a> 
<h4><?=$user->kayttajatunnus;?></h4></td>
<td><h4><?=$user->salasana;?></h4></td>
<td><a class ="btn btn-danger"href="./index.php?action=deleteuser&käyttäjäID=<?=$user->käyttäjäID;?>">poista</a></td>

</div>
    <?php
}
?>
</table>
<?
;

include "./views/partials/end.php";
?>