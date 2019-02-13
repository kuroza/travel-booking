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
               <h3>Create a user</h3>
               <form method="post" action="createuser.php">

            		<?php echo display_error(); ?>

            		<div class="input-group">
            			<label>Username</label>
            			<input type="text" name="username" value="<?php echo $username; ?>" required>
            		</div>
            		<div class="input-group">
            			<label>Email</label>
            			<input type="email" name="email" value="<?php echo $email; ?>" required>
            		</div>
            		<div class="input-group">
            			<label>User type</label>
            			<select name="user_type" id="user_type" >
            				<option value=""></option>
            				<option value="admin">Admin</option>
            				<option value="user">User</option>
            			</select>
            		</div>
            		<div class="input-group">
            			<label>Password</label>
            			<input type="password" name="password_1" placeholder="Password">
            		</div>
            		<div class="input-group">
            			<label>Confirm password</label>
                     <input type="password" name="password_2" placeholder="Re-enter password">
            		</div>
            		<div class="input-group">
            			<button type="submit" class="btn" name="register_btn"> + Create user</button>
            		</div>
            	</form>
            </section>
         </div>
      </main>

<?php
   require "footer.php";
?>
