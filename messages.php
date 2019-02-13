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
               <h3>Messages</h3>
               <?php
                  global $db;
                  $sql = "SELECT * FROM enquiry";
                  $result = mysqli_query($db, $sql);
                  $resultCheck = mysqli_num_rows($result);

                  if($resultCheck > 0) {
                     while($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="message">
                           <p><strong>Enquiry no:</strong> <?php echo $row['enquiryid']; ?></p>
                           <p><strong>Name:</strong> <?php echo $row['name']; ?></p>
                           <p><strong>Email:</strong> <?php echo $row['mail']; ?></p>
                           <p><strong>Date from:</strong> <?php echo $row['dateFrom']; ?></p>
                           <p><strong>Date to:</strong> <?php echo $row['dateTo']; ?></p>
                           <p><strong>Adult:</strong> <?php echo $row['adult']; ?></p>
                           <p><strong>Child:</strong> <?php echo $row['child']; ?></p>
                           <p><strong>Message:</strong> <?php echo $row['message']; ?></p>
                           <a href="quotation.php"><button class="btn" type="button" name="reply">Reply message</button></a>
                        </div>
                        <?php
                     }
                  }
                        ?>
            </section>
         </div>
      </main>

<?php
   require "footer.php";
?>
