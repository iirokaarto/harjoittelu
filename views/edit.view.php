<?php
include "./views/partials/head.php";
?>

<h1 style ="text-align: center">muokkaa uutista</h1>

<?php
if(isset($message)) echo $message;
?>
<div class="container">
<table class ="table">
<tr>
<div class = "box" style = "text-align: center"><
<form method ="post">

<label for="kirjoittaja">kirjoittaja</label><br>
<input type ="text" name ="kirjoittaja" required><br>


<label for ="otsikko">otsikko</label><br>
<input type="text" name="otsikko" required><br>

<label for = "kirjoittaja">sisalto</label><br>
<input type="text" name ="sisalto"></label><br>

</select><br><br>

<input type="submit" value="Lisää">
</form>
</table>
</div>
<?php
include "./views/partials/end.php";
?>