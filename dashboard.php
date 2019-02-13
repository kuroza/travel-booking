<?php
   require "header.php";
   include("includes/auth.inc.php"); //include auth.php on all secure pages
?>

      <main>
         <div class="wrapper"> <!-- class="wrapper-main" -->
            <section class="section-dashboard">
               <h2>Photo Dashboard</h2>
               <div class='flex-container row'>
                  <?php
                  	// Set a variable with the name of the gallery directory
                  	$galleryDir = 'gallery/';
                  	$cnt = 1;
                  	$photos = array();
                  	// Search the gallery directory for images
                  	foreach(glob("$galleryDir{*.jpg,*.gif,*.png,*.tif,*.jpeg}", GLOB_BRACE) as $photo) {
                  		// Loop this code for each image
                  		// Explode the image name (currently 'gallery/image.jpg') at '/'
                  		$imgName = explode("/", $photo);
                  		// Get the last part of the exploded image name (now 'image.jpg')
                  		$imgName = end($imgName);
                  		// Generate the HTML code to display each image in a grid
                  		$photos[$cnt] = $photo;
                  		echo "<div class='column'>";
                  		echo "<img src='$photo' onclick='openModal();currentSlide($cnt)' class='hover-shadow cursor'><br/>";
                  		echo "</div>";
                  		$cnt++;
                  	}
                  ?>
               </div>

               <div id="myModal" class="modal">
                  <span class="close cursor" onclick="closeModal()">&times;</span>
                  <div class="modal-content">
                     <?php
                     	// Set a variable with the name of the gallery directory
                     	$galleryDir = 'gallery/';
                     	$cnt = 1;
                     	// Search the gallery directory for images
                  		foreach($photos as $photo) {
                  			echo "<div class='mySlides'>";
                  			echo "<div class='numbertext'>$cnt /".count($photos)."</div>";
                  			echo "<img class='myPhoto' src='$photo'>";
                  			echo "</div>";
                  		   $cnt++;
                  		}
                  		echo "<a class='prev' onclick='plusSlides(-1)'>&#10094;</a>";
                  		echo "<a class='next' onclick='plusSlides(1)'>&#10095;</a>";
                     	$cnt = 1;
                  		foreach($photos as $photo){
                  			echo "<div class='column'>";
                  			echo "<img class='demo cursor' src='$photo' onclick='currentSlide($cnt)'>";
                  			echo "</div>";
                  		$cnt++;
                  		}
                     ?>
                  </div>
               </div>
               <script>
                  function openModal() {
                    document.getElementById('myModal').style.display = "block";
                  }

                  function closeModal() {
                    document.getElementById('myModal').style.display = "none";
                  }

                  var slideIndex = 1;
                  showSlides(slideIndex);

                  function plusSlides(n) {
                    showSlides(slideIndex += n);
                  }

                  function currentSlide(n) {
                    showSlides(slideIndex = n);
                  }

                  function showSlides(n) {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    if (n > slides.length) {slideIndex = 1}
                    if (n < 1) {slideIndex = slides.length}
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    slides[slideIndex-1].style.display = "block";
                  }
               </script>
            </section>
         </div>
      </main>

<?php
   require "footer.php";
?>
