<?php
include "./views/partials/head.php";
?>
<div class="container">   
<h1>Kaikki uutiset</h1>

<?php
if(isset($message)) echo $message;
?>
<td><a class="btn btn-primary" role="button"style="float:left" href="./index.php?action=userindex">Katso käyttäjiä </a></td>
<td><a class="btn btn-primary" role="button"style="float:right" href="./views/addnew.view.php">Lisää uusi uutinen </a></td>
<table class='table'>


<th scope='col' ></th><th scope='col'>Otsikko</th><th scope='col' >sisältö</th><th scope='col'></th></tr></thead><tbody><tr><td></td><td></a> 

<?php
foreach($news as $new) { ?>
<th scope='col'> </th><tbody><tr><td>1</td><td></a> 
<h4><?=$new->otsikko;?></h4></td>
<td><h4><?=$new->sisalto;?></h4></td>
<td><a class ="btn btn-success"href="./index.php?action=edit&uutinenID=<?=$new->uutinenID;?>">Muokkaa</a></td>
<td><a class ="btn btn-danger"href="./index.php?action=delete&uutinenID=<?=$new->uutinenID;?>">poista</a></td>

</div>
    <?php
}
?>
</table>
<?
;

include "./views/partials/end.php";
?>
