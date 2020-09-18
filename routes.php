<?php

$router->get('', 'GroceriesController@home');
$router->get('groceries', 'GroceriesController@home');
$router->get('groceries/create', 'GroceriesControllerCreateView@form_page');
$router->post('groceries/add_grocery', 'GroceriesController@create');

?>