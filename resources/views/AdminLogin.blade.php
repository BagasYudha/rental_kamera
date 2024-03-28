<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/adminlogin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap">
</head>

<body class="bg-gray-100 font-sans">

    <div class="login-admin">
        <div class="login-admin-inner">
            <form class="rectangle-parent">
                <div class="frame-child"></div>
                <div class="welcomeback-mimin-wrapper">
                    <h1 class="welcomeback-mimin">WelcomeBack Mimin!</h1>
                </div>
                <div class="id-admin-parent">
                    <b class="id-admin">ID Admin</b>
                    <div class="rectangle-group">
                        <div class="frame-item"></div>
                        <input class="masukan-id-admin shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukan ID Admin" type="text">
                    </div>
                </div>
                <div class="password-parent">
                    <b class="password">Password</b>
                    <div class="rectangle-container">
                        <div class="frame-inner"></div>
                        <input class="masukan-password shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukan Password" type="password">
                    </div>
                </div>
                <button type="submit" class="group-button">
                    <div class="rectangle-div" id="rectangle"></div>
                    <b class="masuk">Masuk</b>
                </button>
            </form>
        </div>
        <div class="ellipse-parent">
            <div class="ellipse-div"></div>
            <img class="c002-xa75-primary-1-icon" loading="lazy" alt="" src="media/imageadminlogin.png">
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var form = document.querySelector(".login-admin form");
            form.addEventListener("submit", function(e) {
                e.preventDefault(); // Mencegah form untuk submit secara default

                // Mendapatkan nilai dari input ID Admin dan Password
                var idAdminInput = document.querySelector(".masukan-id-admin");
                var passwordInput = document.querySelector(".masukan-password");
                var idAdmin = idAdminInput.value.trim();
                var password = passwordInput.value.trim();

                // Lakukan verifikasi dengan data dari empas.txt
                // Perlu menggunakan AJAX atau server-side scripting (PHP, Python, dll.)
                // Di sini saya akan membuat contoh sederhana menggunakan JavaScript
                fetch("config.php")
                    .then(response => response.text())
                    .then(data => {
                        var [storedIdAdmin, storedPassword] = data.split("\n");

                        if (idAdmin === storedIdAdmin.trim() && password === storedPassword.trim()) {
                            // Jika kredensial benar, redirect ke halaman dashboard.php
                            window.location.href = "dashboard.php";
                        } else {
                            // Jika kredensial salah, tampilkan pesan kesalahan atau lakukan tindakan lain
                            alert("ID Admin atau Password salah. Silakan coba lagi.");
                            // Atau Anda bisa menampilkan pesan kesalahan pada elemen HTML tertentu
                            // Contoh:
                            // var errorMessageElement = document.querySelector(".error-message");
                            // errorMessageElement.textContent = "ID Admin atau Password salah. Silakan coba lagi.";
                        }
                    })
                    .catch(error => {
                        console.error("Terjadi kesalahan:", error);
                        // Handle error, misalnya dengan menampilkan pesan kesalahan
                        // Contoh:
                        // alert("Terjadi kesalahan. Silakan coba lagi nanti.");
                    });
            });
        });
    </script>

</body>

</html>
