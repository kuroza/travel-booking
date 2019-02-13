<?php
   require "header.php";
?>

      <main>
         <div class="wrapper">
            <section class="section-default">
               <h2>Sign Up</h2>
               <form class="form-signup" action="signup.php" method="post">
                  <div class="input-group">
               		<label>Username</label>
               		<input type="text" name="username" placeholder="Username">
               	</div>
                  <div class="input-group">
                     <label>Email</label>
                     <input type="email" name="email" placeholder="E-mail">
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
               		<button type="submit" class="btn" name="register_btn">Sign Up</button>
               	</div>
                  <div class="input-group">
                     Already a member? <a href="login.php" class="header-signup">Log in</a>
                  </div>
               </form>
            </section>
         </div>
      </main>

<?php
   require "footer.php";
?>
