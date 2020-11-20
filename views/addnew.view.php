<?php
include "../views/partials/head.php";
?>

<h1 style="text-align: center">lisää uusi uutinen</h1>

<?php
if (isset($message)) echo $message;
?>
<table class="table">
    <tr>
        <div class="box" style="text-align: center">
            <form method="post" action="../index.php?action=addevent">
                <label for="kirjoittaja">kirjoittaja</label><br>
                <input type="text" name="kirjoittaja" required><br>


                <label for="otsikko">otsikko</label><br>
                <input type="text" name="otsikko" required><br>

                <label for="kirjoittaja">sisalto</label><br>
                <input type="text" name="sisalto"></label><br>

                </select><br><br>

                <input type="submit" value="Lisää">
            </form>
</table>
<?php
include "../views/partials/end.php";
?>