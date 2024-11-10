<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link href="styles/form.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="parentContainer">
        <div class="container">
        <h3>Fill the form bellow</h3>
        <form action="dblogin.php" method="post">
                <p>
                    <label>Nama Lengkap :</label>
                    <input type="text" name="nama" placeholder="Your name" id="nama"/>
                </p>
                <p>
                    <label>Gmail</label>
                    <input type="text" name="email" placeholder="@gmail.com" id="gmail"/>
                </p>
                <p>
                    <label>Password</label>
                    <input type="text" name="password" placeholder="081212121212" id="phone"/>
                </p>
                <p>
                    <input class="button" id="buttonLogin" type="submit" name="submit" value="Log In" />
                </p>
        </form>
        </div>
    </div>
    <script src="index.js"></script>
</body>
</html>