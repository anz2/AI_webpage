<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Registration</title>
  <link rel="stylesheet" href="../stylesheets/foundation.css">
  <link rel="stylesheet" href="../stylesheets/app.css">
  <link rel="icon" href="../images/geo_flag.ico">
  <script src="../javascripts/modernizr.foundation.js"></script>
</head>
<body>
    <div class="row">
        <div class="twelve columns">
        <img src="../images/orange_logo.png" align="left" width=12% />
        <p align="center"><h2>Anz2's AI Website</h2></p>
        </div>
    </div>
    <div class="row">
        <form action="server_register.php" method="post"  autocomplete="off">
        <div>
            <h2>User Registration</h2>

            <label for="first_name"><b>First Name</b></label>
            <input id="first_name" type="text" placeholder="input first name" name="first_name" required>

            <label for="last_name"><b>Last Name</b></label>
            <input id="last_name" type="text" placeholder="input last name" name="last_name" required>

            <label for="user_name"><b>User</b></label>
            <input id="user_name" type="text" placeholder="input user" name="user_name" required>

            <label for="email"><b>E-Mail</b></label>
            <input id="email" type="text" placeholder="input email " name="email" required>

            <label for="password"><b>Password</b></label>
            <input id="password" type="password" placeholder="input password" name="password" required>

            <div>
                <button type="submit">Register</button>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="twelve columns">
        <hr />
        <p align="center">©2018 Anz2 Gozalishvili</p>
        </div>
    </div>
</body>