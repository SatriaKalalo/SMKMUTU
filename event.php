<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href="event.css">
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
                <li><a href="event.php" class="active">Event</a></li>
                <li><a href="registration.php">Purchase</a></li>
                <li><a href="contact.php">Help</a></li>
                <li><img id="profile-picture" src="logo_mutu_png_transparant-removebg-preview-1.png" alt="Hack"></li>
            </ul>
        </nav>
        <section>
    <div class="kotakkiri">
      <div class="konten">
        <h1>Event</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, voluptatem nesciunt! Quisquam aliquam blanditiis voluptatibus architecto error, temporibus pariatur in tenetur, explicabo quos, repellat eligendi labore dicta alias modi itaque!</p>
      </div>
    </div>

    <div class="events">
      <ul>
        <li>
          <div class="waktu">
            <h2>16<br><span>Desember</span></h2>
          </div>
          <div class="detail">
            <h3>Event 1</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet corporis recusandae ipsa delectus et, totam obcaecati ullam, rerum vitae ut qui quod laborum molestiae, odit commodi suscipit quas dolorum quisquam.</p>
            <a href="#">Lihat Selengkap</a>
          </div>
          <div class="clear: both;"></div>
        </li>
        <li>
          <div class="waktu">
            <h2>16<br><span>Desember</span></h2>
          </div>
          <div class="detail">
            <h3>Event 1</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet corporis recusandae ipsa delectus et, totam obcaecati ullam, rerum vitae ut qui quod laborum molestiae, odit commodi suscipit quas dolorum quisquam.</p>
            <a href="#">Lihat Selengkap</a>
          </div>
          <div class="clear: both;"></div>
        </li>
        <li>
          <div class="waktu">
            <h2>16<br><span>Desember</span></h2>
          </div>
          <div class="detail">
            <h3>Event 1</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet corporis recusandae ipsa delectus et, totam obcaecati ullam, rerum vitae ut qui quod laborum molestiae, odit commodi suscipit quas dolorum quisquam.</p>
            <a href="#">Lihat Selengkap</a>
          </div>
          <div class="clear: both;"></div>
        </li>
      </ul>
    </div>
  </section>
    </div>
      <div id=©>
        <p>© 2023 ALL RIGHTS RESERVED</p>
        <p>POWERED BY SMK MUTU CIKAMPEK</p>
      </div>
</body>
  <script>
    document.getElementById('profile-picture').addEventListener('click', function() {
    // Redirect ke halaman profil, ganti URL berikut dengan URL halaman profil yang diinginkan
    window.location.href = 'Profile.php';
});
  </script>
</html>