
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nepa Child Edu</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
<link rel="stylesheet" href="style.css">




<style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>


</head>
<body>
<?php include 'topbar.php';?>



<table>
 <tr>
  <th>Id</th> 
  <th>Name</th> 
  <th>Gender</th>
  <th>Age</th>
  <th>Religion</th>
  <th>Donation Goal</th>
 </tr>


 <?php
$conn = mysqli_connect("localhost", "admin", "admin123", "nepachild");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 



  $result = $conn->query("SELECT id, name, gender, age, religion, totalamt FROM child");

  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["age"] . "</td><td>" . $row["religion"] . "</td><td>" . $row["totalamt"] . "</td><td>";
    
    echo("<button onclick=\"location.href='donation.php'\">Donate</button>");
    
}

echo "</table>";

} else { echo "0 results"; }
$conn->close();
?>
</table>










    <footer class="site-footer">
            <div class="footer-widgets">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="foot-about">
                                <h2><a class="foot-logo" href="#"><img src="images/logo.png" alt=""></a></h2>
    
                                <p><h2>Nepa Child Edu</h2> </p>
                                <ul class="d-flex flex-wrap align-items-center">
                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div><!-- .foot-about -->
                        </div><!-- .col -->
    
                        <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                            <h2>Useful Links</h2>
    
                            <ul>
                            <li><a href="Donation.html">Donation</a></li>
                            <li><a href="Profiles.html">Child Profile</a></li>
                            <li><a href="TopDonors.html">Top Donor</a></li>
                            <li><a href="about.html">About Us</a></li>

                        </ul>
                        </div><!-- .col -->
    
                        
    
                        <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                            <div class="foot-contact">
                                <h2>Contact</h2>
    
                                <ul>
                                    <li><i class="fa fa-phone"></i><span>+977-9823571726<span></li>
                                    <li><i class="fa fa-envelope"></i><span>nepachildedu@gmail.com</span></li>
                                    <li><i class="fa fa-map-marker"></i><span>New Baneshowr, Kathmandu, Nepal</span></li>
                                </ul>
                            </div><!-- .foot-contact -->
    
                            <div class="subscribe-form">
                                <form class="d-flex flex-wrap align-items-center">
                                    <input type="email" placeholder="Your email">
                                    <input type="submit" value="send">
                                </form><!-- .flex -->
                            </div><!-- .search-widget -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .footer-widgets -->
    
            <div class="footer-bar">
                <div class="container">
                   <!--Any Footer here-->
                </div><!-- .container -->
            </div><!-- .footer-bar -->
        </footer><!-- .site-footer -->



    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>

</body>
</html>




