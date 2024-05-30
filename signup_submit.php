<?php
   include 'application.php'; 
    $full_name=$_POST['full_name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password= sha1($password);
    $phone=$_POST['phone'];
    $cateogary=$_POST['cateogary'];
   
    $sql = "SELECT * FROM users WHERE email='$email'";

    $result = mysqli_query($conn,$sql);
    if (!$result) {
        echo "Something went wrong";
        exit;
    }

    $row_count = mysqli_num_rows($result);
    if($row_count !=0){
        echo "This email id is already registered with us!";
        exit;
    }

    $sql = "INSERT INTO users(email , PASSWORD , full_name , phone , cateogary) VALUES ('$email', '$password', '$full_name', '$phone', '$cateogary')";

    $result = mysqli_query($conn,$sql);
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }

    echo "Registration successful";
    
    ?>
    <br/>
    <a href="nav.html">GO TO HOMEPAGE</a>
    <?php
    mysqli_close($conn);
?>