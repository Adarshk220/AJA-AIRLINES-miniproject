<?php
session_start();
include('dbconnection.php');
if(isset($_GET['from']))
{
	$from=$_GET['from'];
    $to=$_GET['to'];
    $dep=$_GET['dep'];
	$email;
if(isset($_SESSION['user']))
{
$email=$_SESSION['user'];
}
else
{
$email="rohit@gmail.com";
}
   
  // Query for data insertion
     $query=mysqli_query($con, "update userdetails set u_from ='$from',u_to = '$to',t_date=$dep where email='$email'");
    if ($query) {
    echo "<script>alert('You have successfully booked.');</script>";
   
  }
}
if(isset($_POST['book']))
  {
    $from=$_POST['from'];
    $to=$_POST['to'];
    $dep=$_POST['dep'];
	$no=$_POST['no'];
 $email;
if(isset($_SESSION['user']))
{
$email=$_SESSION['user'];
}
else
{
$email="rohit@gmail.com";
}  
  // Query for data insertion
     $query=mysqli_query($con, "update userdetails set u_from ='$from',u_to = '$to',t_date=$dep,u_no =$no where email='$email'");
    if ($query) {
    echo "<script>alert('You have successfully booked.');</script>";
   
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
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

		<title>Home &mdash; Aja Airlines</title>
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
	<style>
	@font-face {
  font-family: 'Material Icons';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/materialicons/v90/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2) format('woff2');
}

.material-icons {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 24px;
  line-height: 1;
  letter-spacing: normal;
  text-transform: none;
  display: inline-block;
  white-space: nowrap;
  word-wrap: normal;
  direction: ltr;
  -webkit-font-feature-settings: 'liga';
  -webkit-font-smoothing: antialiased;
}
	</style>
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
            <li class="nav-item"><a class="nav-link" href="flights.php">Flights</a></li>
	        <li class="nav-item active"><a class="nav-link" href="mybooking.php">My Booking</a></li>

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
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">About Us</h2>
            <p class="lead mb-5 probootstrap-animate">
  

            </p>
              <a href="https://themewagon.com/theme_tag/free/" target="_blank" role="button" class="btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3">More Templates Here</a> 
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
 <th>Firstname</th>
 <th>Lastname</th>
 <th>From</th>
 <th>To</th>
 <th>Departure Date</th>
 <th>No. of Person</th>
</thead>              
<tbody>
<?php
$email;
if(isset($_SESSION['user']))
{
$email=$_SESSION['user'];
}
else
{
$email="rohit@gmail.com";
}
$ret=mysqli_query($con,"select * from userdetails where email='$email'");
if(mysqli_num_rows($ret)>0)
{
while ($row=mysqli_fetch_array($ret)) {

?>
 <tr>
   
    <td><?php  echo $row['firstname'];?></td>
    <td><?php  echo $row['lastname'];?></td>
	<td><?php  echo $row['u_from'];?></td>
    <td><?php  echo $row['u_to'];?></td>
	<td><?php  echo $row['t_date'];?></td>
	<td><?php  echo $row['u_no'];?></td>
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