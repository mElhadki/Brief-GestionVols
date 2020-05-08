<?php
    $con=mysqli_connect('localhost','root','','GestionVols');
    
    // Check connection
    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>