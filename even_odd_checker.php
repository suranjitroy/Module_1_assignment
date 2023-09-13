<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Even and Odd Number Project</title>
</head>
<body>
    <div class="container">
    <h2>Even or Odd Number Checking Form</h2>
        <div class ="row m-auto">
            <div class="col-md-6">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="number">Pls input here Number</label>
                    <input type="text" class="form-control" name="number">
                </div>
                <button type="submit" class="btn btn-primary">Check</button>
            </form>
            <?php

        if($_SERVER['REQUEST_METHOD'] == "POST"){

            $number = $_POST['number'];
            $isNumber =  $number % 2 ; 

            if($isNumber == 0){
                echo "<h3 class='mt-3'> {$number} is an Even Number.</h3>";
            }else{
                echo "<h3 class='mt-3'> {$number} is an Odd Number.</h3>";
            }

        }

    ?>

            </div>
        </div>
    </div>


</body>
</html>
