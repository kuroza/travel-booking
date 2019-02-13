<?php
   require "header.php";
   //include("includes/auth.inc.php"); //include auth.php on all secure pages
?>

      <main>
         <div class="wrapper">
            <?php
               global $db;
               $query = "SELECT * FROM package,category WHERE package.category=category.cat_id and package.packid='" . $_GET["pid"] ."'";
               $result = mysqli_query($db, $query);
               $r=mysqli_num_rows($result);

               $n=0;
               $data = mysqli_fetch_array($result);
            ?>
            <section class="section-default">
               <h2><?php echo $data[1]; ?></h2>
            </section>
            <section class="section-right">
               <form class="enquiry-form" action="book.php" method="post">
                  <h3>Ask for availability</h3>
                  <ul>
                     <li>Package ID: <strong><?php echo $data[0]; ?></strong></li>
                     <li>Package name: <strong><?php echo $data[1]; ?></strong></li>
                     <li>Package prices: <strong>B$<?php echo $data[5]; ?></strong></li>
                  </ul>
                  <input type="text" name="name_enquiry" placeholder="Full name" required>
                  <input type="text" name="mail_enquiry" placeholder="Your e-mail" required>
                  <input type="text" name="phone_enquiry" placeholder="Contact no." required>
                  Date from:
                  <input type="date" name="date_from" min="2018-11-01" max="2050-12-31" value="<?php echo date("Y-m-d"); ?>" required>
                  Date to:
                  <input type="date" name="date_to" min="2018-11-01" max="2050-12-31" value="<?php echo date("Y-m-d"); ?>" required>
                  <input type="text" name="adult_enquiry" placeholder="No. of adults" required>
                  <input type="text" name="child_enquiry" placeholder="No. of children" required>
                  <textarea name="message_enquiry" placeholder="Details"></textarea>
                  <button type="submit" class="btn" name="enquiry_btn">SEND ENQUIRY</button>
               </form>
            </section>
            <section class="section-left">
               <div class="">
                  <img src="gallery/<?php echo $data[8];?>" alt="<?php echo $data[1];?>">
               </div>
               <p><?php echo $data[7];?></p>
            </section>
         </div>
      </main>

<?php
   require "footer.php";
?>
