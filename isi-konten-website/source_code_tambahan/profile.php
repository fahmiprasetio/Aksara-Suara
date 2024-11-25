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
$sql = "SELECT id, nama_panggilan, nama_lengkap, email, telepon, alamat, foto_profil 
FROM pengguna WHERE id = :user_id";

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

    $update_sql = "UPDATE pengguna SET nama_panggilan = :nama_panggilan, nama_lengkap = :nama_lengkap, 
    telepon = :telepon, alamat = :alamat WHERE id = :user_id";
    $update_stmt = $conn->prepare($update_sql);
    $update_stmt->bindParam(':nama_panggilan', $nama_panggilan, PDO::PARAM_STR);
    $update_stmt->bindParam(':nama_lengkap', $nama_lengkap, PDO::PARAM_STR);
    $update_stmt->bindParam(':telepon', $telepon, PDO::PARAM_STR);
    $update_stmt->bindParam(':alamat', $alamat, PDO::PARAM_STR);
    $update_stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $update_stmt->execute();

    // Refresh data setelah update
    header("Location: profile.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
    
    <link rel="stylesheet" href="profile.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">



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

    <div class="container">


        <?php if ($user['foto_profil']): ?>
            <img src="uploads/<?php echo htmlspecialchars($user['foto_profil']); ?>" alt="Foto Profil" style="width:15vw;height:32vh;border-radius:50%;"><br><br>


        <?php else: ?>
            <!-- Jika tidak ada foto profil -->
            <div class="profile-frame"> <img src="../gambar/Keperluan-projek/profile-kosong.jpg" alt="Foto Default" class="default-profile"></div>
        <?php endif; ?>

        <h1>Selamat datang, <?php echo htmlspecialchars($user['nama_panggilan']); ?>!</h1> 

        <div class="welcome-line"></div>

        <div class="profile-info">
            
            <p>Nama Lengkap:</p>

            <div class="info-box">
                <?php echo htmlspecialchars($user['nama_lengkap']); ?>
            </div>
        </div>
        
        <div class="profile-info">
            
            <p>Email:</p>

            <div class="info-box">
            <?php echo htmlspecialchars($user['email']); ?>
            </div>
        </div>
        
        <div class="profile-info">
            
            <p>Nomor Telepon:</p>

            <div class="info-box">
            <?php echo htmlspecialchars($user['telepon']); ?>
            </div>
        </div>
        
        <div class="profile-info">
            
            <p>Alamat:</p>

            <div class="info-box">
            <?php echo htmlspecialchars($user['alamat'] ?? "Belum diinputkan"); ?>
            </div>
        </div>

        



        
        <div class="button-container">
            <!-- Tombol Edit Profil -->
            <a href="edit_profile.php" class="button-1">
                <i class="fas fa-edit"></i> Edit Profil
            </a>
            
            <!-- Tombol Logout -->
            <a href="logout.php" class="button-2">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>

                        <!-- Tombol Hapus Akun -->
            <a href="delete_account.php" class="button-3" onclick="return confirm('Anda yakin ingin menghapus akun Anda? Semua data akan hilang!')">
                <i class="fas fa-trash"></i> Hapus Akun
            </a>
        </div>

    </div>

</body>
</html>

