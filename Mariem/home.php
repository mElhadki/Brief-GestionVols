<!doctype html>
<html lang="en">

<head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- link local CSS -->
    <link rel="stylesheet" href="css/Home.css">
</head>

<body>



    <!-- Slide Background -->
    <header>
            <!-- Navigation -->
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
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div id="Back1" class="carousel-item active">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-4">We are in this together</h2>
                        <p class="lead">Book Flights and Travel the World.</p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div id="Back2" class="carousel-item">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-4">We are in this together</h2>
                        <p class="lead">Book Flights and Travel the World.</p>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div id="Back3" class="carousel-item">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-4">We are in this together</h2>
                        <p class="lead">Book Flights and Travel the World.</p>
                    </div>
                </div>

            </div>





            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

         <!-- Flights Form -->

      
    <div class="col-md-6">
        <div id="logbox">
          <form action="" method="post">
       
            <h1>Flights</h1><br/>
      
            <input name="LieuDepart" id="LieuD" type="text" placeholder="From" class="input pass">
            <input name="LieuArrive" id="LieuA" type="text" placeholder="To" class="input pass">
            <input type="submit" value="Show Flights" name="Search" class="inputButton" id="btn">
           
          </div>  
        </div>  
        </div>   
        <div>
        
    </header>

    <section class="py-5">
        <h1>How Our Company Works.</h1><br /><br /><br />
        <div class="container">

            <div class="row">

                <div class="col-md-4" style="text-align: center;">
                    <img src="Images/check.png" style="width:100px;">
                    <h1>Search for a flight</h1>
                    <p>We help with product demo and let you experience the whole new world of technology.</p>
                    <a href="#" class="text-danger">Ask the community</a>
                </div>
                <div class="col-md-4" style="text-align: center;">
                    <img src="Images/mobile.png" style="width:100px;">
                    <h1> book your flight</h1>
                    <p>Our team is trying all possible ways to assist you with our services.</p>
                    <a href="#" class="text-danger">Ask the community</a>
                </div>
                <div class="col-md-4" style="text-align: center;">

                    <img src="Images/boy.png" style="width:100px;">
                    <h1>Have a question?</h1>
                    <p>If you have any question please do not hesitate to drop us an email.</p>
                    <a href="#" class="text-danger">Ask the community</a>
                </div>
            </div>
        </div>
    </section>
    
<?php

      require_once('TraitementHome.php');

?>


<footer>
          <div class='footer-container'>
            <div class='left-col'>
              <span class='logo'>
                <img src='Images/Logo.png' style='width: 218px;'>
              </span>
              <div class='social-media'>
                <a href='#'><i class='fab fa-facebook-f'></i></a>
                <a href='#'><i class='fab fa-twitter'></i></a>
                <a href='#'><i class='fab fa-instagram'></i></a>
                <a href='#'><i class='fab fa-youtube'></i></a>
                <a href='#'><i class='fab fa-linkedin-in'></i></a>
              </div>
              <p class='rights-text'>© 2020 Created By YOUR-TRIP.</p>
            </div>
    
            <div class='right-col'>
              <h1>Our Newsletter</h1>
              <div class='border'></div>
              <p>Enter Your Email to get our news and updates.</p>
              <form class='newsletter-form'>
                <input type='text' class='txtb' placeholder='Enter Your Email'>
                <div class='inbt'><input type='submit' class='btn' value='submit'></div>
              </form>
            </div>
          </div>
        </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

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