<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="istyle" href="istyle.css">
    <link rel="stylesheet" href="https://prod-cdn.preprod.co-vin.in/assets/css/map-custom.css">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="dashboard.css">

    <title>Indian Healthcare Community</title>

    <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
          margin: 0;
        }
        
        html {
          box-sizing: border-box;
        }
        
        *, *:before, *:after {
          box-sizing: inherit;
        }
        
        .column {
          float: left;
          width: 19.9%;
          margin-bottom: 16px;
          padding: 2 8px;
        }
        
        .card {
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
          margin: 9px;
        }
        
        .about-section {
          padding: 50px;
          text-align: center;
          background-color: #474e5d;
          color: white;
        }
        
        .container {
          padding: 0 16px;
        }
        
        .container::after, .row::after {
          content: "";
          clear: both;
          display: table;
        }
        
        .title {
          color: grey;
          text-align: center;
        }
        
        .button {
          border: none;
          outline: 0;
          display: inline-block;
          padding: 8px;
          color: white;
          background-color: #000;
          text-align: center;
          cursor: pointer;
          width: 100%;
        }
        
        .button:hover {
          background-color: #555;
        }
        
        @media screen and (max-width: 650px) {
          .column {
            width: 100%;
            display: block;
          }
        }

        .table {
            border-collapse: collapse;
            width: 100%;
            color: #d96459;
            font-family: san serif;
            font-size: 25px;
            text-align: left;
        }

        .th {
            background-color: #588c7e;
            color:white;
        }
        tr:nth-child(even) {background-color: #f2f2f2}
        table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}

        }
        </style>

  </head>
  <body>
    
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="18.jpg" alt="" width="60" class="d-inline-block align-text-left">INDIAN HEALTHCARE COMMUNITY 
                  </a>
                <ul class="nav justify-content-end">
                    <!--<li class="nav-item">
                        <button class="btn btn-secondary " type="button" id="btn" data-bs-toggle="btn" data-bs-auto-close="true" aria-expanded="false">HOME</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-secondary " type="button" id="btn" data-bs-toggle="btn" data-bs-auto-close="true" aria-expanded="false">DASHBOARD</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-secondary " type="button" id="btn" data-bs-toggle="btn" data-bs-auto-close="true" aria-expanded="false">NEWS</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-secondary " type="button" id="btn" data-bs-toggle="btn" data-bs-auto-close="true" aria-expanded="false">ABOUT</button>
                    </li>
                </ul>
                -->
                    
                    <div class="nav-links">
                        <!--<i class="fa fa-times" onclick="hideMenu()"></i>-->
                           <ul>
                               <li><a href="newpage.html">HOME</a></li>
                               <li><a href="#" class="active">DASHBOARD</a></li-->
                               <!--li><a href="#">APPOINMENT</a></li-->
                               <!--li><a href="#">VACCINATION SERVICES</a></li-->
                               <li><a href="account logout.php">LOGOUT</a></li>
                           </ul>
                       </div>

                  
                <!-- Navbar content -->
            </div>
        </nav>


        <div class="about-section">
            <h1>Your appoinments record</h1>
            <!--<a href="new.html" class ="login">Login/Register</a>-->
          </div>


        <table>
            <tr>
                <th>Firstname</th>
                <th>lastname</th>
                <th>email</th>
                <th>phone</th>
                <th>Address</th>
                <th>date </th>
                <th>time</th>
            </tr>
            <?php
            $con = mysqli_connect('localhost','root','', 'userdatabase');
            if ($con-> connect_error) {
                die("connection failed:". $con-> connect_error);
            }
            $sql = "SELECT * from doctable";
            $result = $con-> query($sql);
             
            if (($result !== false && $result->num_rows > 0)){
                while($row = $result-> fetch_assoc()){
                    echo "<tr><td>". $row["fname"] . "</td><td>" . $row["lname"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["address"] . "</td><td>" . $row["date"] . "</td><td>" .$row["time"] . "</td><tr>";
                }
                echo "</table>";
            }
            else{
                echo "0 result";
            }

            $con-> close();
            ?>
        </table>




<!-- Footer -->
<footer class="page-footer font-small blue-grey lighten-5">
   
   <div style="background-color: #84a1ff;">
     
 
       <!-- Grid row-->
       <div class="row py-4 d-flex align-items-center">
 
         <!-- Grid column -->
         <div class="col-md-4 col-lg-12 text-center text-md-center mb-4 mb-md-0">
           <h4 class="mb-0">Join The Largest Healthcare Community</h4>
         </div>
         <!-- Grid column -->
 
         <!-- Grid column -->
         <div class="col-md-6 col-lg-7 text-center text-md-right">
 
           <!-- Facebook -->
           <a class="fb-ic">
             <i class="fab fa-facebook-f white-text mr-4"> </i>
           </a>
           <!-- Twitter -->
           <a class="tw-ic">
             <i class="fab fa-twitter white-text mr-4"> </i>
           </a>
           <!-- Google +-->
           <a class="gplus-ic">
             <i class="fab fa-google-plus-g white-text mr-4"> </i>
           </a>
           <!--Linkedin -->
           <a class="li-ic">
             <i class="fab fa-linkedin-in white-text mr-4"> </i>
           </a>
           <!--Instagram-->
           <a class="ins-ic">
             <i class="fab fa-instagram white-text"> </i>
           </a>
 
         </div>
         <!-- Grid column -->
 
       </div>
       <!-- Grid row-->
 
     </div>
   </div>
 
   <!-- Footer Links -->
   <div class="container text-center text-md-left mt-5">
 
     <!-- Grid row -->
     <div class="row mt-3 dark-grey-text">
 
       <!-- Grid column -->
       <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
           
         <!-- Links -->
         <h6 class="text-uppercase font-weight-bold">Vaccination Services</h6>
         <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
         <p>
           <a class="dark-grey-text" href="#!">Register Member</a>
         </p>
         <p>
           <a class="dark-grey-text" href="#!">Search Vaccination Center</a>
         </p>
         <p>
           <a class="dark-grey-text" href="#!">Book Vaccination Slot</a>
         </p>
         <p>
           <a class="dark-grey-text" href="#!">Vaccination Statistics</a>
         </p>
         <p>
           <a class="dark-grey-text" href="#!">How to Get Vaccinated</a>
         </p>
         <p>
           <a class="dark-grey-text" href="#!">Dos and Donts</a>
         </p>
 
       </div>
        
       <!-- Grid column -->
 
       <!-- Grid column -->
       <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
 
         <!-- Links -->
         <h6 class="text-uppercase font-weight-bold">IHC Services</h6>
         <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
         <p>
           <a class="dark-grey-text" href="new.html">Registration & Appoinments/Docotor for Citizens/Facilities</a>
         </p>
         <p>
           <a class="dark-grey-text" href="new.html">Child Development Screening</a>
         </p>
         <p>
           <a class="dark-grey-text" href="blooddonation.html">Register For Blood Donation</a>
         </p>
         <p>
           <a class="dark-grey-text" href="new.html">Apply And Link Your Healthcard</a>
         </p>
         <p>
           <a class="dark-grey-text" href="new.html">Download Certificate</a>
         </p>
 
       </div>
       <!-- Grid column -->

       <!-- Grid column -->
       <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
 
 
        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Support</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="dark-grey-text" href="#!">Citizens Happines Chatter</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Ask IHC</a>
        </p>

      </div>
       <!-- Grid column -->
 
       <!-- Grid column -->
       <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
 
         <!-- Links -->
         <h6 class="text-uppercase font-weight-bold">Support</h6>
         <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
         <p>
           <a class="dark-grey-text" href="#!">Frequently Asked Questions</a>
         </p>
         <p>
           <a class="dark-grey-text" href="#!">Contact Us</a>
         </p>
 
       </div>
       <!-- Grid column -->
 
       <!-- Grid column -->
       <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
 
         <!-- Links -->
         <h6 class="text-uppercase font-weight-bold">Contact</h6>
         <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
         <p>
           <i class="fas fa-home mr-3"></i> Kothamangalam, Eranakulam, kerala, India</p>
         <p>
           <i class="fas fa-envelope mr-3"></i> missionovsbooker@gmail.com</p>
         <p>
           <i class="fas fa-phone mr-3"></i> + 91 96 45 61 34 99</p>
         <p>
           <i class="fas fa-print mr-3"></i> + 91 86 06 89 53 25</p>
 
       </div>
       <!-- Grid column -->
 
     </div>
     <!-- Grid row -->
 
   </div>
   <!-- Footer Links -->
 
   <!-- Copyright -->
   <div class="footer-copyright text-center text-black-50 py-3">© 2020 Copyright:
     <a class="dark-grey-text" href="https://mdbootstrap.com/"> MISSIONOVSBOOKER</a>
   </div>
   <!-- Copyright -->
 
 </footer>
 <!-- Footer -->
   
 </body>
</html>
