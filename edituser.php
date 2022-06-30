<?php 
//Database Connection
include('dbconnection.php');
if(isset($_POST['submit']))
  {
  	//getting the post values
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contno=$_POST['contactno'];
    $email=$_POST['email'];
    $gend=$_POST['gender'];
	$dob=$_POST['dob'];
	$id=$_POST['id'];
   
  // Query for data insertion
  $sql= "update userdetails set firstname='$fname',lastname='$lname', gender='$gend',dob='$dob', email='$email',phone='$contno' where id=$id";
     $query=mysqli_query($con,$sql);
    if ($query) {
    
     echo "<script>alert('You have successfully update the data');</script>";
    echo "<script type='text/javascript'> document.location ='users.php'; </script>";
  
  }
  else
    {
     echo "<script>alert('Something went wrong.Please try agaian.');</script>";
    }
}
?>
<html lang="en">
	<head>
      <!-- 
    More Templates Visit ==> ProBootstrap.com
    Free Template by ProBootstrap.com under the License Creative Commons 3.0 ==> (probootstrap.com/license)

    IMPORTANT: You can do whatever you want with this template but you need to keep the footer link back to ProBootstrap.com
    -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title> Aja Airlines  &mdash; Admin  &mdash; Addflight</title>
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
            <li class="nav-item "><a class="nav-link" href="adminhome.php">Home</a></li>
            <li class="nav-item active"><a class="nav-link" href="flightdetails.php">Flights</a></li>
            <li class="nav-item"><a class="nav-link" href="bookings.php">Bookings</a></li>
            <li class="nav-item"><a class="nav-link" href="users.php">Users</a></li>
			<li class="nav-item"><a class="nav-link" href="adminlogout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    

   <section  class="probootstrap-cover overflow-hidden relative"  style="background-image: url('assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5" id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center text-center">
          <div class="col-md">
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Add Flight</h2>
            <p class="lead mb-5 probootstrap-animate">
  

            </p>
             </p>
          </div> 
        </div>
      </div>
    
    </section>
    <!-- 
    

    <section class="probootstrap_section" id="section-feature-testimonial">
     
    </section>
    END section -->

   
     
   <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5" id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center text-center">
          <div class="col-md">
            <div class="signup-form">
    <form  method="POST" action="edituser.php">
	<?php
	if(isset($_GET['editid']))
	{
$eid=$_GET['editid'];
$ret=mysqli_query($con,"select * from userdetails where id=$eid");
while ($row=mysqli_fetch_array($ret)) {
?>
		<h2>Register</h2>
		<input type="hidden" name="id" value="<?php  echo $row['id'];?>">
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" value="<?php  echo $row['firstname'];?>" class="form-control" name="fname" placeholder="First Name" required="true"></div>
				<div class="col"><input type="text" class="form-control" value="<?php  echo $row['lastname'];?>" name="lname" placeholder="Last Name" required="true"></div>
			</div>        	
        </div>
		<div class="form-group">
            <select class="form-control" name="gender">
			<option>Gender</option>
			<option value="Male">Male</option>
			<option value="Female">Female</option>
			<option value="Other">Other</option>
			</select>
        </div>
		<div class="form-group">
            <input type="date" class="form-control" name="dob" required="true" maxlength="10">
        </div>
		<div class="form-group">
            <input type="email" class="form-control" value="<?php  echo $row['email'];?>" name="email" placeholder="Enter your Email" required="true">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" value="<?php  echo $row['phone'];?>" name="contactno" placeholder="Enter your Mobile Number" required="true" maxlength="10" pattern="[0-9]+">
        </div>
      
		
		        
      
		<div class="form-group">
		<?php 
		}
}?>
			
		   <input type="submit" class="btn btn-success btn-lg btn-block" name="submit" value="Update">
        </div>
		<?php if (isset($_SESSION['msg'])): ?>
	<div class="alert alert-success">
		<?php 
			echo $_SESSION['msg']; 
			unset($_SESSION['msg']);
		?>
	</div>
<?php endif ?>
    </form>
	
</div> 
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