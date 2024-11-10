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
        <form action="dbregister.php" method="post">
                <p>
                    <label>Nama Lengkap :</label>
                    <input type="text" name="nama" placeholder="Your name" id="nama" />
                </p>
                <p>
                    <label>Gmail</label>
                    <input type="text" name="email" placeholder="@gmail.com" id="gmail"/>
                </p>
                <p>
                    <label>Gender</label>
                    <select name="gender" required>
                        <option value="male">Select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </p>
                <p>
                    <label>Password</label>
                    <input type="text" name="password" placeholder="University of Soedirman" id="university"/>
                </p>
                <p>
                    <input class="button" type="submit" name="submit" value="Register" />
                </p>
        </form>
        </div>
    </div>
    <script src="index.js"></script>
</body>
</html>