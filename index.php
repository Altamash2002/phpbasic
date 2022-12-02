<?php
    $insert = false;
    if (isset($_POST['name'])) {
        //(this one)1) mysqli(improved) extensions  2) php data objects for connecting with mysql.
        // set connection variables.
        $server = "localhost";
        $username = "root";
        $password = "";

        // create a connection
        $con = mysqli_connect($server,$username,$password);

        // check for connection succes 
        if (!$con) {
            die("Connection to this database failed due to " . mysqli_connect_error());
        }
        // echo "success connecting to the database";

        // connecting with our database
        // collect post variables
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $age = $_POST['age'];
        $description = $_POST['description'];

        $sql = "INSERT INTO `trip`.`form` (`name`, `email`, `phone`, `age`, `description`, `dt`) VALUES ('$name', '$email', '$phone', '$age', '$description', current_timestamp());";


        // object operator (->)
        // execute the query
        if ($con->query($sql) == true) {
            echo "successfully inserted the information <br>";
            $insert = true;
        }
        else {
            echo "ERROR: $sql <br> $con->error";
        }

        // close the database connection
        $con -> close();

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
            font-size: 30px;
            color: red;
        }
    </style>
</head>
<body>
    <?php
        if ($insert == true) {
            echo "<a id='submit-a' href='index.html'>Got to form</a>";
        }
    ?>
</body>
</html>

