<?php
session_start();

// If information is captured in Cookies or Form is submitted, do below
if ((isset($_COOKIE['name']) && isset($_COOKIE['user_name']) && isset($_COOKIE['birth_date'])) || isset($_POST['name'])) {

    // Check if Cookie is not set, if not, set from posted information
    if (! isset($_COOKIE['name'])) {
        setcookie('name', $_POST['name'], time() + (30 * 60 * 60 * 24), '/');
    }
    if (! isset($_COOKIE['user_name'])) {
        setcookie('user_name', $_POST['user_name'], time() + (30 * 60 * 60 * 24), '/');
    }
    if (! isset($_COOKIE['birth_date'])) {
        setcookie('birth_date', $_POST['birth_date'], time() + (30 * 60 * 60 * 24), '/');
    }

    // Declare variables
    $name = $_COOKIE['name'];
    $user_name = $_COOKIE['user_name'];
    $birth_date = $_COOKIE['birth_date'];
    
    // If post is done(Form completed), then display post information
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $user_name = $_POST['user_name'];
        $birth_date = $_POST['birth_date'];
    }
    
    echo '<h1>Data saved in Cookies </h1>';
    echo '<ul>';
    echo '<li>Name: ' . $name . '</li>';
    echo '<li>User Name: ' . $user_name . '</li>';
    echo '<li>Birth Date: ' . $birth_date . '</li>';
    echo '</ul>';

    echo '<form action="logout.php" method="post" name="userForm"> ';
    echo '<label for="delete_cookies"> Delete All Cookies </label>';
    echo '<input type="radio" id="delete_cookies" name="delete_cookies" value = "true"/><br />';

    echo '<label for="keep_cookies_cookies"> Keep All Cookies </label>';
    echo '<input type="radio" id="delete_cookies" name="delete_cookies" value = "false" checked="checked"/><br /><br />';

    echo '<button type="submit">Exit</button>';
    echo '</form>';
} // Else display Error message
else {
    echo '<h1>Error - Not all Cookies are Captured </h1>';
    echo '<button><a href="logout.php">Logout</a></button>';
}