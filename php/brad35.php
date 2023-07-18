<?php
    include 'bradapis.php';

    $myBike = new Bike();
    $myBike->upSpeed();$myBike->upSpeed();$myBike->upSpeed();
    $myBike->upSpeed();
    echo $myBike->getSpeed();
    echo '<hr />';
    $myBike->downSpeed();
    echo $myBike->getSpeed();
    echo '<hr />';
    //$myBike->speed = 6.1;
    //echo $myBike->speed;

    $myScooter = new Scooter();
    $myScooter->upSpeed();$myScooter->upSpeed();$myScooter->upSpeed();
    $myScooter->upSpeed();
    echo $myScooter->getSpeed();





?>