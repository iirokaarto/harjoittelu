<?php
/*
tee lisää uutinen sivu
*/
include "../views/partials/head.php";
?>

<h1 style ="text-align: center">Rekisteröidy</h1>

<?php
if(isset($message)) echo $message;
?> 
<div class="cont" style ="text-align: center" >
<table>
<form method ="post" action="../index.php?action=adduser">
<label for="tapahtuma">käyttäjätunnus</label><br>
<input type ="text" name ="kayttajatunnus" required><br>

<label for ="sns">salasana</label><br>
<input type="text" name="salasana" required><br>

</select><br><br>

<input type="submit" value="Lisää käyttäjä">
</form>
</table>
<?php
include "../views/partials/end.php";
?>