<?php

$router->define([
    '' => '/controllers/GroceriesController.php',
    '/groceries' => '/controllers/GroceriesController.php',
    'groceries/create' => 'controllers/GroceriesControllerCreateView.php',
]);


?>