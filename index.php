<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Sign In.</title>
    <link rel="stylesheet" href="stylesheets/foundation.css">
    <link rel="stylesheet" href="stylesheets/app.css">
    <link rel="icon" href="images/geo_flag.ico">
</head>

<body>
    <div class="row">
        <div class="twelve columns">
            <img src="images/orange_logo.png" align="left" width=12% />
            <p align="center">
                <h2>Anz2's AI Website</h2>
            </p>
        </div>
    </div>
    <div class="row">
        <form action="php/validate_user.php" method="post" />
            <div>
                <h1>Sign In</h1>

                <label for="user_name"><b>User Name</b></label>
                <input id="user_name" type="text" placeholder="input user name" name="user_name" required>

                <label for="password"><b>Password</b></label>
                <input id="password" type="password" placeholder="input password" name="password" required>

                <div>
                    <button type="button" onclick="location.href='php/register.php'">register</button>
                    <button type="submit">sign in</button>
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
