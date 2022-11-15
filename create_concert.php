<?php 
  include('connec.php'); 
?>

<!DOCTYPE html>
<html lang = "en">
<head>
	<title>Create Concert</title>
</head>
<body>

<h1>Create concert</h1>

<form action="create_concert.php" method="post">
    <!--<?php #include('errors.php'); ?>//-->

    <div class="input-concert">
	    <label for="concert_name">Concert Name:</label>
	    <input type="text" id="concert_name" name="concert_name"><br></br>
    </div>

    <!--
    <div class="input-concert">
        <label for="Aname">Artist Name:</label>
	    <input type="text" id="Aname" name="Aname"><br></br>
    </div>

    <div class="input-concert">
        <label for="genreA">Artist Genre:</label>
            <select class="form-select" name="Artist_Gerne" >
              <option selected>Select Genre</option>
              <option value="1">Pop</option>
              <option value="2">Rock</option>
              <option value="3">Jazz</option>
            </select>
    </div>
    //-->

    <div class="input-concert">
        <label for="concert_date">Date play concert:</label>
	    <input type="date" id="concert_date" name="concert_date"><br></br>
    </div>
    
    <div class="input-concert">
        <label for="concert_time">Time play concert:</label>
        <input type="time" id="concert_time" name="concert_time"><br></br>
    </div>

    <div class="input-concert">
        <label for="concert_place">Concert place:</label>
	    <input type="text" id="concert_place" name="concert_place"><br></br>
    </div>
     
    <div class="input-concert">
        <label for="concert_image">Zone Photo:</label>   It can error 
	    <input type="file" id="concert_image" name="concert_image"><br></br>
    </div>

    <!--
    //<div class="input-concert">
        //<label for="Zone">Zone amout:</label> 
	    //<input type="number" min="1" id="Zone" name="Zone"><br></br>
    //</div>

    //<label for="ZoneN">Zone name:</label> 
	//<input type="text" id="ZoneN" name="ZoneN"><br></br>

    //<label for="ZoneP">Zone price:</label> 
	//<input type="text" id="ZoneP" name="ZoneP"><br></br>

    //<label for="ZoneA">Zone amout:</label> 
	//<input type="text" id="ZoneA" name="ZoneA"><br></br>
     //-->

    <div class="input-concert">
        <label for="concert_sell_date_start">Date start to sell ticket:</label>
	    <input type="date" id="concert_sell_date_start" name="concert_sell_date_start"><br></br>
    </div>

    <div class="input-concert">    
        <label for="concert_sell_time_start">Time start to sell ticket:</label>
	    <input type="time" id="concert_sell_time_start" name="concert_sell_time_start"><br></br>
    </div>

    <div class="input-concert">
        <label for="concert_sell_date_stop">Date stop to sell ticket:</label>
	    <input type="date" id="concert_sell_date_stop" name="concert_sell_date_stop"><br></br>
    </div>

    <div class="input-concert">
        <label for="concert_sell_time_stop">Time stop to sell ticket:</label>
	    <input type="time" id="concert_sell_time_stop" name="concert_sell_time_stop"><br></br>
    </div>

    <div class="input-group">
  	  <button type="submit" class="btn" name="crea_con">Create Concert</button>
  	</div>

    <!--<button onclick="myFunction()">Create Concert</button>//-->
</form>


</body>
</html>
