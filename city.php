<?php
   require "header.php";
?>

      <main>
         <section class="cases-links">
            <div class="wrapper">
               <h2>City Tours</h2>
               <!-- Water Village Tour -->
               <?php
               global $db;
            	$query = "SELECT * FROM package WHERE packid=2";
            	$result = mysqli_query($db, $query);
            	$r=mysqli_num_rows($result);
            	$data = mysqli_fetch_array($result);
               echo "<a href='book.php?pid=$data[0]'>"; ?>
                  <div id="water-village" class="index-boxlink-square">
                     <h3><?php echo $data[1]; ?></h3>
                  </div>
               </a>
               <!-- Full Day City Tour -->
               <?php
               global $db;
            	$query = "SELECT * FROM package WHERE packid=3";
            	$result = mysqli_query($db, $query);
            	$r=mysqli_num_rows($result);
            	$data = mysqli_fetch_array($result);
               echo "<a href='book.php?pid=$data[0]'>"; ?>
                  <div id="city" class="index-boxlink-square">
                     <h3><?php echo $data[1]; ?></h3>
                  </div>
               </a>
               <!-- Mangrove River Safari -->
               <?php
               global $db;
            	$query = "SELECT * FROM package WHERE packid=4";
            	$result = mysqli_query($db, $query);
            	$r=mysqli_num_rows($result);
            	$data = mysqli_fetch_array($result);
               echo "<a href='book.php?pid=$data[0]'>"; ?>
                  <div id="mangrove" class="index-boxlink-square">
                     <h3><?php echo $data[1]; ?></h3>
                  </div>
               </a>
               <!-- Brunei by Night -->
               <?php
               global $db;
            	$query = "SELECT * FROM package WHERE packid=5";
            	$result = mysqli_query($db, $query);
            	$r=mysqli_num_rows($result);
            	$data = mysqli_fetch_array($result);
               echo "<a href='book.php?pid=$data[0]'>"; ?>
                  <div class="index-boxlink-square" id="night">
                     <h3><?php echo $data[1]; ?></h3>
                  </div>
               </a>
               <!-- Seria Oil Field Tour -->
               <?php
               global $db;
            	$query = "SELECT * FROM package WHERE packid=6";
            	$result = mysqli_query($db, $query);
            	$r=mysqli_num_rows($result);
            	$data = mysqli_fetch_array($result);
               echo "<a href='book.php?pid=$data[0]'>"; ?>
                  <div id="seria" class="index-boxlink-square">
                     <h3><?php echo $data[1]; ?></h3>
                  </div>
               </a>
            </div>
         </section>
      </main>

<?php
   require "footer.php";
?>
