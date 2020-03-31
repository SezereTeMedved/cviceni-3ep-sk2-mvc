<h1>Upravit příspěvek</h1>


<?php

$data = json_decode($data, true);

echo "<form action='index.php?c=prispevky&a=upraveno&id=".$data["id"]."' method='POST'>";
echo "<input type='text' name='nadpis' placeholder='Nadpis...' value='".$data["nadpis"]."'><br />";
echo "<textarea name='obsah' placeholder='Obsah příspěvku...' >".$data["obsah"]."</textarea><br />";
echo "<input type='text' name='id' placeholder='brum' style='display: none;' value='$id'><br />";
echo "<input type='submit' value='Upravit příspěvek' />";
echo "</form>"

?>