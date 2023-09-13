<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Temperature Project</title>
</head>
<body>
    <div class="container">
    <h2>Temperature Converter</h2>
        <div class ="row m-auto">
            <div class="col-md-6">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="number">Temperature</label>
                    <input type="text" class="form-control" name="number">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Convert Temperature</label>
                    <select class="form-control" name="con_temp">
                    <option> Select</option>
                    <option value="Celsius"> Celsius to Fahrenheit</option>
                    <option value="Fahrenheit"> Fahrenheit to Celsius</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Convert</button>
            </form>
            <?php

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

    $temp     = $_POST['number'];
    $con_temp = $_POST['con_temp'];

    $celsius    = ( $temp - 32 ) * 5 / 9;
    $fahrenheit = ( $temp * 9 / 5 ) + 32;

    switch ( $con_temp ) {
    case 'Celsius':?>
        <h3 class ="mt-3"><?php echo "Celsius : " . $celsius . "°C";?></h3>
       <?php break;
    case 'Fahrenheit':?>
        <h3 class ="mt-3"><?php echo "Fahrenheit : " . $fahrenheit . "°F";?></h3>

    <?php }

}

?>

            </div>
        </div>
    </div>


</body>
</html>


<?php
/*
$temperature = 25;
$fahrenheit = ($celsius * 9/5) + 32;

echo "Celsius:". $celsius."°C"."<br>";
echo "Fahrenheit:". $fahrenheit."°F"."<br>";
 */
?>