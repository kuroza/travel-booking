<?php
   require "header.php";
?>

      <main>
         <div class="wrapper">
            <section class="section-default">
               <h2>Sign in as admin</h2>
               <form class="form-signin" action="adminlogin.php" method="post">
                  <?php echo display_error(); ?>

                  <div class="input-group">
               		<label>Username</label>
               		<input type="text" name="username" placeholder="Username/E-mail" required>
               	</div>
                  <div class="input-group">
               		<label>Password</label>
               		<input type="password" name="password" placeholder="Password" required>
               	</div>
               	<div class="input-group">
               		<button type="submit" class="btn" name="login_btn">Login</button>
               	</div>
                  Not yet a member? <a href="signup.php" class="header-signup">Sign Up</a>
               </form>
            </section>
         </div>
      </main>

<?php
   require "footer.php";
?>
