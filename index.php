<?php

include './header.php';

function getGet($key) {
    return isset($_GET[$key]) ? $_GET[$key] : null;
}

$pg = getGet('pg');
if (is_file('view/' . $pg . '.php')) {
    include 'view/' . $pg . '.php';
} else {
    include './view/home.php';
}
include './footer.php';
?>


