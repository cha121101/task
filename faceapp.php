<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Face App</title>
</head>
<body>
    <h1>Face App</h1>
    <form  method = get>
    <label for="ImgSize">Select Size of Photo:</label>
     <input type="range" id="ImgSize" name="ImgSize"  min="0" max="100" step="10">
    <br><br>
    <label for="BColor">Select Boarder Color:</label>
    <input type="color" name="BColor" id="BColor">
    <br><br>
    <input type="submit" name="Process">
    <br><br>
    <?php
    if(isset($_GET['Process'])){
        $ImageRangeSize = $_GET['ImgSize'];
        $border = $_GET['BColor'];
    }
    ?>
  
  <img src="tarpulin.jpg" style="width: <?php echo $ImageRangeSize . '%'; ?>;border-color: <?php echo $border; ?>;border-width: 5px; border-style: solid;">

    </form>





</body>
</html>