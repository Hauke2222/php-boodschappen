<?php 

$boodschappen = array(
    array("name" => "Brood", "price" => "1.00", "quantity" => 1),
    array("name" => "Broccoli", "price" => "0.99", "quantity" => 1),
    array("name" => "Krentenbollen", "price" => "1.20", "quantity" => 1),
    array("name" => "Noten", "price" => "2.99", "quantity" => 1),
);

$boodschappen_from_database = $app['database']->selectAll('groceries');

require 'views/index.view.php'; 

?>