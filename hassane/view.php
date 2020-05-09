<?php
//connexion avec datta base
$bdd = new PDO("mysql:host=localhost;dbname=GestionVols","root","");

//verifier id if exists
$exist = true;
if(isset($_POST['Num_Passport']))
{
    $req=$bdd->prepare('SELECT Reservation.id_Reservation,Client.Nom, Client.Prenom, Client.Num_Passport, Reservation.Date_Reservation, Vol.LieuDepart,Vol.LieuArrive, Vol.DateDepart, Vol.DateArrive, Vol.Prix FROM Vol,Reservation,Client WHERE Client.Num_Passport=? and Vol.id_Vol=Reservation.id_Vol and Client.Id_Client=Reservation.Id_Client');
    $req->execute(array($_POST['Num_Passport']));
    if(!$donner=$req->fetch())
    {
    echo "<h1 class='Message'>Ce Informations n'existe pas !!!!</h1>";
    $exist = false;
    }
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modden_Travel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleview.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/bca3abbddf.js" crossorigin="anonymous"></script>


      <!-- bootstrap -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <!-- icons -->
      <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

      <!-- for on scroll animations -->
      <link rel="stylesheet" href="https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css">
      <script src="https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js"></script>
    
</head>
<body>











    <div class="wrapper">

            <!--------------- hero section starts here --------------->

            <div class="video-container">
                  <video playsinline autoplay muted loop id="bgvid">
                        <source src="video.mp4" type="video/mp4">
                  </video>
            </div>
            <div class="background000">
              
            </div>

            <div class="header">
                  <h1>Traversons cela ensemble</h1>
                  <p>La flexibilité de modifier vos projets de voyage</p><br>
            </div>
            

            <!--------------- hero section ends here --------------->

            <!--------------- navbar starts here --------------->

             <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container" style="height: 10px;">
            <a class="navbar-brand" href="#"><img src="Logo2.png" style="width: 100px; height: 70px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive" style="font-size: 14.8px;">
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






















    <?php
    if ($exist)
    {
        echo "





        <div class='container'>
              <div class='pricing-table table1'>
                <div class='pricing-header'>
                  <div class='price'><img src='plane.png'></div>
                  <div class='title'><strong>N° Reservation:  </strong><span> " . $donner['id_Reservation'] . "</span></div>
                </div>
                  <ul class='pricing-list'>
                    <li><strong>Nom:</strong> " . $donner['Nom'] . " </li>
                    <div class='border'></div>
                    <li><strong>Prenom:</strong> " . $donner['Prenom'] . "</li>
                    <div class='border'></div>
                    <li><strong>Num Passport:</strong> " . $donner['Num_Passport'] . "</li>
                    <div class='border'></div>
                    <li><strong>Date Reservation:</strong> " . $donner['Date_Reservation'] . "</li>
                    <div class='border'></div>
                    <li><strong>Lieu Depart:</strong> " . $donner['LieuDepart'] . "</li>
                    <div class='border'></div>
                    <li><strong>Lieu Arrive:</strong> " . $donner['LieuArrive'] . "</li>
                    <div class='border'></div>
                    <li><strong>Date Depart:</strong> " . $donner['DateDepart'] . "</li>
                    <div class='border'></div>
                    <li><strong>Date Arrive:</strong> " . $donner['DateArrive'] . "</li>
                    <div class='border'></div>
                    <li><strong>Prix:</strong> " . $donner['Prix'] . "DH</li>
                  </ul>
                <a href='#'>Validé</a>
              </div>
            </div>





        ";
    }
    ?>



    <footer>
      <div class="footer-container">
        <div class="left-col">
          <span class="logo">
            <img src="Logo2.png" style="width: 218px;">
          </span>
          <div class="social-media">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <p class="rights-text">© 2020 Created By Modden_Travel.</p>
        </div>

        <div class="right-col">
          <h1>Our Newsletter</h1>
          <div class="border"></div>
          <p>Enter Your Email to get our news and updates.</p>
          <form action="" class="newsletter-form">
            <input type="text" class="txtb" placeholder="Enter Your Email">
            <div class="inbt"><input type="submit" class="btn" value="submit"></div>
          </form>
        </div>
      </div>
    </footer>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
</body>
</html>