<?php

//Database connectivity
$server = "localhost";
$username  = "root";
$password = "";
$database = "registration";


$conn = mysqli_connect($server, $username,$password,$database);
if ($conn){
    
}
else{
    ?>
        <script>
        alert("No Connection");
        </script>
    <?php
}

 
?>