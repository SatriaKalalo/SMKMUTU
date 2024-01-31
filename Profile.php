<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel='stylesheet' href="Profile.css">
  </head>
<body>
    <div class="container">
        <nav class="wrapper">
            <div class="brand">
                <div class="Nama1">smkmutuckp</div>
                <div class="Nama2">.id</div>
            </div>
            <ul class="navigasi">
                <li><a class="teks1" href="navbar.php">Home</a></li>
                <li><a class="teks2" href="collection.php">Collection</a></li>
                <li><a class="teks3" href="MAJOR.PHP">Major</a></li>
                <li><a href="event.php">Event</a></li>
                <li><a href="registration.php">Purchase</a></li>
                <li><a class="teks3" href="contact.php">Help</a></li>
                <li><img id="profile-picture" src="logo_mutu_png_transparant-removebg-preview-1.png" alt="Hack"></li>
            </ul>
        </nav>
      <div class="bodylagi">
        <section class="produk">
          <h1>Profile Sekolah</h1>
          <div class="semua-produk">
            <div class="pendaftaran">
              <img src="logo_mutu_png_transparant-removebg-preview-1.png">
              <div class="info-jurusan">
                <h4 class="info-judul">SMK Muhammadiyah 1 Cikampek</h4>
                <p class="info-harga">Platform Official Social Media</p>
              </div>
              <div class="bodybodyody">
                <ul class="icon">
                  <li><a href="https://www.facebook.com/smkmutucikampek"><i class="fa-brands fa-facebook"></i></a></li>
                  <li><a href="https://www.instagram.com/smkmutucikampek/?hl=id"><i class="fa-brands fa-instagram"></i></a></li>
                  <li><a href="https://www.youtube.com/user/dahesta/featured"><i class="fa-brands fa-youtube"></i></a></li>
                  <li><a href="https://www.twitter.com/smkmutucikampek"><i class="fa-brands fa-x-twitter"></i></a></li>
                  <li><a href="https://www.tiktok.com/@smkmutucikampek"><i class="fa-brands fa-tiktok"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
      <div id=©>
            <p>© 2023 ALL RIGHTS RESERVED</p>
            <p>POWERED BY SMK MUTU CIKAMPEK</p>
          </div>
        </section>
      </div>
    </div>
</body>
  <script>
    document.getElementById('profile-picture').addEventListener('click', function() {
    // Redirect ke halaman profil, ganti URL berikut dengan URL halaman profil yang diinginkan
    window.location.href = 'Profile.php';
});
  </script>
</html>