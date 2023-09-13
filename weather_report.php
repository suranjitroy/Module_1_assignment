<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Weather Report Project</title>
</head>
<body>
    <div class="container">
    <h2>Weather Report</h2>
        <div class ="row m-auto">
            <div class="col-md-6">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="number">Temperature</label>
                    <input type="text" class="form-control" name="temperature">
                </div>
                <button type="submit" class="btn btn-primary">Check</button>
            </form>
            <?php

        if($_SERVER['REQUEST_METHOD'] == "POST"){

            $temperature_degree = $_POST['temperature'];

            if($temperature_degree >=-5 && $temperature_degree <= 10){
                echo "<h3 class='mt-3'> {$temperature_degree}°C It's freezing!</h3>";
            }else if($temperature_degree >=11 && $temperature_degree <= 20){
                echo "<h3 class='mt-3'> {$temperature_degree}°C It's cool.</h3>";
            }else if($temperature_degree >=21 && $temperature_degree <= 20){
                echo "<h3 class='mt-3'> {$temperature_degree}°C It's warm.</h3>";
            }
            else{
                echo "<h3 class='mt-3'> {$temperature_degree}°C It's hot.</h3>";
            }

        }

    ?>

            </div>
        </div>
    </div>


</body>
</html>
