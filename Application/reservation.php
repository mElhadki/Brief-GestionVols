<!doctype html>
<html lang="en">

<head>
    <title>Reservation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="Css/reservation.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
        
</head>

<body>
<!-- Navigation -->
 <!-- header-->
 <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="Images/Logo.png" style="width: 100px; height: 70px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!--Form vole -->


<?php
require_once('Connection.php');
if(isset($_GET['id_Vol']))
{

  $query = "select * FROM Vol WHERE id_Vol = ".$_GET['id_Vol'];
  $result = $con->query($query);
  while($row = $result->fetch_assoc()) {
  echo "
  
  <div class='card-body'id='caard'>
  <ul class='list-group mb-4' scope='row'>
  <li class='list-group-item'><span>Vol Numéro: <strong>" .$_GET['id_Vol']." </strong></span></li>
  <li class='list-group-item'>Lieu Départ: <strong>" .$row['LieuDepart'] . "</strong></li>
  <li class='list-group-item'>Lieu Arrive: <strong>" .$row['LieuArrive'] . "</strong></li>
  <li class='list-group-item'>Date Départ: <strong>" .$row['DateDepart'] . "</strong></li>
  <li class='list-group-item'>Date Arrive: <strong>" .$row['DateArrive'] . "</strong></li>
  <li class='list-group-item'>Numéro des Places Disponible: <strong>" .$row['NbPlace'] . "</strong></li>
  <li class='list-group-item'>Prix: <strong>" .$row['Prix'] . "</strong></li>
  <div class='card-footer'></div>
  </div>
  ";
   
    }
      

  }
?>

<!-- Ajout Client et reservation-->

<div class="card bg-light mb-3" style="  left: 150px; margin-top: 980px;   

left:50%;
transform:translate(-50%,-50%);
width:500px;"
>

          <form action="" method="post">
          <div class="card border-primary rounded-0">
                 <div class="card-header p-0">
                        <div class="bg-info text-white text-center py-2">
                            <h3><i class="fa fa-envelope"></i> Le client</h3>
                            <p class="m-0">Renseignements personnels</p>
                         </div>
                </div>
                <div class="card-body p-3">
            
 <!--Body-->
                        <div class="form-group">
                                 <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                             <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                         </div>
                                         <input name="Nom" id="Nom" type="text" placeholder="Nom" class="form-control" required>
                                    </div>
                         </div>
                         <div class="form-group">
                                 <div class="input-group mb-2">
                                      <div class="input-group-prepend">
                                         <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                      </div>
                                      <input name="Prenom" id="Prenom" type="text" placeholder="Prenom" class="form-control"required >
                                     </div>
                          </div>
                          <div class="form-group">
                                 <div class="input-group mb-2">
                                       <div class="input-group-prepend">
                                           <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                       </div>
                                       <input name="Num_Passport" id="Num_Passport" type="text" placeholder="Num Passport" class="form-control"required >
                                       </div>
                          </div>
                        
                          <button type="submit" value="Enregister" name="Enregister"  id="btn"  class="btn btn-info btn-block rounded-0 py-2" data-toggle="modal" data-target="#exampleModal">
                                                valider
                          </button>
                          
      
           
           
            
            
           
            
           
          </div>  
        </div>  
        </div>   
        </div> 

  <?php

require_once('Connection.php');

    if(isset($_POST['Enregister']))

    {
$Nom= $_POST['Nom'];  
$Prenom = $_POST['Prenom'];
$Num_Passport = $_POST['Num_Passport'];
       if(empty($_POST['Nom']) || empty($_POST['Prenom']) || empty($_POST['Num_Passport'] ))
       {
            
       }
       else
       {
            $query="insert INTO client (Nom,Prenom,Num_Passport)". "VALUES ('$Nom', '$Prenom', '$Num_Passport')";
            $result=mysqli_query($con,$query);
            $last_id = $con->insert_id;    
            $addevent = "insert INTO reservation(Id_Client, id_Vol, Date_Reservation) VALUES ('$last_id', '".$_GET['id_Vol']."', NOW())";
            $result=mysqli_query($con,$addevent);
            $last_id_reservation = $con->insert_id;
          
       }
     	echo "<script>location.href='view.php?id_Reservation=".$last_id_reservation."'</script>";

      
    }
   
   
   
  ?>
  
<!--footer-->

<footer>
    <div class="footer-container"  >
      <div class="left-col">
        <span class="logo">
          <img src="Images/Logo2.png" style="width: 218px;">
        </span>
        <div class="social-media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <p class="rights-text">© 2020 Created By YOUR-TRIP.</p>
      </div>

      <div class="right-col">
        <h1>Our Newsletter</h1>
        <div class="border"></div>
        <p>Enter Your Email to get our news and updates.</p>
        <form action="" class="newsletter-form">
          <input type="text" class="txtb" placeholder="Enter Your Email">
          <div class="inbt"  ><input type="button"  class="btn" value="submit"></div>
        </form>
      </div>
    </div>
  </footer>
</body>
</html>