<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Letter Grade Project</title>
</head>
<body>
    <div class="container">
    <h2>Calculate Your Letter Grade</h2>
        <div class ="row m-auto">
            <div class="col-md-6">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="number">Sujective</label>
                    <input type="text" class="form-control" name="subject">
                </div>
                <div class="form-group">
                    <label for="number">Objective</label>
                    <input type="text" class="form-control" name="object">
                </div>
                <div class="form-group">
                    <label for="number">Practicale</label>
                    <input type="text" class="form-control" name="practicale">
                </div>
                <button type="submit" class="btn btn-primary">Show Your Grade</button>
            </form>
            <?php
if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

    $subjective_mark = $_POST['subject'];
    $objective_mark  = $_POST['object'];
    $practicale_mark = $_POST['practicale'];

    $total_mark = $subjective_mark + $objective_mark + $practicale_mark;
    ?>
    <h5 class="mt-2">
    <?php
        echo "Subjective = " . $subjective_mark . "<br>";
        echo "Objective  = " . $objective_mark . "<br>";
        echo "Practicale = " . $practicale_mark . "<br>";
    ?>
    </h5>
    <?php
if ( $total_mark >= 80 && $total_mark <= 100 ) {
        echo "<h3 class='mt-3'>Your total marks {$total_mark} and You got : A+ </h3>";
    } else if ( $total_mark >= 70 && $total_mark <= 79 ) {
        echo "<h3 class='mt-3'>Your total marks {$total_mark} and You got : A </h3>";
    } else if ( $total_mark >= 60 && $total_mark <= 69 ) {
        echo "<h3 class='mt-3'>Your total marks {$total_mark} and You got : A- </h3>";
    } else if ( $total_mark >= 50 && $total_mark <= 59 ) {
        echo "<h3 class='mt-3'>Your total marks {$total_mark} and You got : B </h3>";
    } else if ( $total_mark >= 40 && $total_mark <= 49 ) {
        echo "<h3 class='mt-3'>Your total marks {$total_mark} and You got : C";
    } else if ( $total_mark >= 33 && $total_mark <= 39 ) {
        echo "<h3 class='mt-3'>Your total marks {$total_mark} and You got : D </h3>";
    } else {
        echo "<h3 class='mt-3 text-danger'>Your total marks {$total_mark} and You are Fail </h3>";
    }

}

?>

            </div>
        </div>
    </div>
</body>
</html>


