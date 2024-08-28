<?php
require "header.php";
?>

<header class="header">
    <div class="row">
        <div class="col-md-12 text-center">
   <a class="logo"><img src="img/LM_.png" alt="logo" style="width:270px;height:320px;"/></a>
   </div>
        <div class="col-md-12 text-center">
            <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-light btn-lg"><em>Make a Reservation Now!</em></button>
        </div>
    </div>
</header>



<!--about us section-->

<section id="aboutus">

 <div class="container">
   <h3 class="text-center"><br><br>LemonMint</h3>
   <div class="row">
<!--carousel-->
     <div class="col-sm"><br><br>
      	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
         </ol>
        <div class="carousel-inner">
           <div class="carousel-item active">
             <img class="d-block w-100" src="img/4.png" alt="First slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/6.png" alt="Second slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/5.png" alt="Third slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/buddha.jpg" alt="Forth slide">
           </div>
        </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div><br><br>
     </div>

<!--end of carousel-->

     <div class="col-sm">
    	<div class="arranging"><br><hr>
	<h4 class="text-center">Our Story</h4>
	<p><br>LemonMint is the result of a passion for Indian cuisine and a dream to share its flavors with the world. Inspired by the bustling street markets of India, we set out to create a dining experience that captures the essence of this vibrant culinary heritage. Our menu is carefully crafted, blending authentic recipes with a modern twist. From the moment you step inside, you'll be transported to the vibrant streets of India, where every dish tells a story. Join us on this flavorful journey at LemonMint in Morinda, Punjab.<br></p><hr>
	</div>
     </div>
    </div><br>
  </div>
</section>
<!--end of about us section-->

<div class="header2">
</div>

<!----gallery -->
<div class id="gallery"><br>
    <div class="container">
    <h3 class="text-center"><br>Gallery<br><br></h3>
        <div class="d-flex flex-row flex-wrap justify-content-center">
           <div class="d-flex flex-column">
              <img src="img/4.png" class="img-fluid">
              <img src="img/10.png" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
              <img src="img/6.png" class="img-fluid">
              <img src="img/7.png" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
               <img src="img/5.png" class="img-fluid">
               <img src="img/8.png" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
               <img src="img/8.jpeg" class="img-fluid">
               <img src="img/9.png" class="img-fluid">
           </div>
        </div>
    </div>
</div><br><br>
<!----end of gallery -->

<div class="container" id="reservation">
    <h3 class="text-center"><br><br>Reservation<br><br></h3>
    <img  src="img/lemonmint_banner.jpeg" class="img-fluid rounded">
    <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-dark btn-block btn-lg">Make a reservation Now!</button>
        
</div><br><br>

<div class="header2">
</div>

<!-- main page map section-->
<section class="map" id="footer">
    <div class="container">
    <h3 class="text-center"><br><br>Find us!</h3><br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13709.965689167027!2d76.5146513!3d30.7888504!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ffc5a1ce3f911%3A0xae29e4fb4e76df50!2sHotel%20Gillson!5e0!3m2!1sen!2sin!4v1683873360422!5m2!1sen!2sin" width="100%" height="250px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
        <div class="row staff">
            <div class="col">
            <h4><strong>Opening Hours</strong></h4>
                       
                <div class="signup-form">
                    <form action="#footer" method="post">
                        <div class="form-group">
                            <label>Enter Date</label>
                            <input type="date" class="form-control" name="date" placeholder="Date" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="check_schedule" class="btn btn-dark btn-block">Check Opening Time</button>
                        </div>
                    </form>
                    
<?php

if(isset($_POST['check_schedule'])){
      
require 'includes/dbh.inc.php';
            
$date= $_POST['date'];
 
    $sql = "SELECT * FROM schedule WHERE date = '$date'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        while($row = $result->fetch_assoc()) {
            echo"
                <table class='table table-sm table-striped table-dark text-center'>
                   <thead>
                    <tr>
                    <th scope='col'>Date</th>
                    <th scope='col'>Open Time</th>
                    <th scope='col'>Close Time</th>
                    </tr>
                   </thead>
                   <tbody>
                    <tr>
                    <th scope='row'><em>". $date . "</em></th>
                    <td>".$row['open_time']."</td>
                    <td>".$row['close_time']."</td>
                    </tr>
                   </tbody>
                </table>";
                }
            }
        else{
         echo"
                <table class='table table-striped table-dark text-center'>
                   <thead>
                    <tr>
                    <th scope='col'>Date</th>
                    <th scope='col'>Open Time</th>
                    <th scope='col'>Close Time</th>
                    </tr>
                   </thead>
                   <tbody>
                    <tr>
                    <th scope='row'><em>". $date . "</em></th>
                    <td>8:00</td>
                    <td>00:00</td>
                    </tr>
                   </tbody>
                </table>";
            }
         
   //close connection
   mysqli_close($conn);
}
?>
                        
                </div><br>
            </div>

            <div class="col">
            <h4 class="text-right"><strong>Visit Us</strong></h4>
            <p class="text-right">Lemonmint Restaurant<br><i class="fa fa-map-marker"></i>&nbsp; Global enclave, Morinda 140101<br>Punjab, India <br><br>email: Lemonmintmorinda@gmail.com<br>phone: +91 7257932415</p>
            </div>

	</div>
    </div>
</section>
<!--end of main page map section-->


<?php
require "footer.php";
?>