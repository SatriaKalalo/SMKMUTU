<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="TahunMPLB.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <nav class="wrapper">
            <div class="brand">
                <div class="Nama1">smkmutuckp</div>
                <div class="Nama2">.id</div>
            </div>
            <ul class="navigasi">
                <li><a class="teks1" href="http://localhost/SatriaKalalo/Website/navbar.php">Home</a></li>
                <li><a class="teks2" href="http://localhost/SatriaKalalo/Website/collection.php" class="active">Collection</a></li>
                <li><a class="teks3" href="http://localhost/SatriaKalalo/Website/major.php">Major</a></li>
                <li><a href="http://localhost/SatriaKalalo/Website/event.php">Event</a></li>
                <li><a href="http://localhost/SatriaKalalo/Website/registration.php">Purchase</a></li>
                <li><a class="teks3" href="http://localhost/SatriaKalalo/Website/contact.php">Help</a></li>
                <li><img  id="profile-picture" src="logo_mutu_png_transparant-removebg-preview-1.png" alt="Hack"></li>
            </ul>
        </nav>
      <div class="balok">
        <div class="ukuran-klik" id="T2024">
          2024
        </div>
        <div class="ukuran-klik" id="T2023">
          2023
        </div>
        <div class="ukuran-klik" id="T2022">
          2022
        </div>
        <div class="ukuran-klik" id="T2021">
          2021
        </div>
        <div class="ukuran-klik" id="T2020">
          2020
        </div>
        <div class="ukuran-klik" id="T2019">
          2019
        </div>
        <div class="ukuran-klik" id="T2018">
          2018
        </div>
        <div class="ukuran-klik" id="T2017">
          2017
        </div>
        <div class="ukuran-klik" id="T2016">
          2016
        </div>
        <div class="ukuran-klik" id="T2015">
          2015
        </div>
      </div>
          <div id=©>
            <p>© 2023 ALL RIGHTS RESERVED</p>
            <p>POWERED BY SMK MUTU CIKAMPEK</p>
          </div>
    </div>
</body>
  <script>
    document.getElementById('profile-picture').addEventListener(
      'click', function()
      {
        window.location.href = 'http://localhost/SatriaKalalo/Website/Profile.php';
      });

      var T2024 = document.getElementById('T2024');
      T2024.addEventListener('click', function()
      {
        window.location.href = 'Tahun/TahunOTKP/2024OTKP.php';
      }
      );
      var T2023 = document.getElementById('T2023');
      T2023.addEventListener('click', function()
      {
        window.location.href = 'Tahun/TahunOTKP/2023OTKP.php';
      }
      );
      var T2022 = document.getElementById('T2022');
      T2022.addEventListener('click', function()
      {
        window.location.href = 'Tahun/TahunOTKP/2022OTKP.php';
      }
      );
      var T2021 = document.getElementById('T2021');
      T2021.addEventListener('click', function()
      {
        window.location.href = 'Tahun/TahunOTKP/2021OTKP.php';
      }
      );
      var T2020 = document.getElementById('T2020');
      T2020.addEventListener('click', function()
      {
        window.location.href = 'Tahun/TahunOTKP/2020OTKP.php';
      }
      );
      var T2019 = document.getElementById('T2019');
      T2019.addEventListener('click', function()
      {
        window.location.href = 'Tahun/TahunOTKP/2019OTKP.php';
      }
      );

var T2018 = document.getElementById('T2018');
T2018.addEventListener('click', function()
{
  window.location.href = 'Tahun/TahunOTKP/2018OTKP.php';
}
);

var T2017 = document.getElementById('T2017');
T2017.addEventListener('click', function()
{
  window.location.href = 'Tahun/TahunOTKP/2017OTKP.php';
}
);

var T2016 = document.getElementById('T2016');
T2016.addEventListener('click', function()
{
  window.location.href = 'Tahun/TahunOTKP/2016OTKP.php';
}
);

var T2015 = document.getElementById('T2015');
T2015.addEventListener('click', function()
{
  window.location.href = 'Tahun/TahunOTKP/2015OTKP.php';
}
);
  </script>
</html>