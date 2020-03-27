<h1><?php echo $prispevek->nadpis; ?></h1>
<p><?php echo $prispevek->obsah; ?></p>

<?php
echo "<a href=?c=prispevky&a=ODSTRANIT&id=" . $prispevek->id . ">Odstranit</a>&nbsp";
echo "<a href=?c=prispevky&a=EDITOVAT&id=" . $prispevek->id . "&nadpis=" . $prispevek->nadpis . "&obsah=" . $prispevek->obsah . ">Upravit</a>&nbsp;"
?>