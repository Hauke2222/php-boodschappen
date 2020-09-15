<?php 

class Connection {
    public static function make($config) {
        try {
/*             var_dump($config['connection']);
            exit(); */
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die('Could not connect.'.$e->getMessage());
        }
    }
}


//'mysql:host=localhost:3306;dbname=php_boodschappen', 'root', ''

?>
