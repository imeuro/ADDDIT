<?php

$plain = $_GET['p'];
$hash = password_hash($plain, PASSWORD_DEFAULT);
echo $hash;
echo '<br>';
echo $_SERVER['SERVER_NAME'];
echo '<br>';
echo $_SERVER['HTTP_HOST'];
echo '<br>';
// echo password_hash($plain, PASSWORD_BCRYPT);



if (password_verify($plain, '$2y$10$uU5/TckPOQz8CA2Csk6aTuTMRAj31sUlmpF1CzlZDOxDeSOMaP7Lq')) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
