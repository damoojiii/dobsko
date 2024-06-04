<?php
    include "conn.php";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $lastName = $_POST['lastName'];
        $firstName = $_POST['firstName'];
        $email = $_POST['email'];
        $phoneNum = $_POST['phoneNum'];
        $password = $_POST['password'];
        $confirmPass = $_POST['confirmPass'];

        if($password != $confirmPass)
        {
            echo '<script>alert("Password and Confirm Password do not match.");</script>';
            echo '<script>alert("Please register again.");</script>';
            echo '<script>window.location.href="sayn-in.html";</script>';
        }
        else
        {
            $emailCheck = "SELECT * FROM members_tbl WHERE email = '$email'";
            $emailCheck_result = $conn -> query($emailCheck);

            if($emailCheck_result -> num_rows >  0)
            {
                echo '<script>alert("Email already exist");</script>';
                echo '<script>window.location.href = "login.php";</script>';
            }
            else
            {
                $hashedPass = password_hash($password, PASSWORD_DEFAULT);

                $sql = "INSERT INTO `members_tbl`(`memberID`, `lastName`, `firstName`, `email`, `phoneNum`, `password`) VALUES (NULL,'$lastName','$firstName','$email','$phoneNum','$hashedPass')";

                if($conn -> query($sql) === TRUE)
                {
                    echo '<script>alert("Register successfully");</script>';
                    echo '<script>window.location.href = "sayn-in.html";</script>';
                }
            }
        }
    }

    $conn -> close();

?>