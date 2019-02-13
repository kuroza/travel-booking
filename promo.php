<?php
   require "header.php";
?>

      <main>
         <section class="cases-links">
            <div class="wrapper">
               <h2>Category</h2>
               <!-- Rent a Vehicle -->
               <?php
               global $db;
               $query = "SELECT * FROM package WHERE packid=13";
               $result = mysqli_query($db, $query);
               $r=mysqli_num_rows($result);
               $data = mysqli_fetch_array($result);
               echo "<a href='bookcar.php?pid=$data[0]'>"; ?>
                  <div id="car" class="index-boxlink-square">
                     <h3><?php echo $data[1]; ?></h3>
                  </div>
               </a>
               <!-- Golfer's Delight -->
               <?php
               global $db;
               $query = "SELECT * FROM package WHERE packid=14";
               $result = mysqli_query($db, $query);
               $r=mysqli_num_rows($result);
               $data = mysqli_fetch_array($result);
               echo "<a href='book.php?pid=$data[0]'>"; ?>
                  <div id="golf" class="index-boxlink-square">
                     <h3><?php echo $data[1]; ?></h3>
                  </div>
               </a>
               <!-- Rent a Bicycle -->
               <?php
               global $db;
               $query = "SELECT * FROM package WHERE packid=15";
               $result = mysqli_query($db, $query);
               $r=mysqli_num_rows($result);
               $data = mysqli_fetch_array($result);
               echo "<a href='book.php?pid=$data[0]'>"; ?>
                  <div id="bike" class="index-boxlink-square">
                     <h3><?php echo $data[1]; ?></h3>
                  </div>
               </a>
            </div>
         </section>
      </main>

<?php
   require "footer.php";
?>
