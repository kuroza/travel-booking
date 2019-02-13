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
               <h3>Send a quotation message</h3>
               <form class="contact-form" action="quotation.php" method="post">
                  <input type="text" name="name" placeholder="Admin name" required>
                  <input type="text" name="mail-to" placeholder="Client's e-mail" required>
                  <input type="text" name="subject" placeholder="Subject" required>
                  <textarea name="message" placeholder="Message" required></textarea>
                  <button type="submit" class="btn" name="quotation_btn">SEND MAIL</button>
               </form>
            </section>
         </div>
      </main>

<?php
   require "footer.php";
?>
