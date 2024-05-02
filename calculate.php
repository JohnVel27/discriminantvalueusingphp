<!DOCTYPE html>
<html>
<head>
    <title>Quadratic Discriminant Result</title>
</head>
<body>
    <h2>Quadratic Discriminant Result</h2>

    <?php
    if(isset($_POST['submit'])){
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

       
        $discriminant = pow($b, 2) - (4 * $a * $c);

        echo "<p>The discriminant is: " . $discriminant . "</p>";
    } else {
        echo "<p>Error: Form was not submitted.</p>";
    }
    ?>

    <p><a href="index.php">Back to Calculator</a></p>
</body>
</html>
