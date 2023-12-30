<?php
    

    // Database configuration
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tree";
    $port = 3306; // Use the actual port number if different

    try {
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname, $port);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if form is submitted
        if(isset($_POST['userName']) && isset($_POST['password'])){
            $userid = $_POST['userName'];
            $password = $_POST['password'];
            
            if($userid == 'rushi@gmail.com' && $password == '12345678') {
                echo "<script> alert('Login Successful');
                              window.location='dashboard.html';
                    </script>";
            }
        }

        // Close connection
        $conn->close();

    } catch (Exception $e) {
        // Handle any other exceptions
        echo "Error: " . $e->getMessage();
    }
?>