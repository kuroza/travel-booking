<?php
   require "header.php";
?>

      <main>
         <!-- Banner -->
         <section class="index-banner">
            <div class="vertical-center">
               <h2>BRUNEI DARUSSALAM<br>TRAVELS AND TOURS</h2>
               <h1>Your One Stop Place to Discover Brunei</h1>
            </div>
         </section>
         <div class="wrapper">
            <!-- Category links -->
            <section class="index-links">
               <!-- City Tours -->
               <?php
               global $db;
            	$query = "SELECT * FROM category WHERE cat_id=1";
            	$result = mysqli_query($db, $query);
            	$r=mysqli_num_rows($result);
            	$data = mysqli_fetch_array($result);
               echo "<a href='city.php?catid=$data[0]'>"; ?>
                  <div id="city-tours" class="index-boxlink-square">
                     <h3><?php echo $data[1]; ?></h3>
                  </div>
               </a>
               <!-- Temburong Tours -->
               <?php
               global $db;
            	$query = "SELECT * FROM category WHERE cat_id=2";
            	$result = mysqli_query($db, $query);
            	$r=mysqli_num_rows($result);
            	$data = mysqli_fetch_array($result);
               echo "<a href='temburong.php?catid=$data[0]'>"; ?>
                  <div id="temburong" class="index-boxlink-rectangle">
                     <h3><?php echo $data[1]; ?></h3>
                  </div>
               </a>
               <!-- Promotions -->
               <?php
               global $db;
            	$query = "SELECT * FROM category WHERE cat_id=3";
            	$result = mysqli_query($db, $query);
            	$r=mysqli_num_rows($result);
            	$data = mysqli_fetch_array($result);
               echo "<a href='promo.php?catid=$data[0]'>"; ?>
                  <div id="promo" class="index-boxlink-square">
                     <h3><?php echo $data[1]; ?></h3>
                  </div>
               </a>
               <!-- Brunei & Beyond -->
               <?php
               global $db;
               $query = "SELECT * FROM category WHERE cat_id=4";
               $result = mysqli_query($db, $query);
               $r=mysqli_num_rows($result);
               $data = mysqli_fetch_array($result);
               //echo "<a href='cases.php?catid=$data[0]'>"; ?>
                  <div id="brunei-beyond" class="index-boxlink-rectangle">
                     <h3><?php echo $data[1]; ?></h3>
                  </div>
               <!-- </a> -->
               <!-- Hotels -->
               <?php
               global $db;
               $query = "SELECT * FROM category WHERE cat_id=5";
               $result = mysqli_query($db, $query);
               $r=mysqli_num_rows($result);
               $data = mysqli_fetch_array($result);
               echo "<a href='hotels.php?catid=$data[0]'>"; ?>
                  <div id="hotels" class="index-boxlink-square">
                     <h3><?php echo $data[1]; ?></h3>
                  </div>
               </a>
               <!-- Dining -->
               <?php
               global $db;
               $query = "SELECT * FROM category WHERE cat_id=6";
               $result = mysqli_query($db, $query);
               $r=mysqli_num_rows($result);
               $data = mysqli_fetch_array($result);
               //echo "<a href='dining.php?catid=$data[0]'>"; ?>
                  <div id="dining" class="index-boxlink-square">
                     <h3><?php echo $data[1]; ?></h3>
                  </div>
               <!-- </a> -->
            </section>
         </div>
      </main>

<?php
   require "footer.php";
?>
