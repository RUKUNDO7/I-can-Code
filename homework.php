<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>
<body>
    <h2>Conversion Result</h2>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $celsius = $_POST["celsius"];
        $fahrenheit = ($celsius * 9/5) + 32;
        echo "<p>$celsius degrees Celsius is equal to $fahrenheit degrees Fahrenheit. </p>";
    }
    ?>
    <a href="homework.html">Convert another</a>
</body>
</html>