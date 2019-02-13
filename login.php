<?php
   require "header.php";
?>

      <main>
         <div class="wrapper">
            <section class="section-default">
               <h2>Sign In</h2>
               <form class="form-signin" action="login.php" method="post">
                  <?php echo display_error(); ?>

                  <div class="input-group">
               		<label>Username</label>
               		<input type="text" name="username" placeholder="Username/E-mail">
               	</div>
                  <div class="input-group">
               		<label>Password</label>
               		<input type="password" name="password" placeholder="Password">
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
