<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>House Homes</title>

    <link rel="stylesheet" href="user-page.css" />
  </head>
  <body>
    <header>
      <nav>
        <div class="logo">
          <a href="#">House Homes</a>
        </div>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Home</a></li>
        </ul>
        <img src="user-profile.png" class="prof-pic" onclick="toggleMenu()" />

        <div class="sub-menu-wrap" id="sub-menu">
          <div class="sub-menu">
            <?php
              include "conn.php";
              $sel = "SELECT * FROM members_tbl";
              $query = mysqli_query($conn, $sel);
              $result = mysqli_fetch_assoc($query);
            ?>

            <div class="user-info">
              <img src="user-profile.png" />
              <h2>
                <?php echo $result['email']?>
              </h2>
            </div>
            <hr />

            <a href="#" class="sub-link">
              <span>
                <img src="profile.png" />
              </span>
              <p>Edit Profile</p>
            </a>

            <a href="#" class="sub-link">
              <span>
                <img src="setting.png" />
              </span>
              <p>Settings & Privacy</p>
            </a>

            <a href="#" class="sub-link">
              <span>
                <img src="help.png" />
              </span>
              <p>Help & Support</p>
            </a>

            <a href="index.html" class="sub-link">
              <span>
                <img src="logout.png" />
              </span>
              <p>Logout</p>
            </a>
          </div>
        </div>
      </nav>
    </header>

    <section>
      <div class="img-slider">
        <div class="slide active">
          <img src="announce.png" alt="" />
          <div class="info">
            <h2>Announcement</h2>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam
              veniam magni molestias deleniti rerum molestiae dolores, tenetur
              animi quam debitis maiores nemo cupiditate consequuntur? Soluta
              odit labore architecto necessitatibus consequuntur?
            </p>
          </div>
        </div>

        <div class="slide">
          <img src="announce.png" alt="" />
          <div class="info">
            <h2>Announcement</h2>
            <p>HAHAHAHAHAHAHAHHAAHHA</p>
          </div>
        </div>

        <div class="slide">
          <img src="announce.png" alt="" />
          <div class="info">
            <h2>Announcement</h2>
            <p>HEHEHEHEHEHEHEHEHEHEHEHE</p>
          </div>
        </div>

        <div class="nav">
          <div class="btns active"></div>
          <div class="btns"></div>
          <div class="btns"></div>
        </div>
      </div>
    </section>

    <script src="script.js"></script>
  </body>
</html>
