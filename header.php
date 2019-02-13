<?php
   include('functions.php');

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
      <link rel="icon" href="favicon.ico" type="image/x-icon">
      <title>Travel to Brunei Darussalam</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <header>
         <!-- Logo -->
         <a href="index.php" class="header-brand">GLA1VE TRAVEL SDN BHD</a>
         <nav>

            <!-- Menu -->
            <ul>
               <li><a href="categories.php">CATEGORIES</a></li>
               <li><a href="contact.php">CONTACT</a></li>
               <li><a href="adminpanel.php">ADMIN</a></li>
            </ul>

            <!-- Login -->
            <div class="header-login">
               <?php if (isset($_SESSION['user'])) { ?>
                  <form class="login-status" action="includes/logout.inc.php" method="post">
                     <p><strong>You are logged in as <?php echo ucfirst($_SESSION['user']['username']); ?></strong>
                        <small>
         						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
                        </small>
                     </p>
                     <button type="submit" name="logout-submit">Log Out</button>
                     <!-- <a href="index.php?logout='1'" style="color: red;">logout</a> -->
                  </form>
               <?php } else {   ?>
                     <form action="login.php" method="post">
                        <input type="text" name="username" placeholder="Username/E-mail">
                        <input type="password" name="password" placeholder="Password">
                        <button type="submit" name="login_btn">Login</button> <!-- class="btn" -->
                        <a href="signup.php" class="header-signup">Sign Up</a>
                     </form>
                  <?php }
               ?>
            </div>
         </nav>
      </header>
