<?php
   require "header.php";
?>

      <main>
         <section class="cases-links">
            <div class="wrapper">
               <h2>Hotels</h2>
               <!-- The Empire Hotel -->
               <?php
               global $db;
               $query = "SELECT * FROM package WHERE packid=16";
               $result = mysqli_query($db, $query);
               $r=mysqli_num_rows($result);
               $data = mysqli_fetch_array($result);
               echo "<a href='bookhotel.php?pid=$data[0]'>"; ?>
                  <div id="empire" class="index-boxlink-square">
                     <h3><?php echo $data[1]; ?></h3>
                  </div>
               </a>
               <!-- Radisson Hotel -->
               <?php
               global $db;
               $query = "SELECT * FROM package WHERE packid=17";
               $result = mysqli_query($db, $query);
               $r=mysqli_num_rows($result);
               $data = mysqli_fetch_array($result);
               echo "<a href='bookhotel.php?pid=$data[0]'>"; ?>
                  <div id="radisson" class="index-boxlink-square">
                     <h3><?php echo $data[1]; ?></h3>
                  </div>
               </a>
               <!-- Rizqun International Hotel -->
               <?php
               global $db;
               $query = "SELECT * FROM package WHERE packid=18";
               $result = mysqli_query($db, $query);
               $r=mysqli_num_rows($result);
               $data = mysqli_fetch_array($result);
               echo "<a href='bookhotel.php?pid=$data[0]'>"; ?>
                  <div id="rizqun" class="index-boxlink-square">
                     <h3><?php echo $data[1]; ?></h3>
                  </div>
               </a>
               <!-- The Centrepoint Hotel -->
               <?php
               global $db;
               $query = "SELECT * FROM package WHERE packid=19";
               $result = mysqli_query($db, $query);
               $r=mysqli_num_rows($result);
               $data = mysqli_fetch_array($result);
               echo "<a href='bookhotel.php?pid=$data[0]'>"; ?>
                  <div id="centrepoint" class="index-boxlink-square">
                     <h3><?php echo $data[1]; ?></h3>
                  </div>
               </a>
            </div>
         </section>
      </main>

<?php
   require "footer.php";
?>
