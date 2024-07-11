<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # code...
    //variable
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    echo "the email that you enter is $email thanks";
    echo "<br>";
    echo "<br>";
    echo "the password that you enter is $password";
    echo '<button>close</button>';
}
else{
    echo "pleas this is not right";
}

?>
<script src="home.js"></script>
</body>
</html>