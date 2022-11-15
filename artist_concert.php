<!DOCTYPE html>
<html lang = "en">
<head>
	<title>Artist</title>
</head>
<body>

    <h1>Artist</h1>

    <form action="/action_page.php">
        <label for="fname">Artist name:</label>
        <input type="text" id="fname" name="fname"><br><br>
        <div class="input-concert">
            <label for="genreA">Artist Genre:</label>
            <select class="form-select" name="Artist_Gerne" >
                <option selected>Select Genre</option>
                <option value="1">Pop</option>
                <option value="2">Rock</option>
                <option value="3">Jazz</option>
            </select>
        </div>
        <input type="submit" value="Submit">

        <div class="input-group">
  	        <button type="submit" class="btn" name="crea_con">Next</button>
  	    </div>

        <div class="input-group">
  	        <button type="submit" class="btn" name="crea_con">Next</button>
  	    </div>
    
    </form>
    

</body>
</html>