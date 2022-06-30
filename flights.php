<?php
include('dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
      <!-- 
    More Templates Visit ==> ProBootstrap.com
    Free Template by ProBootstrap.com under the License Creative Commons 3.0 ==> (probootstrap.com/license)

    IMPORTANT: You can do whatever you want with this template but you need to keep the footer link back to ProBootstrap.com
    -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title> Aja Airlines  &mdash; Flights</title>
		<meta name="description" content="Free Bootstrap 4 Theme by ProBootstrap.com">
		<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">

		<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
    
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    
    <link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/select2.css">
    

    <link rel="stylesheet" href="assets/css/helpers.css">
    <link rel="stylesheet" href="assets/css/style.css">

	</head>
	<body>
  

    <nav class="navbar navbar-expand-lg navbar-dark probootstrap_navbar" id="probootstrap-navbar">
      <div class="container">
        <a class="navbar-brand" href="/">Aja Airlines</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-menu" aria-controls="probootstrap-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-menu">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item "><a class="nav-link" href="home.php">Home</a></li>
            <li class="nav-item active"><a class="nav-link" href="flights.php">Flights</a></li>
			<li class="nav-item"><a class="nav-link" href="mybooking.php">My Booking</a></li>
            <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
			<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    

   <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5" id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center text-center">
          <div class="col-md">
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Flight Details</h2>
            <p class="lead mb-5 probootstrap-animate">
  

            </p>
              
            </p>
          </div> 
        </div>
      </div>
    
    </section>
     <section class="probootstrap_section" id="section-feature-testimonial">
     <div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                   
                     
                </div>
            </div>
<table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered table-striped" id="hidden-table-info">
<thead>
 <th>From</th>
 <th>To</th>
 <th>Departure Date</th>
 <th>Price</th>
 
</thead>              
<tbody>
<?php

$ret=mysqli_query($con,"select * from flights");
if(mysqli_num_rows($ret)>0)
{
while ($row=mysqli_fetch_array($ret)) {

?>
 <tr>
   
    <td><?php  echo $row['f_from'];?></td>
    
    <td><?php  echo $row['f_to'];?></td>
	<td><?php  echo $row['dep_date'];?></td>
	<td><?php  echo $row['price'];?></td>
	<td><a href="mybooking.php?from=<?php echo htmlentities ($row['f_from']);?>&to=<?php echo htmlentities ($row['f_to']);?>&dep=<?php echo htmlentities ($row['dep_date']);?>&price=<?php echo htmlentities ($row['price']);?>" class="edit" title="Book" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a></td>

  </tr>
 
<?php 
}
}?>
                 
</tbody>
</table>
       
        </div>
    </div>
</div>  
    </section>
    
  
     

   


    <!-- END section -->

    <footer class=" probootstrap-border-top">
      <div class="container">
        
        
          <div class="col-md-12 text-center">
            <p class="probootstrap_font-14">&copy; Aja Airlines. All Rights Reserved. </p>
          
        
        </div>
      </div>
    </footer>

    
    <script src="assets/js/jquery.min.js"></script>
    
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/bootstrap-datepicker.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>

    <script src="assets/js/select2.min.js"></script>

    <script src="assets/js/main.js"></script>
	</body>
</html>