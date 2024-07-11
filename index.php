<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">
</head>

<body>
    <header>
        <!--
        we can use include_onc to don't make the website weak it is includes the file but if it does not exesst . it will contenue to the next group of code

        -->

        <?php
            include "php/header.php";
            // include_once "line.php";
        ?>
            
        
    </header>
    <section name="display" >
        <h1>Simple Search Engine</h1>
        <form method="POST">
            <input type="text" name="url" placeholder="Enter URL" required>
            <button type="submit">GO</button>
        </form>
        <form action="php/formhandling.php" method="post">
        <label for="eamil">
            email :
        </label>
        <input type="email" name="email" id="email">
        <br>
        <br>
        <label for="password">password :</label>
        <input type="password" name="password" id="password">
        <br>
        <br>
        <button type="submit">send</button>
    </form>
    </section>
    <footer>
        <?php
            include "php/footer.php"
        ?>
    </footer>
    


    <?php
    // file one task one
    $fruits = array("banana","strobary","tomato");

    foreach ($fruits as $key => $value) {
        # code...
        echo "<pre>";
        echo $value;
        echo "</pre>";
    }
    array_push($fruits,"orange");
    foreach ($fruits as $key => $value) {
        # code...
        echo "<pre>";
        echo $value;
        echo "</pre>";
    }
    unset($fruits[0],$fruits[0]);
    foreach ($fruits as $key => $value) {
        # code...
        echo "<pre>";
        echo $value;
        echo "</pre>";
    }
    for ($i=0; $i < count($fruits) ; $i++) { 
        # code...
        echo "<pre>";
        echo $value[$i];
        echo "</pre>";
    }
    // task2
    $people = array("name"=>"rashed","age"=>"20");
    foreach ($people as $key => $value) {
        # code...
        echo "<pre>";
        echo $key;
        echo "<br>";
        echo $value;
        echo "</pre>";
    }
    array_push($people, "ramy","24");
    foreach ($people as $key => $value) {
        # code...
        echo "<pre>";
        echo $key;
        echo "<br>";
        echo $value;
        echo "</pre>";
    }
    array_pop($people);
    for ($i=0; $i < count($people) ; $i++) { 
        # code...
        echo "<pre>";
        echo $value;
        echo "</pre>";
    }
    // task 3
    $student = array("name","age","grade");
    for ($i=0; $i < count($student) ; $i++) { 
        # code...
        echo "<pre>";
        echo $value;
        echo "</pre>";
    }


    // // file three
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $url = $_POST['url'];

        // Validate and format the URL
        if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
            $url = "http://" . $url;
        }

        // Redirect to the entered URL
        header("Location: " . $url);
        exit();
    }
    ?>




 


</body>

</html>