<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aksara Suara Studio | Agenda Budaya </title>
    <link rel="stylesheet" href="tiket-acara-kesenian.css">
    <link rel="icon" href="../gambar/pngwing.com.png" type="image/png" sizes="16x16">

        <!-- Font 1 : "Roboto Serif"-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap" rel="stylesheet">

        <!-- Font 2 : "Nobile"-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nobile:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap" rel="stylesheet">

    <!-- Font 3 : "Open Sans" -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nobile:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap" rel="stylesheet">

    <!-- Font 4 : "Playfair Display" -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nobile:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap" rel="stylesheet">

    <!-- Font 5 : "Poppins" -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nobile:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap" rel="stylesheet">
</head>

<body>
    
    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="logo">
            <a href="../../Aksara_Suara_Website.html"><img src="../gambar/pngwing.com.png" alt="Logo"></a>
        </div>
        
        <div class="hamburger" id="hamburger-menu">
            <a href="javascript:void(0);">&#9776;</a> <!-- Simbol hamburger -->
        </div>
    
        <ul class="categories" id="categories">
            <li><a href="../../Aksara_Suara_Website.html">Beranda</a></li>
            <li class="dropdown">
                <a href="#">Kategori</a>
                <ul class="dropdown-menu">
                    <li><a href="tiket-acara-kesenian.php">Tiket Acara Kesenian Nusantara</a></li>
                    <li><a href="pakaian-adat-tradisional.php">Pakaian Adat Tradisional</a></li>
                    <li><a href="kerajinan-tangan.php">Kerajinan Tangan Tradisional</a></li>
                </ul>
            </li>
            <li><a href="#">Agenda Budaya</a></li>
            <li><a href="artikel.html">Artikel</a></li>
            <li><a href="tentang-kami.html">Tentang Kami</a></li>
        </ul>
    
        <div class="search-profile-container" id="search-profile-container">
            <div class="search-box" id="search-box">
                <input type="text" placeholder="Ketik...">
                <button type="submit"><b>Cari</b></button>
            </div>
            <div class="search-icon" id="search-icon">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAABaUlEQVR4nO2Wz0pCQRjFf2i6ydop9ArZO1T7FhrlK0TSH+spxNcw61GCaJMFJZn71rqolfHBufBtwjtzLxLkgYELM+ecud98cxhY4Q+hDLSAW+ANmGnY90BztiZXHAIfwHzBGAPNPAwLQM8JPwEXwDawrlEHLoGhW9cVNxo9CX0BJwvEbO5UaxPz6PLOJbQbwNtz5o1Q07I7U/vTULTFfQdKIcSWO9OYsyoCz9I4CiHeiXROPDrSuAkhjUSy7o1FXRp2z1NjKlIlg/GGNKbLNt6MMR7lUOod19mpMRDJEikW19Lox1ynYYbr9CKN49AAGYtoMRiKM3EnwFooueki02IwLfaBb3EPiETXmbdVwt9Q1J8mpp9ANda44MznisGOwqGiYd175c40MU3W18iAhq7FoofAROWtuqzObF5S4Fv2vioYZtpQX93rG6mWp3koqu5lYpvd4r+Y11zZH5ZpnJg/AvfLNl4Bww/dcoIlpDH7/gAAAABJRU5ErkJggg==">
            </div>
            <div class="profile">
                <a href="#">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACZElEQVR4nO2ZPWtUQRSGHxNdiaZQxEpIndhpq6CNJloIJkgKg4VoERQtoiR+INFGC8mfkGisxcq/EPwKiPErWgQLCwUXRaO54cB7YVgkubOz7owyDwwsd89575mvO2dmIJP5Z6gBw8A94CVQV7Hfd/Wf2STNMeAdUKxR3gJDJEgnMOUE+hg4C/QBm1X69OyJY3dbvskwpcC+AyeBdavYdgCnZFtWJpnhVADfgD0efnudygwSmZozJ6wnfDkt3zexPwDDzpywIeOL+TyVhvVsNGYUxJkAjXPSmCYi8wqiN0BjpzRsnYnGVwXRHaDRLQ3Tika5HqSi0zS5Ig3kHmkVeWilNrS+KIAtARpbpfGZiDxXELsCNHZLw9L7aEwriAsBGhelcYeIHFIQ8wFJ4ytpDBCRTqXgFsh4E/4T8n2dwk5xP7AM/PBsVbP9CfwG9pEIN9SyS8BoBftR2ZrPdRJj3GM9KO1ukSiFZ0WSpcgVSYzif+iR7c4h3VqU51nbSIwBYEHBPahg/9BZCPuJTA0YAWadoWJnVDsq+PYALxy/WWnVaCM2HC4Bi04gH4ExYKOHzibgKvDJ0VmU9l8dctZa5509SJks2rOuAF2r/AlgztG1o6HJQN0/crDh3uORnq126u6LafVLu3zPB+Bwq15wRYldoVZrx+Q8ADzTO5fVO0FMSuwXcK3NqXYHcNlJLm82K3RErbGkU/dYDCrdt1iONjOxFwI2TK1mTLG89/1EH5ejTfANxGe9LlALrTeVuS8n2zCltnmb8XEqax89fWhIg8prusrUK9yVxyp1n4oUiZdMJoMfK+YhJaCnoLnkAAAAAElFTkSuQmCC">
                </a> 
            </div>
        </div>
    </nav>
    
    <!-- Menu Overlay -->
    <div class="menu-overlay" id="menu-overlay">
        <div class="overlay-content">
            <span class="closebtn" id="close-btn">&times;</span>
            <ul class="overlay-menu">
                <li><a href="/">Beranda</a></li>
                <li class="dropdown">
                    <a href="#">Kategori</a>
                    <ul class="dropdown-menu">
                        <li><a href="tiket-acara-kesenian.php">Tiket Acara Kesenian Nusantara</a></li>
                        <li><a href="#">Pakaian Adat Tradisional</a></li>
                        <li><a href="kerajinan-tangan.html">Kerajinan Tangan Tradisional</a></li>
                    </ul>
                </li>
                <li><a href="#">Agenda Budaya</a></li>
                <li><a href="#">Artikel</a></li>
                <li><a href="tentang-kami.html">Tentang Kami</a></li>
                <li>
                    <div class="search-box">
                        <input type="text" placeholder="Ketik...">
                        <button type="submit"><b>Cari</b></button>
                    </div>
                </li>
            </ul>
        </div>
    </div>


    <!-- HALAMAN BANNER -->
    <div class="halaman-pertama">

        <img src="../gambar/Keperluan-projek/ACARA-KESENIAN/banner-acara-kesenian-ogoh-ogoh.jpg">

        <h1>AKSARA SUARA / TIKET ACARA KESENIAN</h1>
    </div>



    <?php
