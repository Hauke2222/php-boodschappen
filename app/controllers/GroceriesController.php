<?php 

namespace App\Controllers;
use App\Core\App;
Use Redirect;

class GroceriesController {

    public function home() {
        $boodschappen_from_database = App::get('database')->selectAll('groceries');
        require 'app/views/index.view.php';
    }

    public function create() {
        //return var_dump($_POST);
        App::get('database')->insert('groceries', [
            'name' => $_POST['name'],
            'number' => $_POST['number'],
            'price' => $_POST['price']
        ]);

        header('Location: /');
    }
}

 

?>