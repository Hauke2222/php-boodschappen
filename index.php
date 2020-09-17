<?php

require 'functions.php';
require 'core/bootstrap.php';
require 'vendor/autoload.php';

require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());

require 'grocery.php';

?>

