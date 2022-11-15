<?php
    session_start();
    $errors = array();
    $servername = "127.0.0.1";
$username = "t65g5";
$password = "t65g5";
$conn = mysqli_connect($servername, $username, $password, 't65g5');
    
if (isset($_POST['crea_con'])) 
{
    $concert_name =  $_POST['concert_name'];
    $concert_date =  $_POST['concert_date'];
    $concert_time =  $_POST['concert_time'];
    $concert_place =  $_POST['concert_place'];
    $concert_image =  $_POST['concert_image'];
    $concert_sell_date_start =  $_POST['concert_sell_date_start'];
    $concert_sell_time_start =  $_POST['concert_sell_time_start'];
    $concert_sell_date_stop =  $_POST['concert_sell_date_stop'];
    $concert_sell_time_stop =  $_POST['concert_sell_time_stop'];


if (empty($concert_name)) { array_push($errors, "Concert Name is required"); }
if (empty($concert_date)) { array_push($errors, "Date play concert is required"); }
if (empty($concert_time)) { array_push($errors, "Time play concert is required"); }
if (empty($concert_place)) { array_push($errors, "Concert place is required"); }
if (empty($concert_image)) { array_push($errors, "Zone Photo is required"); }
if (empty($concert_sell_date_start)) { array_push($errors, "Date start to sell ticket is required"); }
if (empty($concert_sell_time_start)) { array_push($errors, "Time start to sell ticket"); } 
if (empty($concert_sell_date_stop)) { array_push($errors, "Date stop to sell ticket"); }
if (empty($concert_sell_time_stop)) { array_push($errors, "Time stop to sell ticket is required"); } 


if (count($errors) == 0) {

	mysqli_query($conn, "INSERT INTO organizer_concert SET concert_name='$concert_name' ,concert_date='$concert_date',concert_time='$concert_time', 
    concert_place='$concert_place' , concert_image='$concert_image', concert_sell_date_start='$concert_sell_date_start', concert_sell_time_start='$concert_sell_time_start', 
    concert_sell_date_stop='$concert_sell_date_stop', concert_sell_time_stop='$concert_sell_time_stop'");
    header('location: artist_concert.php');
}
}

?>