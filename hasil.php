<?php
$nama_lengkap = "Andhika Radi Wirawan";
$nim          = "102022500315";
$fakultas     = "Fakultas Rekayasa Industri";
$prodi        = "S1 Sistem Informasi";
$tanggal      = date("d F Y");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil - <?php echo $nama_lengkap; ?></title>
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <link rel="icon" href="profile.jpeg">
</head>
<body>

    <div class="card">
        <img src="profile.jpeg" alt="Foto <?php echo $nama_lengkap; ?>" class="avatar">
        
        <h2><?php echo $nama_lengkap; ?></h2>
        <p class="subtitle"><?php echo $nim; ?> • <?php echo $fakultas; ?> • <?php echo $prodi; ?></p>

        <div class="social-links">
            <a href="https://www.linkedin.com/in/andhikaradiwirawan" target="_blank" class="social-item">
                <div class="social-circle"><i class="fab fa-linkedin-in"></i></div>
                LinkedIn
            </a>
            <a href="https://www.instagram.com/andhikaradiw" target="_blank" class="social-item">
                <div class="social-circle"><i class="fab fa-instagram"></i></div>
                Instagram
            </a>
            <a href="https://github.com/andhikaradiw" target="_blank" class="social-item">
                <div class="social-circle"><i class="fab fa-github"></i></div>
                GitHub
            </a>
        </div>

        <hr>

        <table>
            <tr>
                <th>Hard Skills</th>
                <td>Ms. Office, VS Code, Capcut, Canva, Figma</td>
            </tr>
            <tr>
                <th>Soft Skills</th>
                <td>Problem solving, critical thinking, teamwork</td>
            </tr>
        </table>
        <p class="waktu-update">
            Terakhir diperbarui: <time><?php echo $tanggal; ?></time>
        </p>
    </div>

</body>
</html>