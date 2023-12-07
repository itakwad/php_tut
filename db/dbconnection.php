<?php
$con=mysqli_connect("localhost","root","","demo");
if(mysqli_connect_errno()){
    echo "Connection fail ".mysqli_connect_error();
}