<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quadratic Discriminant Calculator</title>
</head>
<body>
    <h2>Quadratic Discriminant Calculator</h2>
    <form method="post" action="">
        <label for="a">Enter coefficient a:</label>
        <input type="text" id="a" name="a" required><br><br>
        <label for="b">Enter coefficient b:</label>
        <input type="text" id="b" name="b" required><br><br>
        <label for="c">Enter coefficient c:</label>
        <input type="text" id="c" name="c" required><br><br>
        <input type="submit" value="Calculate Discriminant">
    </form>

    <?php
    // Function to calculate the discriminant
    function calculateDiscriminant($a, $b, $c) {
        return ($b * $b) - (4 * $a * $c);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        // Validate input
        if (!is_numeric($a) || !is_numeric($b) || !is_numeric($c)) {
            echo "<p>Please enter valid numeric coefficients.</p>";
        } else {
            // Calculate the discriminant
            $discriminant = calculateDiscriminant($a, $b, $c);

            // Display the result
            echo "<p>The discriminant of the quadratic equation $a*x^2 + $b*x + $c is: $discriminant</p>";
        }
    }
    ?>

</body>
</html>
