<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Calculator</title>
</head>
<body>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $num1 = $_POST['num1'];
      $operator = $_POST['operator']; 
      $num2 = $_POST['num2']; 
      if ($operator == "+") { 
        $result = $num1 + $num2; 
    } elseif ($operator == "-") { 
        $result = $num1 - $num2;
     } elseif ($operator == "*") { 
        $result = $num1 * $num2; 
    } elseif ($operator == "/") { 
        if ($num2 != 0) { 
         $result = $num1 / $num2;
         } else { $result = "Error: Division by zero"; 
        } 
    } else {
         $result = "Invalid operator"; } 

    echo "<h3>Result: $result</h3>"; }

    ?>
    <a href="calculator.html">Calculate another</a>
</body>
</html>