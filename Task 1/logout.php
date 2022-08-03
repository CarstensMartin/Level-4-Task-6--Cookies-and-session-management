<?php

session_start();

// Destroy the session
session_destroy();

echo '<h1>You are logged out</h1>';

// Button to go back to home page
echo '<button><a href="home.html">Go back to Home page</a></button>';
