<?php
session_start();

// Delete saved Cookies if the user requests it
if (isset($_POST['delete_cookies'])) {
    
    if($_POST['delete_cookies'] === "true"){
        // Set time to yesterday to expire the cookies
        setcookie('name',"", time()-3600 , '/');
        setcookie('user_name',"", time()-3600 , '/');
        setcookie('birth_date',"", time()-3600 , '/');
 
        echo '<h1>You are logged out</h1>';
    }
}

echo '<h2>Exit page</h2>';

// Button to go back to home page
echo '<button><a href="home.html">Go back to Home page</a></button>';