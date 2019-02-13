<?php
   require "header.php";
?>

      <main>
         <section class="cases-links">
            <div class="wrapper">
               <h2>Temburong Tours</h2>
               <!-- Temburong Adventure -->
               <?php
               global $db;
            	$query = "SELECT * FROM package WHERE packid=9";
            	$result = mysqli_query($db, $query);
            	$r=mysqli_num_rows($result);
            	$data = mysqli_fetch_array($result);
               echo "<a href='book.php?pid=$data[0]'>"; ?>
                  <div id="adventure" class="index-boxlink-square">
                     <h3><?php echo $data[1]; ?></h3>
                  </div>
               </a>
               <!-- Temburong Experience -->
               <?php
               global $db;
            	$query = "SELECT * FROM package WHERE packid=10";
            	$result = mysqli_query($db, $query);
            	$r=mysqli_num_rows($result);
            	$data = mysqli_fetch_array($result);
               echo "<a href='book.php?pid=$data[0]'>"; ?>
                  <div id="experience" class="index-boxlink-square">
                     <h3><?php echo $data[1]; ?></h3>
                  </div>
               </a>
               <!-- Temburong Highlights -->
               <?php
               global $db;
            	$query = "SELECT * FROM package WHERE packid=11";
            	$result = mysqli_query($db, $query);
            	$r=mysqli_num_rows($result);
            	$data = mysqli_fetch_array($result);
               echo "<a href='book.php?pid=$data[0]'>"; ?>
                  <div id="highlights" class="index-boxlink-square">
                     <h3><?php echo $data[1]; ?></h3>
                  </div>
               </a>
            </div>
         </section>
      </main>

<?php
   require "footer.php";
?>
