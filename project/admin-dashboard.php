<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="adminDash.css" />
  </head>
  <body>
    <div class="sidebar">
      <div class="logo"></div>
      <ul class="menu">
        <li class="active">
          <a href="#">
            <i class="fas fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa-solid fa-bullhorn"></i>
            <span>Update Announcement</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa-solid fa-calendar-days"></i>
            <span>Schedule</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa-solid fa-circle-exclamation"></i>
            <span>Complaints</span>
          </a>
        </li>
        <li class="logout">
          <a href="index.html">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="main-content">
      <div class="header-wrap">
        <div class="header-title">
          <span>Primary</span>
          <h2>Dashboard</h2>
        </div>
        <div class="user-info">
          <div class="search-box">
            <i class="fa-solid fa-search"></i>
            <input type="text" placeholder="Search" />
          </div>
        </div>
      </div>

      <div class="table-wrapper">
        <h3 class="main-title">Homeowners</h3>
        <div class="table-cont">
          <table>
            <thead>
              <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Unit Address</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                include "conn.php";
                $sql = "SELECT * FROM members_tbl";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result))
                {
                  ?>
                    <tr>
                      <td><?php echo $row['lastname'], $row['firstname'] ?></td>
                      <td><?php echo $row['email'] ?></td>
                      <td><?php echo $row['phoneNum'] ?></td>
                      <td><?php echo $row['unitAdd'] ?></td>
                      <td>
                        <a href="view.php?id=<?php echo $row['memberID']?>">
                          <i class="fa-solid fa-eye" style="font-size: 20px; color: black;"></i>
                        </a>
                        <a href="edit.php?id=<?php echo $row['memberID']?>">
                          <i class="fa-solid fa-pen-to-square" style="font-size: 20px; color: black;"></i>
                        </a>
                        <a href="delete.php?id=<?php echo $row['memberID']?>">
                          <i class="fa-solid fa-trash" style="font-size: 20px; color: black;"></i>
                        </a>
                      </td>
                    </tr>
                  <?php
                }
              ?>
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
