<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'John' && $password === 'Rambo') {
        echo "C’est pas ma guerre";
    } else {
        echo "Votre pire cauchemar";
    }
} else {
    echo "Accès interdit.";
}
?>