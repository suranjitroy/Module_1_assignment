<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Calculator Project</title>
</head>
<body>
    <div class="container">
    <h2>Basic Arithmetic Operation in Calculator</h2>
        <div class ="row m-auto">
            <div class="col-md-6">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="number">1st Number</label>
                    <input type="text" class="form-control" name="number1">
                </div>
                <div class="form-group">
                    <label for="number">2nd Number</label>
                    <input type="text" class="form-control" name="number2">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Calculate Selection</label>
                    <select class="form-control" name="calculate_select">
                    <option>Select</option>
                    <option value="Addition"> Addition</option>
                    <option value="Subtraction"> Subtraction</option>
                    <option value="Multiplication"> Multiplication</option>
                    <option value="Division"> Division</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Calculate</button>
            </form>
            <?php
if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

    $number1          = $_POST['number1'];
    $number2          = $_POST['number2'];
    $calculate_select = $_POST['calculate_select'];

    $addition       = $number1 + $number2;
    $subtraction    = $number1 - $number2;
    $multiplication = $number1 * $number2;
    $division       = $number1 / $number2;

    ?>
    <h5 class="mt-2">

    <?php
echo "1st Number : " . $number1 . "<br>";
    echo "2nd Number : " . $number2 . "<br>";
    echo "Calculate Selection : " . $calculate_select . "<br>";
    ?>

    </h5>
    <?php
if ( $calculate_select == 'Addition' ) {
        echo "<h3 class='mt-3'>Total Number is :  {$addition}  </h3>";
    } else if ( $calculate_select == 'Subtraction' ) {
        echo "<h3 class='mt-3'>Total Number is :  {$subtraction}  </h3>";
    } else if ( $calculate_select == 'Multiplication' ) {
        echo "<h3 class='mt-3'>Total Number is :  {$multiplication}  </h3>";
    } else if ( $calculate_select == 'Division' ) {
        echo "<h3 class='mt-3'>Total Number is :  {$division}  </h3>";
    }
}

?>

            </div>
        </div>
    </div>
</body>
</html>


