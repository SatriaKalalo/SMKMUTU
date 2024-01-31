<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href="contact.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
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
                <li><a href="contact.php" class="active">Help</a></li>
                <li><img id="profile-picture" src="logo_mutu_png_transparant-removebg-preview-1.png" alt="Hack"></li>
            </ul>
        </nav>

      <div class="body">
      <section class="contact">
  <div class="content">
    <h2>Contact us</h2>
    <p>Tolong Kasih Saran Untuk Bantuan Dari : <br>SMK MUHAMMADIYAH 1 CIKAMPEK</p>
  </div>
  <div class="container1">
    <div class="contactinfo">
      <div class="kotak1">
        <div class="icon">
        <span id="maps" class="material-symbols-outlined">
location_on
</span>
        </div>
        <div class="text">
          <h3>Address</h3>
          <p>Jl. Raya Parakan No.70, Cikampek Utara, <br>Kec. Kota Baru, Karawang, Jawa Barat 41373</p>
        </div>
      </div>
      <div class="kotak1">
        <div class="icon">
        <span class="material-symbols-outlined">
call
</span>
        </div>
        <div class="text">
          <h3>No.HP</h3>
          <p>+62-812-3456-7890</p>
        </div>
      </div>
      <div class="kotak1">
        <div class="icon">
        <span class="material-symbols-outlined">
mail
</span>
        </div>
        <div class="text">
          <h3>Gmail</h3>
          <p>example@domains.com</p>
        </div>
      </div>
    </div>

    <div class="contactFrom">
      <form action="https://formspree.io/f/mpzgvboe" method="POST">
        <h2>Kirim Pesan</h2>
        <div class="inputBox">
          <span>Nama Panjang</span>
          <input type="text" name="NAMA" required>
        </div>
        <div class="inputBox">
          <span>No Hp.</span>
          <input type="text" name="NO.HP" required>
        </div>
        <div class="inputBox">
          <span>Email</span>
          <input type="email" name="GMAIL" required>
        </div>
        <div class="inputBox">
          <span>Ketik Pesanmu?</span>
          <textarea required></textarea>
        </div>
        <div class="inputBox">
          <input type="submit" value="Kirim">
        </div>
      </form>
    </div>
  </div>
</section>
      </div>
      <div id=©>
            <p>© 2023 ALL RIGHTS RESERVED</p>
            <p>POWERED BY SMK MUTU CIKAMPEK</p>
          </div>
    </div>
</body>
  <script>
    document.getElementById('profile-picture').addEventListener('click', function() {
    window.location.href = 'Profile.php';
});

document.getElementById('maps').addEventListener('click', function() {
    window.location.href = 'https://maps.app.goo.gl/cDtMqmzctmYutarv9';
});
  </script>
</html>