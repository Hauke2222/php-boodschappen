<?php 

function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

/**
 * Redirect to a new page.
 *
 * @param  string $path
 */
/* function redirect($path)
{
    header("Location: /{$path}");
} */
?>