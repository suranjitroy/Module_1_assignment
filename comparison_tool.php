<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Comparison Number Project</title>
</head>
<body>
    <div class="container">
    <h2>Comparison Number Form</h2>
        <div class ="row m-auto">
            <div class="col-md-6">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="number">Pls input here Number</label>
                    <input type="text" class="form-control" name="number1">
                </div>
                <div class="form-group">
                    <label for="number">Pls input here Number</label>
                    <input type="text" class="form-control" name="number2">
                </div>
                <button type="submit" class="btn btn-primary">Show Large Number</button>
            </form>
            <?php

if ( $_SERVER['REQUEST_METHOD'] == "POST" ) {

    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    $number3 = $number1 > $number2;
    $number4 = $number1 < $number2;

    $large_number = ( $number3 == 1 ) ? "<h3 class='mt-3'>{$number1} Large Number</h3>" : (  ( $number4 == 1 ) ? "<h3 class='mt-3'>{$number2} Large Number</h3>" : "Nothing" );

    echo $large_number;

}

?>

            </div>
        </div>
    </div>


</body>
</html>
