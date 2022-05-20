<?php 

return [
    'database' => [
        'name' => 'php_boodschappen',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=localhost:3306', 
        'options' => [
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES   => false,
        ]    
        
        
        
    ]

];
