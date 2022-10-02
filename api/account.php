<?php
    $host     = "localhost";//Ip of database, in this case my host machine    
    $user     = "root";	//Username to use
    $pass     = "usbw";//Password for that user
    $dbname   = "helpline";//Name of the database

    //https://www.campcodes.com/tutorials/php-tutorials/simple-login-using-pdo-in-php-mysql/#Creating_Database

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //$sql = "SELECT Password From accounts WHERE Username='" . $_POST["username"]. "'";
        $sql = "SELECT * FROM accounts";

        echo $sql . "<br>";
        $result = $conn->query($sql);

        echo $conn->query($sql);

        if ($_POST["password"] == $result ) {
            echo "workign";
        } else {
            echo "not";
        }

        
    
    }catch(PDOException $e)
    {
      echo $e->getMessage();                         
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <h1> hi <?php echo "hi"; ?>
</body>
</html>
