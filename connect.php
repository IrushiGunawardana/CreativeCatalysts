<?php

$con =new mysqli('localhost','root','','creativecatalyst' );

if (!$con){
    die(mysqli_error($con));
}
