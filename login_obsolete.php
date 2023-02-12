<?php

// Start a session
session_start();

// Define an array of users and their passwords
$users = [
    'admin' => 'admin123',
    'user1' => 'password1',
    'user2' => 'password2'
];

// If the login form is submitted
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Check if the username and password match a user in the array
  if (isset($users[$username]) && $users[$username] == $password) {
    // If the user exists, store their information in the session and redirect to the index page
    $_SESSION['username'] = $username;
    header('location: index.html');
  } else {
    // If the user doesn't exist, redirect to the loginfail page
    header('location: loginfail.html');
  }
}

?>