<?php
class Auto {
    private $merk;
    private $type;
    private $prijs;
    private $url;

    function __construct($m, $t, $p, $u) {
        $this->merk = $m;
        $this->type = $t;
        $this->prijs = $p;
        $this->url = $u;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function setMerk($merk) {
        $this->merk = $merk;

        return $this;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;

        return $this;
    }

    public function getPrijs() {
        return $this->prijs;
    }

    public function setPrijs($prijs) {
        $this->prijs = $prijs;

        return $this;
    }
}
?>