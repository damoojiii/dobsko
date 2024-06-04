<?php
    include "conn.php";

    if(isset($_POST['submit']))
    {
        $lastName = $_POST['lastName'];
        $firstName = $_POST['firstName'];
        $email = $_POST['email'];
        $phoneNum = $_POST['phoneNum'];

        $sql = "INSERT INTO members_tbl (`memberID`, `lastName`, `firstName`, `email`, `phoneNum`) VALUES (NULL,'$lastName','$firstName','$email','$phoneNum')";

        $result = mysqli_query($conn, $sql);

        if($result)
        {
          echo'<script>alert("New record created successfully");</script>';
          echo'<script>window.location.href="admin.php";</script>';
        }
        else
        {
            echo "Failed: " . mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>
    <div class="container">
        <h3>Add new homeowner</h3>
        <form action="#" method="post">
                <div class="input-box">
                    <label>Last Name</label>
                    <input type="text" name="lastName" placeholder="Enter Last Name">
                </div>
                <div class="input-box">
                    <label>First Name</label>
                    <input type="text" name="firstName" placeholder="Enter First Name">
                </div>
                <div class="input-box">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Enter Email">
                </div>
                <div class="input-box">
                    <label>Phone Number</label>
                    <input type="text" name="phoneNum" placeholder="Enter Unit Address">
                </div>
            <button type="submit" name="submit">Save</button>
            <button type="button" onclick="location.href='admin-dashboard.php'" id="cancelBtn">Cancel</button>
        </form>
    </div>
</body>
</html>