// Sertakan file koneksi ke database
include('koneksi-db.php');
?>

<!-- SECTION ACARA -->
<?php
$sql = "SELECT * FROM tiket_acara_kesenian";
$result = $conn->query($sql);

// Periksa jika data ditemukan dan tampilkan
if ($result && $result->rowCount() > 0) {  // Ganti num_rows dengan rowCount() untuk PDO
    echo '<div class="container">';  // Menambahkan container di sini

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="barang">
                <img src="../gambar/Keperluan-projek/ACARA-KESENIAN/' . $row['gambar'] . '" alt="Barang ' . $row['ID'] . '">
                <h3>"' . $row['judul'] . '"</h3>
                <p>' . $row['deskripsi'] . '</p>
                <div class="info">
                    <div class="info-item">
                        <img src="../gambar/Keperluan-projek/Icon/Location.png" alt="Lokasi Icon" class="icon">
                        <span>' . $row['lokasi'] . '</span>
                    </div>
                    <div class="info-item">
                        <img src="../gambar/Keperluan-projek/Icon/Calender.png" alt="Tanggal Icon" class="icon">
                        <span>' . $row['tanggal'] . '</span>
                    </div>
                    <div class="info-item">
                        <img src="../gambar/Keperluan-projek/Icon/price.svg" alt="Harga Icon" class="icon">
                        <span>' . $row['harga'] . '</span>
                    </div>
                </div>
                <a href="#"><button class="selengkapnya">Selengkapnya >></button></a>
            </div>';
    }

    echo '</div>'; // Tutup div container

} else {
    echo "Tidak ada acara yang ditemukan.";
}
?>

<!-- Tidak perlu memanggil $conn->close() pada PDO -->


    


    <script src="tiket-acara-kesenian.js"></script>
</body>
</html>