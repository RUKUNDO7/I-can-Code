<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRADES</title>
</head>
<body>
    <div>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <p>YOUR MARKS' GRADES</p>
            <input type="number" name="number">
            <input type="submit" value="submit">
    </div>
        </form>
        <?php
        $num = null;
        if ($_SERVER["REQUEST_METHOD"]  == "POST" && isset($_POST["number"])) {
            $num = intval($_POST["number"]); 
            if($num <= 100 && $num >=90) {
                echo "GRADE A";
            }
            else if($num <=89&& $num >=80) {
                echo "GRADE B";
            }
            else if($num <=79&& $num >= 70) {
                echo "GRADE C";
            }
            else if($num <=69&& $num >=60) {
                echo "GRADE D";
            }
            else if($num <= 59&& $num >=50) {
                echo "GRADE E";
            }
            else if($num <= 49&& $num >= 40) {
                echo "GRADE F";
            } else  { 
                 echo "IMPROVE";
    }
}

            
        
        ?>
</body>
</html>