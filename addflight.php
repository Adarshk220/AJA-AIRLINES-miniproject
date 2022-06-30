<?php 
session_start();
include('dbconnection.php');
if(isset($_POST['submit']))
  {
  	//getting the post values
    $from=$_POST['from'];
    $to=$_POST['to'];
    $dep=$_POST['dep'];
    $price=$_POST['price'];
  
  $sql="insert into flights(f_from,f_to,dep_date,price) values('$from','$to', $dep, $price)";
  // Query for data insertion
     $query=mysqli_query($con,$sql);
    if ($query) {
    
	//$_SESSION['msg']="You have successfully inserted the data";
	$_SESSION['msg']=$sql;
    
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

   
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-2">
           
          </div> 
          <div class="col-md-8 probootstrap-animate">
            <form action="addflight.php" method="POST" class="probootstrap-form">
              <div class="form-group">
			  
			
                <div class="row mb-3">
				
                  <div class="col-md">
                    <div class="form-group">
                      <label for="id_label_single">From</label>

                      <label for="id_label_single" style="width: 100%;">
                        <select class="js-example-basic-single js-states form-control" id="id_label_single" style="width: 100%;" name="from">
                          <option value="Australia">Australia</option>
                          <option value="Japan">Japan</option>
                          <option value="United States">United States</option>
                          <option value="Brazil">Brazil</option>
                          <option value="China">China</option>
                          <option value="Israel">Israel</option>
                          <option value="Philippines">Philippines</option>
                          <option value="Malaysia">Malaysia</option>
                          <option value="Canada">Canada</option>
                          <option value="Chile">Chile</option>
                          <option value="Chile">Zimbabwe</option>
                        </select>
                      </label>


                    </div>
                  </div>
                  <div class="col-md">
                    <div class="form-group">
                      <label for="id_label_single2">To</label>
                      <div class="probootstrap_select-wrap">
                        <label for="id_label_single2" style="width: 100%;">
                        <select name="to" class="js-example-basic-single js-states form-control" id="id_label_single2" style="width: 100%;">
                          <option value="Australia">Australia</option>
                          <option value="Japan">Japan</option>
                          <option value="United States">United States</option>
                          <option value="Brazil">Brazil</option>
                          <option value="China">China</option>
                          <option value="Israel">Israel</option>
                          <option value="Philippines">Philippines</option>
                          <option value="Malaysia">Malaysia</option>
                          <option value="Canada">Canada</option>
                          <option value="Chile">Chile</option>
                          <option value="Chile">Zimbabwe</option>
                        </select>
                      </label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END row -->
                <div class="row mb-5">
                  <div class="col-md">
                    <div class="form-group">
                      <label for="probootstrap-date-departure">Departure</label>
                      <div class="probootstrap-date-wrap">
                        <span class="icon ion-calendar"></span> 
                        <input type="text" id="probootstrap-date-departure" class="form-control" placeholder="" name="dep">
                      </div>
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="form-group">
                      <label for="probootstrap-date-arrival">Price</label>
                      <div class="probootstrap-date-wrap">
                        
                        <input type="text" id="probootstrap-text-arrival" class="form-control" placeholder="Price" name="price">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END row -->
				<?php if (isset($_SESSION['msg'])): ?>
	<div class="alert alert-success">
		<?php 
			echo $_SESSION['msg']; 
			unset($_SESSION['msg']);
		?>
	</div>
<?php endif ?>
                <div class="row">
                  <div class="col-md">
                    </div>
                  <div class="col-md">
                    <input type="submit" name="submit"  value="Submit" class="btn btn-primary btn-block">
                  </div>
                </div>
              </div>
            </form>
          </div>
		  <div class="col-md-4"></div>
        </div>
    
  
     

   


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