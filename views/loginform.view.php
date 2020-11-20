<?php
require "./views/partials/head.php";

if(isset($message)) echo $message;
?>
<div class="container">
<div class="wrapper fadeInDown">
  <div id="formContent">
<div class="fadeIn first">
      <img src="http://danielzawadzki.com/codepen/01/icon.svg"  />
    </div>

<form method="post" action="index.php?action=login">
<label for="kayttajatunnus">Käyttäjätunnus</label><br>
<input type="text" name="kayttajatunnus"class="fadeIn second" required><br>

<label for="salasana">Salasana</label><br>
<input type="password" name="salasana"class="fadeIn third" required><br>
<div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

<input type="submit" value="Kirjaudu" class="fadeIn fourth"><br>
</form>

<?php
require "./views/partials/end.php";
?>