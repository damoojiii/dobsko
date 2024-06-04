<?php
    include "conn.php";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM members_tbl WHERE email = '$username' AND password = '$password'";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);

        if($row["userType"] == "admin")
        {
            echo '<script>alert("Welcome Admin!");</script>';
            echo '<script>window.location.href="admin-dashboard.php";</script>';
        }
        else
        {
            echo '<script>alert("Welcome!");</script>';
            echo '<script>window.location.href="user-page.php";</script>';
        }
    }
    
?>