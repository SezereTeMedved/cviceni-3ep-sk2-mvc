<h1>Upravit příspěvek</h1>


<?php

echo "<form action='index.php?c=prispevky&a=upraveno' method='POST'>";
echo "<input type='text' name='nadpis' placeholder='Nadpis...' value='$nadpis'><br />";
echo "<textarea name='obsah' placeholder='Obsah příspěvku...' ></textarea><br />";
echo "<input type='text' name='id' placeholder='brum' style='display: none;' value='$id'><br />";
echo "<input type='submit' value='Upravit příspěvek' />";
echo "</form>"

?>