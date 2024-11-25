<?php
session_start(); // Memulai sesi

// Cek apakah user sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Koneksi ke database
include('koneksi-db.php');

// Ambil data user dari database
$user_id = $_SESSION['user_id'];
$sql = "SELECT id, nama_panggilan, nama_lengkap, email, telepon, alamat, foto_profil FROM pengguna WHERE id = :user_id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Jika data tidak ditemukan, redirect ke login
if (!$user) {
    session_destroy();
    header("Location: login.php");
    exit();
}

// Update data jika form edit disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_profile'])) {
    $nama_panggilan = $_POST['nama_panggilan'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];

    $foto_profil = $user['foto_profil']; // Simpan foto profil sebelumnya secara default

    // Proses upload foto jika ada file yang diunggah
    if (isset($_FILES['foto_profil']) && $_FILES['foto_profil']['error'] == UPLOAD_ERR_OK) {
        $file_tmp = $_FILES['foto_profil']['tmp_name'];
        $file_name = uniqid() . '_' . basename($_FILES['foto_profil']['name']);
        $upload_dir = 'uploads/';
        $upload_path = $upload_dir . $file_name;

        // Pindahkan file ke folder uploads
        if (move_uploaded_file($file_tmp, $upload_path)) {
            $foto_profil = $file_name; // Update nama file foto profil
        }
    }

    $update_sql = "UPDATE pengguna SET 
        nama_panggilan = :nama_panggilan, 
        nama_lengkap = :nama_lengkap, 
        telepon = :telepon, 
        alamat = :alamat, 
        foto_profil = :foto_profil 
        WHERE id = :user_id";
    $update_stmt = $conn->prepare($update_sql);
    $update_stmt->bindParam(':nama_panggilan', $nama_panggilan, PDO::PARAM_STR);
    $update_stmt->bindParam(':nama_lengkap', $nama_lengkap, PDO::PARAM_STR);
    $update_stmt->bindParam(':telepon', $telepon, PDO::PARAM_STR);
    $update_stmt->bindParam(':alamat', $alamat, PDO::PARAM_STR);
    $update_stmt->bindParam(':foto_profil', $foto_profil, PDO::PARAM_STR);
    $update_stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $update_stmt->execute();

    // Redirect kembali ke halaman profile setelah update
    header("Location: profile.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil</title>

    <link rel="stylesheet" href="edit-profile.css">

            <!-- Font 4 : "Playfair Display" -->
            <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nobile:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap"
      rel="stylesheet"/>

    <!-- Font 5 : "Poppins" -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nobile:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap"
      rel="stylesheet"/>
    
</head>
<body>
    <h1>Edit Profil</h1>

    <div class="container">
        <form method="POST" enctype="multipart/form-data">
            <label for="nama_panggilan">Nama Panggilan:</label>
            <input type="text" name="nama_panggilan" id="nama_panggilan" value="<?php echo htmlspecialchars($user['nama_panggilan']); ?>" required><br><br>

            <label for="nama_lengkap">Nama Lengkap:</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" value="<?php echo htmlspecialchars($user['nama_lengkap']); ?>" required><br><br>

            <label for="telepon">Nomor Telepon:</label>
            <input type="text" name="telepon" id="telepon" value="<?php echo htmlspecialchars($user['telepon']); ?>" required><br><br>

            <label for="alamat">Alamat:</label>
            <textarea name="alamat" id="alamat" rows="4"><?php echo htmlspecialchars($user['alamat']); ?></textarea><br><br>

            <label for="foto_profil">Foto Profil:</label>
            <input type="file" name="foto_profil" id="foto_profil"><br><br>

            <button type="submit" name="update_profile">Simpan Perubahan</button>

            <button name="update_profile" class="kembali">
            <a href="profile.php">Kembali ke Profil</a>
            </button>
        </form>


    </div>
    <br>
    
</body>
</html>

