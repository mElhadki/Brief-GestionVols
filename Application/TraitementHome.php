<?php

 
function displayAlert($text, $type)
{
          
        echo "<div class=\"alert alert-".$type."\" role=\"alert\">

        <p>".$text."</p>

        </div>";
}

?>
    <?php


require_once('Connection.php');

if(isset($_POST['Search'])){

    if(empty($_POST['LieuDepart']) || empty($_POST['LieuArrive']))
    {
        displayAlert("Please Fill The Blinks!", "warning");
    }

    else{

        
        $sql = "select * from Vol where LieuDepart='".$_POST['LieuDepart']."' and LieuArrive='".$_POST['LieuArrive']."' and NbPlace > 0;";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {

            echo "<div class='container'>
            <div class='row'>
        ";

       // output data of each row
       while($row = $result->fetch_assoc()) {

             echo "
      
                  <div class='card-body'>
                  <ul class='list-group mb-4' scope='row'>
                  <li class='list-group-item'>Vol Numéro: <strong>" . $row['id_Vol'] . " </strong></li>
                  <li class='list-group-item'>Lieu Départ: <strong>" . $row['LieuDepart'] . "</strong></li>
                  <li class='list-group-item'>Lieu Arrive: <strong>" . $row['LieuArrive'] . "</strong></li>
                  <li class='list-group-item'>Date Départ: <strong>" . $row['DateDepart'] . "</strong></li>
                  <li class='list-group-item'>Date Arrive: <strong>" . $row['DateArrive'] . "</strong></li>
                  <li class='list-group-item'>Numéro des Places Disponible: <strong>" . $row['NbPlace'] . "</strong></li>
                  <li class='list-group-item'>Prix: <strong>" . $row['Prix'] . "</strong></li>
                  <div class='card-link'>
                      <a href='reservation.php?id_Vol=".$row['id_Vol']."'>Reserver
                         <i class='fa fa-angle-right'></i><i class='fa fa-angle-right'></i>
                      </a>
                    </div>
                  </div>";
       
        }

          echo "</div></div>";
    }
    
    else {

        displayAlert("There's No Flights!","warning");
    }

    $con->close();
}
   
   }
   
   ?>