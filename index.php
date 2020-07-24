<?php

require 'functions.php';
require 'bootstrap.php';

require Router::load('routes.php')
    ->direct(Request::uri());

require 'grocery.php';

?>

