<?php
   include 'application.php'; 

    $email=$_POST['email'];
    $password=$_POST['password'];
    $password= sha1($password);
    
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }

    $row = mysqli_fetch_assoc($result);
    if ($row) {
        echo "Hello " . $row['full_name'] . "<br/>";

   $_SESSION['user_id'] = $row['id'];
   $_SESSION['full_name'] = $row['full_name'];

  ?>
   <a href="index.php">Go to HomePage</a>
   <?php
    } else {
        echo "Login Failed<br/>";
    }

    mysqli_close($conn);

?>