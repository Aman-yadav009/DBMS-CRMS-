<?php include'complaint_script.php'?>
<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" href="com.css">
</head>
<body>
	<div class="container">
		<div class="navbar">
			<a href="homepage.html">Home</a>
			<div class="dropdown">
			  <button class="dropbtn">Login
				<i class="fa fa-caret-down"></i>
			  </button>
			  <div class="dropdown-content">
				<a href="slogin.php" >Police Station</a>
				<a href="ologin.php">Police Officer</a>
			  </div>
			</div>
			<a href="most_wanted.php">Most Wanted</a>
			<a href="complaint.php">Complaint</a>
			<a href="aboutus.html">About Us</a>
			<a href="" hidden id="hide">Log Out</a>
          </div>
          <div id="head2">
      <form action="" method="GET">
          <fieldset>
             <legend class="legend">Register Complaint</legend>
              <div> 
               <label for="Name">Name:</label>
               <input class="txt1" type="text" name="name" id ="name" required="required"/> <br />                  
               <label>Mother's Name:<input class="txt3" type="text" id ="m_name" name="m_name"/></label><br />
               <label>Father's Name:<input class="txt4" type="text" id ="f_name" name="f_name"/></label><br />
               <label for="Phone Number">Phone Number:</label>
               <input class="txt5" name="phone" id ="phone" required="required" /><br />
               <label>Gender: 
                  <input class="txt6" type="radio" name="gender" id ="gender" value="male"/>Male
                  <input class="txt6" type="radio" name="gender" id ="gender" value="female"/>Female
                  <input class="txt6" type="radio" name="gender" id ="gender" value="other"/>Others
               </label><br />
               <label  for="Address"><p class="label1">Address:</p><textarea class="txt7" name="address" cols="40" rows="4" required="required" id ="address"></textarea></label><br />
               <label>Witness Name:<input class="txt8" type="text" name="w_name" id ="w_name"/></label><br />
               <label  for="Complaint"><p class="label2">Complaint:</p><textarea class="txt10" name="complaint" cols="100" rows="10" required="required" id ="t_area"></textarea></label><br />
             </div>

             <div id="inner1">
                  <form>
                      <button  class="btn1" type="submit">Register</button>
                   </form>
              </div>
</fieldset>
      </form>
    </div>

	<div id="p1">
	</div>
	<div id="p2">
	</div>
	<div id="p3">
	</div>
	<div id="p4">
	</div>
	<div id="p5">
	</div>
	<div id="p6">
	</div>
	<div id="p7">
	</div>
	<div id="stage">
		<div id="spinner">
			<img src="logo1.png">
		</div>
	</div>
</div>
</body>
</html>