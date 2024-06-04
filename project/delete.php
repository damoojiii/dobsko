<?php
    include "conn.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM `members_tbl` WHERE memberID = $id";
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        header("Location: admin.php?msg=Record deleted");
    }
    else
    {
        echo "Failed: " . mysqli_error($conn);
    }
?>