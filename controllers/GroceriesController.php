<?php 

$boodschappen_from_database = $app['database']->selectAll('groceries');

class GroceriesController {

    public function home() {
        require 'views/index.view.php';
    }

    public function create() {
        return var_dump($_POST);
        App::get('database')->insert('groceries', [
            'name' => $_POST['name'],
            'number' => $_POST['number'],
            'price' => $_POST['price']
        ]);

        return redirect('/');
    }
}

 

?>