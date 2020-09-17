<?php 

class GroceriesController {

    public function home() {
        $boodschappen_from_database = $app['database']->selectAll('groceries');
        require 'views/index.view.php';
    }

    public function create() {
        //return var_dump($_POST);
        $app['database']->insert('groceries', [
            'name' => $_POST['name'],
            'number' => $_POST['number'],
            'price' => $_POST['price']
        ]);

        return redirect('/');
    }
}

 

?>