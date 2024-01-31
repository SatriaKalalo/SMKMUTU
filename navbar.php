<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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
                <li><a href="navbar.php" class="active">Home</a></li>
                <li><a class="teks2" href="collection.php">Collection</a></li>
                <li><a class="teks3" href="major.php">Major</a></li>
                <li><a href="event.php">Event</a></li>
                <li><a href="registration.php">Purchase</a></li>
                <li><a class="teks3" href="contact.php">Help</a></li>
                <li><img id="profile-picture" src="logo_mutu_png_transparant-removebg-preview-1.png" alt="Hack"></li>
            </ul>
        </nav>
        <div class="body2">
          <div class="wrapper1">
            <div class="display1">
              <div id="time"></div>
            </div>
            <span></span>
            <span></span>
          </div>
        </div>
    <div class="foto">
      <figure>
        <div class="slide">
          <img src="Desain sekolah.png" alt="foto1">
        </div>
        <div class="slide">
          <img src="Foto Sekkolah Lama 1.png" alt="foto2">
        </div>
        <div class="slide">
          <img src="Foto Sekkolah Lama 2.png" alt="foto3">
        </div>
        <div class="slide">
          <img src="Desain sekolah Baru.png" alt="foto4">
        </div>
      </figure>
    </div>

    <div class="body1">
          <h1>Visi, Misi dan Tujuan</h1>
        <div class="kotak biru">
          <h2> Visi SMK TI MUHAMMADIYAH CIKAMPEK </h2>
          <P>"Menjadi SMK yang islami, Unggul, Profesional, kompeten dan berjiwa wirausaha"</P>
        </div>
        <div class="kotak hijaumuda">
          <h2> Misi SMK TI MUHAMMADIYAH CIKAMPEK </h2>
          <ul>
            <li>Membina peserta didik menjadi pribadi yang berakhlak mulia dan lulusan yang professional dalam kompetensi kejuruan</li>
            <li>menyelenggarakan pendidikan kejuruan berbasis spesialisasi dan kompetensi yang berwawasan lingkungan</li>
            <li>Mengembangkan sistem manajemen mutu yang terintegrasi dan berkelanjutan</li>
            <li>Memelihara dan memperluas jejaring kerja sama</li>
            <li>Membentuk jiwa kewirausahaan melalui pengembangan teaching factoy</li>
            <li>Meningkatkan profesionalisme pendidik dan tenaga pendidik</li>
            <li>Menjadi sekolah percontohan yang bermutu dan profesional</li>
            <li>Menjadikan tenaga pendidik yang bersertifikasi dalam setiap kejurusan</li>
          </ul>
        </div>
        <div class="kotak merah">
          <h2> Tujuan SMK TI MUHAMMADIYAH CIKAMPEK </h2>
          <ul>
            <li class="li1">Meningkatkan kedisiplinan dengan melaksanakan pembelajaran dan bimbingan secara efektif sehingga setiap peserta didik berkembang secara optimal sesuai dengan potensi yang dimiliki dan mampu meberdayakan diri sendiri</li>
            <li class="li1">Meningkatkan potensi peserta didik menjadi insan yang beriman dan bertaqwa kepada Tuhan yang maha Esa, berakhlak mulia , sehat, berilmu, cakap, kreatif, mandiri dan menjadi warga negara yang demokratis serta bertanggung jawab</li>
            <li class="li1">Menghasilkan lulusan yang kompetitif dan unggul di dunia kerja</li>
            <li class="li1">Menyediakan tempat uji kompetensi yang beroperasi secara konsisten dan dapat dipercaya</li>
          </ul>
        </div>
      </div>
      <h1>Pembuatan Website</h1>
        <div class="Fcontainer">
          <div class="card">
            <div class="card-image">
              <img src="Collection/Tahun/TahunRPL/GIFLOOP.gif" alt="1">
            </div>
            <div class="profile-image">
              <img src="Collection/Tahun/TahunRPL/channels4_profile.jpg" alt="2">
            </div>
            <div class="card-content">
              <h3>Satria Diwangkara Kalalo</h3>
              <p>Kelas XI RPL 1 Seorang Pelajaran Mahasiswa Pemogramman Web Dan Hobinya Game Online & Offline</p>
            </div>
            <div class=icons>
              <a href="https://www.youtube.com/@GamerSatria" class="fa-brands fa-youtube"></a>
              <a href="https://www.facebook.com/Satriagaming999iq/" class="fa-brands fa-facebook"></a>
              <a href="https://x.com/SatriaKalalo?t=Cw7LsJk5J1tWnwMeMB6OCQ&s=09" class="fa-brands fa-x-twitter"></a>
              <a href="https://www.instagram.com/satriadiwangkara/" class="fa-brands fa-instagram"></a>
              <a href="#" class="fa-brands fa-whatsapp"></a>
            </div>
          </div>
        </div>
          <div id=©>
            <p>© 2023 ALL RIGHTS RESERVED</p>
            <p>POWERED BY SMK MUTU CIKAMPEK</p>
          </div>
      </div>
  <script>

    document.getElementById('profile-picture').addEventListener('click', function() {
    // Redirect ke halaman profil, ganti URL berikut dengan URL halaman profil yang diinginkan
    window.location.href = 'Profile.php';
});

const boxes = document.querySelectorAll('.kotak');

window.addEventListener('scroll', checkBoxes);

function checkBoxes() {
  const triggerBottom = window.innerHeight / 5 * 4;

  boxes.forEach((box) => {
    const boxTop = box.getBoundingClientRect().top;

    if (boxTop < triggerBottom) {
      box.classList.add('show');
    } else {
      box.classList.remove('show');
    }
  });
}

  setInterval
  (()=>{

    const time = document.querySelector("#time")
    let date = new Date();
    let hours = date.getHours();
    let minutes = date.getMinutes();
    let seconds = date.getSeconds();
    let day_malam = "AM";
    if(hours > 12){
      day_malam = "PM"
      hours = hours - 12;
    }
    if(hours < 10){
      hours = "0" + hours;
    }
    if(minutes < 10){
      minutes = "0" + minutes;
    }
    if(seconds < 10){
      seconds = "0" + seconds;
    }
    time.textContent = hours +
    ":" + minutes +
    ":" + seconds  + "" + day_malam;
  });
  </script>
</html>