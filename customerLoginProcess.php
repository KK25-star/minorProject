<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Grow More</title>
<link rel="icon" href="images/icon.png">
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/superfish.css" media="screen">
</head>

<body>

<div class="header-wrapper">
	<div class="wrapper">
		<div class="logo">
            	<h1>Grow More</h1>
                <span>Transportation and Courier Service</span>        </div>
    	<div class="menu">
      <ul class="sf-menu" id="example">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
				<li class="current"> <a href="services.html">Services </a>
					<ul class="intHover">
						<li><a href="services.html">Cargo Service</a></li>
						<li><a href="services.html">Ground Service</a></li>
						<li><a href="services.html">Logistic Service</a></li>
						<li><a href="services.html">Courier Service</a></li>
						<li><a href="services.html">Ware Houseing</a></li>
						<li><a href="services.html">Door to Door Delivery</a></li>
					</ul>
				</li>
				<li class="current"> <a href="#">Login/sign up</a>
					<ul class="intHover">
						<li> <a href="#">Customer</a>
							<ul>
								<li> <a href="customer_register.html">Sign Up</a></li>
								<li> <a href="customer_login.html">Sign In</a></li>
							</ul>
						</li>
						<li>  <a href="#">Transporter</a>
							<ul>
								<li> <a href="transporter_register.html">Sign Up</a></li>
								<li> <a href="transporter_login.html">Sign In</a></li>
							</ul>
						</li>
					</ul>
				</li>
        <li> <a href="contact.html">Contact</a> </li>
      </ul>
    </div>
    <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<!---header-wrapper--->
<div class="clear"></div>
<div class="page-content">
<div class="page">
<div class="panel">
<div class="title">
	<h1 class="heading">WELCOME TO GROW MORE FAMILY</h1>
</div>

<?php

    require_once('connection.php');
    if (isset($_POST['Username'])) {

      $Username = $_POST['Username'];
      $Password = $_POST['Password'];
      $Password = md5($Password);


      $sql = "SELECT * FROM customer WHERE Email = '$Username' AND Pass = '$Password' ";
      $result = mysqli_query($conn,$sql);

      if (mysqli_num_rows($result)==1) {

				$query = "SELECT * FROM customer WHERE Email = '$Username'  ";
				$data = mysqli_query($conn,$query);
				$total = mysqli_num_rows($data);
				$results = mysqli_fetch_assoc($data);
		    $Name = $results['Name'];

				if ($total!=0)
				{
		 			 echo "<h1>Hello $Name,</>";
				}

			}
      else {
        echo "<h1>Incorrect username/password</>";

      }

    }


 ?>
</table>
 <h1>Your Orders</h1>
 <table border:"10" style="width:100% ; float:center; font-family: 'Arial'; color:white; font-size:20px;">
	 <tr>
		 <th>Name</th>
		 <th>MobNo</th>
		 <th>Weight</th>
		 <th>Destination</th>
		 <th>Type</th>
	 </tr>
  <?php

   $querys = "SELECT * FROM orders WHERE Name = '$Name'";
   $datas = mysqli_query($conn,$querys);
   $totalr = mysqli_num_rows($datas);
	 if ($totalr!=0)
	 {
		 while (($resul = mysqli_fetch_assoc($datas)))
		 {
			 echo "
				<tr>
				<th>".$resul['Name']."</th>
				<th>".$resul['MobNo']."</th>
				<th>".$resul['Weight']."kg</th>
				<th>".$resul['Destination']."</th>
				<th>".$resul['Type']."</th>
				</tr>";
		 }
	 }
  ?>
</table>
<h1><a href="newOrder.html">New Order</h1>


</div>
</div>
<div class="clear"></div>
</div><!---page-content--->

<div class="footer-wrapper">
  <div class="footer">
    <div class="panel marRight30">
      <div class="title">
        <h1>company</h1>
      </div>
      <div class="contnet">
        <ul>
					<li><a href="about.html">About Us</a></li>
          <li><a href="Contact.html">Contact Us</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li class="border-bottom"><a href="#">Terms & Condition</a></li>
        </ul>
      </div>
    </div>
    <div class="panel marRight30">
      <div class="title">
        <h1>open hour</h1>
      </div>
			<div class="contnet">
        <ul>
          <li><a href="#">Monday 11am-7pm</a></li>
          <li><a href="#">Tuesday-Friday 11am-8pm</a></li>
          <li><a href="#">Saturday 10am-6pm</a></li>
          <li class="border-bottom"><a href="#">Sunday 11am-6pm</a></li>
        </ul>
      </div>
    </div>
    <div class="panel">
      <div class="title">
        <h1>Grow More</h1>
      </div>
      <div class="content">
        <p>Transportation and Courier Services</p>
      </div>
      <div class="phone"> <img src="images/icon5.png" alt="icon" />
        <h1>+91-9926324547</h1>
      </div>
      <div class="content">
        <p>&copy; Copyright Grow More. All rights reserved.
      </div>
    </div>
  </div>
  <div class="clear"></div>
</div>
<!---footer-wrapper--->
<div class="topbtn">
	<button id="topBtn"><a href="#"><img src="images/greybox.png" /></a></button>
</div>

</body>
</html>
