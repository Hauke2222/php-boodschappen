<?php

/* $router->define([
    '' => './controllers/GroceriesController.php',
    'groceries' => './controllers/GroceriesController.php',
    'groceries/create' => './controllers/GroceriesControllerCreateView.php',
]); */
$router->get('', './controllers/GroceriesController.php');
$router->get('groceries', './controllers/GroceriesController.php');
$router->get('groceries/create', './controllers/GroceriesControllerCreateView.php');
$router->post('add_grocery', './controllers/GroceriesController@create');

?>