<?php
   require "header.php";
   //include("includes/auth.inc.php"); //include auth.php on all secure pages

   if (!isAdmin()) {
   	$_SESSION['msg'] = "You must log in first";
   	header('location: adminlogin.php');
   }

   if (isset($_GET['logout'])) {
   	session_destroy();
   	unset($_SESSION['user']);
   	header("location: login.php");
   }
?>

      <main>
         <div class="wrapper">
            <section class="section-default">
               <h2>Admin Panel</h2>
            </section>
            <section class="section-admin-left">
               <h3>Menu</h3>
               <ol>
                  <li><a href="createuser.php">Add a user</a></li>
                  <li><a href="messages.php">View messages</a></li>
                  <li><a href="quotation.php">Send quotation message</a></li>
               </ol>
            </section>
            <section class="section-admin-right">

            </section>
         </div>
      </main>

<?php
   require "footer.php";
?>
