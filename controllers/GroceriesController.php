<?php 

$boodschappen_from_database = $app['database']->selectAll('groceries');

function create() {
    App::get('database')->insert('groceries', [
        'name' => $_POST['name'],
        'number' => $_POST['number'],
        'price' => $_POST['price']
    ]);

    return redirect('groceries');
}

require 'views/index.view.php'; 

?>