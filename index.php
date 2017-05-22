<?php
    include_once('Radioprogramma.php');
    include_once('Liedje.php');

    $ditprogramma = new RadioProgramma();
    $ditprogramma->setNaam("Radio");
    $ditprogramma->setOmschrijving("De top liedjes (na mijn mening)");

    foreach ($ditprogramma->getProgramma() as $p) {
        echo $p."<br><br>";
    }

    $nieuwliedje = new Liedje("Castle on the hill", "Ed Sheeran");
    $nieuwliedje2 = new Liedje("Shape of you", "Ed Sheeran");
    $nieuwliedje3 = new Liedje("That's what I like", "Bruno Mars");
    $nieuwliedje4 = new Liedje("Galway girl", "Ed Sheeran");
    $nieuwliedje5 = new Liedje("24K Magic", "Bruno Mars");
    $nieuwliedje6 = new Liedje("Symphony", "Clean Bandit");

    $ditprogramma->voegLiedjeToe($nieuwliedje);
    $ditprogramma->voegLiedjeToe($nieuwliedje2);
    $ditprogramma->voegLiedjeToe($nieuwliedje3);
    $ditprogramma->voegLiedjeToe($nieuwliedje4);
    $ditprogramma->voegLiedjeToe($nieuwliedje5);
    $ditprogramma->voegLiedjeToe($nieuwliedje6);

    foreach($ditprogramma->getLiedjes() as $liedje) {
        echo $liedje->getTitel()." - ".$liedje->getArtiest()."<br>";
    }
?>