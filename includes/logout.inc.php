<?php
//run a session because we need it to start first before we can end it
session_start();
//take all the session variable created when logging in and it deletes the values inside the session variables
session_unset();
//destroy the session currently running
session_destroy();
//Redirect the user back to index.php
header("Location: ../index.php");
