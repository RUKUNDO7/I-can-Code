<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $username =htmlspecialchars($_POST['username']);
        $email =htmlspecialchars($_POST['email']);
        $phone =htmlspecialchars($_POST['phone']);
        $password =htmlspecialchars($_POST['password']);
        $age =htmlspecialchars($_POST['age']);
        $terms =isset($_POST['terms']) ? 'Agreed' : 'Not agreed';
        echo "<h2>Form Submission Details</h2>";
        echo "Username: " . $username . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Phone: " .$phone . "<br>";
        echo "Password: " .$password . "<br>";
        echo "Age " . $age . "<br>";
        echo "Terms and Conditions: " .$terms . "<br>";
    } else {
        echo "Invalid request method.";
    }
        
    ?>
    
</body>
</html>