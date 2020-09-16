<?php

/* $router->define([
    '' => './controllers/GroceriesController.php',
    'groceries' => './controllers/GroceriesController.php',
    'groceries/create' => './controllers/GroceriesControllerCreateView.php',
]); */
$router->get('', './controllers/GroceriesController@home');
$router->get('groceries', './controllers/GroceriesController@home');
$router->get('groceries/create', './controllers/GroceriesControllerCreateView@form_page');
$router->post('groceries/add_grocery', './controllers/GroceriesController@create');

?>