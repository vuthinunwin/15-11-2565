<?php 
include('payment_confirmpage.php'); ?>

<!DOCTYPE html>

<html lang="en">
<head>

    <title>Payment Confirm Page</title>
    <div class="header"> <h2>Payment Confirm Page</h2></div>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <form action="payment_confirm.php" method="post">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label for="payment_bill">Payment Bill</label>
            <input type="file" name="payment_bill" >
        </div>
        <div class="input-group">
            <label for="payment_amount">Payment Amount</label>
            <input type="int" name="payment_amount">
        </div>
        <div class="input-group">
            <label for="payment_date">Payment Date</label>
            <input type="date" name="payment_date">
        </div>
        <div class="input-group">
            <label for="payment_time">Payment Time</label>
            <input type="time" name="payment_time">
        </div>
        <div class="input-group">
            <label for="payment_bank">Bank Account</label>
            <select class="select" name="payment_bank">
                <option selected>Choose...</option>
                <option value="1">ไทยพาณิย์(SCB)</option>
                <option value="2">กสิกรไทย(Kbank)</option>
                <option value="3">กรุงไทย(KTB)</option>
                <option value="4">กรุงเทพ(BBL)</option>
                <option value="5">กรุงศรี(BAY)</option>
                <option value="6">ทีเอ็มบีธนชาต(ttb)</option>
                <option value="7">ออมสิน(Goverment Savings Bank)</option>
                <option value="8">ธ.ก.ส.(BAAC)</option>
                <option value="9">เกียรตินาคิน(Kiatnakin)</option>
                <option value="10">แสตนดาร์ดชาร์เตอร์ด(Standard Chartered)</option>
                <option value="11">ยูโอบี(UOB)</option>
                <option value="12">ทิสโก้(TISCO)</option>
                <option value="13">ซีไอเอ็มบี(CIMB)</option>
                <option value="14">ไอซีบีซี(ICBC)</option>
            </select>
        </div>
        <div class="input-group">
            <label for="payment_digit">Last 4 Digits of Bank Account</label>
            <input type="int" name="payment_digit">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="payment_confirm">Confirm</button>
        </div>

    </form>    
</body>
</html>