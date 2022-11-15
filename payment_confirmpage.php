<?php 
session_start();
$username = "";
$email    = "";
$errors = array();
// connect to the database
$db = mysqli_connect('127.0.0.1', 't65g5', 't65g5', 't65g5');

    if(isset($_POST['payment_confirm'])) {
        $payment_bill =$_POST['payment_bill'];
        $payment_amount =$_POST['payment_amount'];
        $payment_date =$_POST['payment_date'];
        $payment_time =$_POST['payment_time'];
        $payment_bank =$_POST['payment_bank'];
        $payment_digit =$_POST['payment_digit'];

        if(empty($payment_bill)) {
            array_push($errors,"Payment Bill is required");
        }
        if(empty($payment_amount)) {
            array_push($errors,"Payment Amount is required");
        }
        if(empty($payment_date)) {
            array_push($errors,"Payment Date is required");
        }
        if(empty($payment_time)) {
            array_push($errors,"Payment Time is required");
        }
        if(empty($payment_bank)) {
            array_push($errors,"Bank Account is required");
        }
        if(empty($payment_digit)) {
            array_push($errors,"Last 4 Digits of Bank Account is required");
        }

        if(count($errors)==0) {
            $username = $_SESSION["username"];
            $input="INSERT INTO payment_confirmpage(Customer_Username,payment_bill,payment_amount,payment_date,payment_time,payment_bank,payment_digit) VALUE ('$username','$payment_bill','$payment_amount','$payment_date','$payment_time','$payment_bank','$payment_digit')";
            mysqli_query($db,$input);
            }
            header('location: index.php');
        }
?>


