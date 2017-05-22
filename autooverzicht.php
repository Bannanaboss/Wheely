<?php
include('header.php');

include_once('Programma.php');
include_once('Auto.php');

include ('form.php');

$audi1 = 203500;
$audi2 = 36250;
$audi3 = 134478;
$audi4 = 49435;

$mercedes1 = 32225;
$mercedes2 = 110250;
$mercedes3 = 134786;

$ferrari1 = 185960;
$ferrari2 = 275340;

$mini1 = 19970;
$mini2 = 23560;

$ford1 = 49967;
$ford2 = 46755;
$ford3 = 18934;

$bmw1 = 123870;
$bmw2 = 94654;
$bmw3 = 43780;

$ao = new AutoOverzicht();
//Audi
if ($_GET["merk"] == "Audi" || $_GET["merk"] == "") {
    if ($_GET["minprijs"] <= $audi1 && $_GET["maxprijs"] >= $audi1 || $_GET["minprijs"] == 0 && $_GET["maxprijs"] == 0) {
        $ao->voegAutoToe(new Auto('Audi', 'R8 Coupé', $audi1, 'img/audi r8.jpg'));
    }
    if ($_GET["minprijs"] <= $audi2 && $_GET["maxprijs"] >= $audi2 || $_GET["minprijs"] == 0 && $_GET["maxprijs"] == 0) {
        $ao->voegAutoToe(new Auto('Audi', 'A5 Sportback', $audi2, 'img/audi a5.jpg'));
    }
    if ($_GET["minprijs"] <= $audi3 && $_GET["maxprijs"] >= $audi3 || $_GET["minprijs"] == 0 && $_GET["maxprijs"] == 0) {
        $ao->voegAutoToe(new Auto('Audi', 'RS 6 Avant', $audi3, 'img/audi rs 6.jpg'));
    }
    if ($_GET["minprijs"] <= $audi4 && $_GET["maxprijs"] >= $audi4 || $_GET["minprijs"] == 0 && $_GET["maxprijs"] == 0) {
        $ao->voegAutoToe(new Auto('Audi', 'Q5', $audi4, 'img/audi q5.jpg'));
    }
}

//Mercedes
if ($_GET["merk"] == "Mercedes" || $_GET["merk"] == "") {
    if ($_GET["minprijs"] <= $mercedes1 && $_GET["maxprijs"] >= $mercedes1 || $_GET["minprijs"] == 0 && $_GET["maxprijs"] == 0) {
        $ao->voegAutoToe(new Auto('Mercedes', 'CLA Shooting Brake', $mercedes1, 'img/mercedes cla.jpg'));
    }
    if ($_GET["minprijs"] <= $mercedes2 && $_GET["maxprijs"] >= $mercedes2 || $_GET["minprijs"] == 0 && $_GET["maxprijs"] == 0) {
        $ao->voegAutoToe(new Auto('Mercedes', 'GLS', $mercedes2, 'img/mercedes gls.jpg'));
    }
    if ($_GET["minprijs"] <= $mercedes3 && $_GET["maxprijs"] >= $mercedes3 || $_GET["minprijs"] == 0 && $_GET["maxprijs"] == 0) {
        $ao->voegAutoToe(new Auto('Mercedes', 'AMG GT Coupé', $mercedes3, 'img/mercedes amg gt.jpg'));
    }
}

//Ferrari
if ($_GET["merk"] == "Ferrari" || $_GET["merk"] == "") {
    if ($_GET["minprijs"] <= $ferrari1 && $_GET["maxprijs"] >= $ferrari1 || $_GET["minprijs"] == 0 && $_GET["maxprijs"] == 0) {
        $ao->voegAutoToe(new Auto('Ferrari', '488 Spider', $ferrari1, 'img/ferrari 488 spider.jpg'));
    }
    if ($_GET["minprijs"] <= $ferrari2 && $_GET["maxprijs"] >= $ferrari2 || $_GET["minprijs"] == 0 && $_GET["maxprijs"] == 0) {
        $ao->voegAutoToe(new Auto('Ferrari', 'GTC4Lusso', $ferrari2, 'img/ferrari gtc4lusso.jpg'));
    }
}

//Mini
if ($_GET["merk"] == "Mini" || $_GET["merk"] == "") {
    if ($_GET["minprijs"] <= $mini1 && $_GET["maxprijs"] >= $mini1 || $_GET["minprijs"] == 0 && $_GET["maxprijs"] == 0) {
        $ao->voegAutoToe(new Auto('Mini', 'Cabrio', $mini1, 'img/mini cabrio.jpg'));
    }
    if ($_GET["minprijs"] <= $mini2 && $_GET["maxprijs"] >= $mini2 || $_GET["minprijs"] == 0 && $_GET["maxprijs"] == 0) {
        $ao->voegAutoToe(new Auto('Mini', 'Countryman', $mini2, 'img/mini countryman.jpg'));
    }
}

//Ford
if ($_GET["merk"] == "Ford" || $_GET["merk"] == "") {
    if ($_GET["minprijs"] <= $ford1 && $_GET["maxprijs"] >= $ford1 || $_GET["minprijs"] == 0 && $_GET["maxprijs"] == 0) {
        $ao->voegAutoToe(new Auto('Ford', 'Mustang', $ford1, 'img/ford mustang.jpg'));
    }
    if ($_GET["minprijs"] <= $ford2 && $_GET["maxprijs"] >= $ford2 || $_GET["minprijs"] == 0 && $_GET["maxprijs"] == 0) {
        $ao->voegAutoToe(new Auto('Ford', 'Focus RS', $ford2, 'img/ford focus.jpg'));
    }
    if ($_GET["minprijs"] <= $ford3 && $_GET["maxprijs"] >= $ford3 || $_GET["minprijs"] == 0 && $_GET["maxprijs"] == 0) {
        $ao->voegAutoToe(new Auto('Ford', 'Kuga', $ford3, 'img/ford kuga.jpg'));
    }
}

//BMW
if ($_GET["merk"] == "BMW" || $_GET["merk"] == "") {
    if ($_GET["minprijs"] <= $bmw1 && $_GET["maxprijs"] >= $bmw1 || $_GET["minprijs"] == 0 && $_GET["maxprijs"] == 0) {
        $ao->voegAutoToe(new Auto('BMW', 'i8', $bmw1, 'img/bmw i8.jpg'));
    }
    if ($_GET["minprijs"] <= $bmw2 && $_GET["maxprijs"] >= $bmw2 || $_GET["minprijs"] == 0 && $_GET["maxprijs"] == 0) {
        $ao->voegAutoToe(new Auto('BMW', 'M3 Sedan', $bmw2, 'img/bmw m3.jpg'));
    }
    if ($_GET["minprijs"] <= $bmw3 && $_GET["maxprijs"] >= $bmw3 || $_GET["minprijs"] == 0 && $_GET["maxprijs"] == 0) {
        $ao->voegAutoToe(new Auto('BMW', 'X3', $bmw3, 'img/bmw x3.jpg'));
    }
}


foreach ($ao->getAutoLijst() as $auto) {
    echo '<div class="wheely-img"
        style=\'background-image:url("' . $auto->getUrl() . '");
		background-position:center center;
		background-size:cover;\'>
		<h5>Merk: ' . $auto->getMerk() . '<br>' . 'Prijs: &euro; ' . $auto->getPrijs() . '.00</h5></div>';
}

include('footer.php');

?>