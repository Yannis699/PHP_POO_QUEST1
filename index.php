
  
<?php

require_once 'Bicycle.php';
require_once  'Cars.php';

$bike = new Bicycle('yellow');

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake() . '<br>' . '<br>';


$flandersCar = new Cars('\'Flanders Geo\'', 'purple', 4, 'diesel');

$flandersCar -> setEnergyLevel(45);
$flandersCar -> setCurrentSpeed(30);

echo 'Enjoy the moment, car\'s here we go ! It\'s the turn of ' . $flandersCar->getName()  .' ! ' .  $flandersCar-> start() . PHP_EOL;
echo '<br>' . $flandersCar -> forward();
echo '<br>' . $flandersCar -> brake() . '<br>' . '<br>';

$myCar = new Cars('\'Ferrari\'', 'red', 4, 'essence');

$myCar -> setEnergyLevel(100);
$myCar -> setCurrentSpeed(100);

echo 'Enjoy the moment, car\'s here we go ! It\'s the turn of ' . $myCar->getName()  .' ! ' .  $myCar-> start() . PHP_EOL;
echo '<br>' . $myCar -> forward();
echo '<br>' . $myCar -> brake();
