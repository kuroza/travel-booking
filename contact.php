<?php
   require "header.php";
?>

      <main>
         <div class="wrapper">
            <section class="section-default">
               <h2>Send a mail to us</h2>
               <form class="contact-form" action="contact.php" method="post">
                  <input type="text" name="name" placeholder="Full name" required>
                  <input type="text" name="mail" placeholder="Your e-mail" required>
                  <input type="text" name="subject" placeholder="Subject" required>
                  <textarea name="message" placeholder="Message"></textarea>
                  <button type="submit" class="btn" name="submit">SEND MAIL</button>
               </form>
            </section>
         </div>
      </main>

<?php
   require "footer.php";
?>
