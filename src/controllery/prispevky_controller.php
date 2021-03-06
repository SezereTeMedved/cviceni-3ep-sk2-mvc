<?php

class PrispevkyController
{
    public function pridani()
    {
        require_once "viewy/prispevky/pridani.php";
    }

    public function pridat()
    {
        $nadpis = trim($_POST["nadpis"]);
        $obsah = trim($_POST["obsah"]);

        $prispevek = Prispevek::ulozit($nadpis, $obsah);

        if($prispevek)
        {
            $_GET["id"] = $prispevek->id;
            return spustit("prispevky", "detail");
        }
        else
            return spustit("prispevky", "chyba");
    }

    public function detail()
    {
        $id = $_GET["id"];
        $prispevek = Prispevek::nacist($id);

        require_once "viewy/prispevky/detail.php";
    }

    public function chyba()
    {
        require_once "viewy/prispevky/chyba.php";
    }

    public function prehled()
    {
        $prispevky = Prispevek::nacistVsechny();

        require_once "viewy/prispevky/prehled.php";
    }

    public function EDITOVAT()
    {
        $id = $_GET["id"];
        $data = Prispevek::upravitData($id);

        require_once "viewy/prispevky/EDITOVAT.php";
    }
    
    public function upraveno()
    {
        $id = $_GET["id"];
        $nadpis = trim($_POST["nadpis"]);
        $obsah = trim($_POST["obsah"]);

        $prispevky = Prispevek::upravitPrispevek($id, $nadpis, $obsah);
        require_once "viewy/prispevky/upraveno.php";
    }

    public function ODSTRANIT()
    {
        $id = $_GET["id"];
        $prispevky = Prispevek::odstranitPrispevek($id);
        require_once "viewy/prispevky/ODSTRANIT.php";
    }
}
