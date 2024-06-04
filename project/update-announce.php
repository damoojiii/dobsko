<?php
    include "dbConn.php";
    $id = $_GET['id'];

    if(isset($_POST['submit']))
    {
      $lastName = $_POST['lastName'];
      $firstName = $_POST['firstName'];
      $email = $_POST['email'];
      $unitAdd = $_POST['unitAdd'];

      $sql = "UPDATE `homeowners_tbl` SET `lastName`='$lastName',`firstName`='$firstName',`email`='$email',`unitAdd`='$unitAdd' WHERE userID=$id";

      $result = mysqli_query($conn, $sql);

      if($result)
      {
        echo'<script>alert("Edit Successful");</script>';
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
    <link rel="stylesheet" href="addReg.css">
</head>
<body>
  <?php
        
        $sql = "SELECT * FROM `homeowners_tbl` WHERE userID = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
  ?>
    <div class="container">
        <h3>Add new homeowner</h3>
        <form action="#" method="post">
                <div class="input-box">
                    <label>Last Name</label>
                    <input type="text" name="lastName" value="<?php echo $row['lastName'] ?>">
                </div>
                <div class="input-box">
                    <label>First Name</label>
                    <input type="text" name="firstName" value="<?php echo $row['firstName'] ?>">
                </div>
                <div class="input-box">
                    <label>Email</label>
                    <input type="email" name="email" value="<?php echo $row['email'] ?>">
                </div>
                <div class="input-box">
                    <label>Unit Address</label>
                    <input type="text" name="unitAdd" value="<?php echo $row['unitAdd'] ?>">
                </div>
            <button type="submit" name="submit">Update</button>
            <button type="button" onclick="location.href='admin.php'" id="cancelBtn">Cancel</button>
        </form>
    </div>
</body>
</html>
