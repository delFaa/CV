<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Mon CV</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./asset/css/style.css">
  </head>

  <body>
      <header>
        <div id="contacthead">
            <h1>Contact me</h1>

        </div>
      </header>

      <body>
        <div class="container">
        <div class="row">
        <div class="col-sm-6" style="align-right">
          <img src="./asset/images/profilepic.jpg" class="img-thumbnail" alt="profile picture">
        </div>
        <div class="col-sm-6">

          <br>
          <div id="goback">
            <a href="index.php">
            Go back
            </a>
          </div>
          <p>phone:
          +32 499 40 75 49</p>

          <p>Adress:
          beukenstraat, 129
          1630 Linkebeek</p>

          <h2>Leave a message</h2>
          <div class="form">
            <form action="./action_page.php" method="post">
              Your e-mail:<br>
              <input type="email" name="email"><br>
              Your Name<br>
              <input type="text" name="yourname"><br>
              Your message<br>
              <textarea name="message" rows="8" cols="30">
              </textarea><br>
              <input type="submit">
            </form>
          </div>

          <p></p>
          <ul class="social_icons">
            <li>
              Let's get social
            </li>
            <li>
              <a class="facebook" href="https://www.facebook.com/eli.df">
                  <img src="asset/images/facebook-6-16.png" alt="facebook link">
              </a>
            </li>
            <li>
              <a class="linkedin" href="https://www.linkedin.com/in/elisa-della-faille-20682896">
                <img src="asset/images/linkedin-3-16.gif" alt="linkedin link">
              </a>
            </li>
          </ul>
        </div>
        </div>
      </div>
        <?php include "include/footer.php" ?>
