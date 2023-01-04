<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
    </script>
    <title>Sociolla</title>
</head>

<body>
    <nav>
    <nav class="navbar navbar-expand-sm navbar-light fixed-top" style="background-color: #ffffff;">
        <div class="container-md">
            <a class="navbar-brand" href="SMAN13.php">
                <img src="LOGO.png" width="200" height="50">
            </a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-link" aria-current="page" href="#home" style="margin-left: 150px;font-family:San-serif"><b>HOME</b></a>
                <a class="nav-link" href="#about" style="margin-left: 30px;font-family:San-serif"><b>ABOUT</b></a>
                <a class="nav-link" href="#visimisi" style="margin-left: 30px;font-family:San-serif"><b>VISI & MISI</b></a>
                <a class="nav-link" href="#unggul" style="margin-left: 30px;font-family:San-serif"><b>KEUNGGULAN</b></a>
                </div>
            </div>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                <a button class="btn btn-outline-dark rounded-3" type="button" style="width:120px;height:40px" data-bs-toggle="dropdown">
                        <p style="font-family:San-serif;margin-left:3px"><b>SIGN UP<img src="https://cdn1.iconfinder.com/data/icons/ios-11-ui-elements-vol-1/29/25_dropdown_menu_down_arrow-512.png" alt="Logo" width="25" height="25"></b></p>
                    </a>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href="Signup-Murid.php">Murid</a>
                        <a class="dropdown-item" href="Signup-Guru.php">Guru</a>
                        <a class="dropdown-item" href="Signup-Bendaharawan.php">Bendaharawan</a>
                        <a class="dropdown-item" href="Signup-Pustakawan.php">Pustakawan</a>
                        <a class="dropdown-item" href="Login-Admin.php">Admin</a>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    </nav>

    <section class="jumbotron jumbotron-fluid" style="background-color: #ffffff;" id='home'>
        <br><br><br>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="margin-top:50px; margin-left: 180px; margin-right: 180px">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://tracecollege.edu.ph/wp-content/uploads/2018/04/Senior-High-School-Img-e1524729106137.jpg" class="d-block w-100" alt="image">
                </div>
                <div class="carousel-item">
                    <img src="https://tracecollege.edu.ph/wp-content/uploads/2018/04/Senior-High-School-Img-e1524729106137.jpg" class="d-block w-100" alt="image">
                </div>
                <div class="carousel-item">
                    <img src="https://tracecollege.edu.ph/wp-content/uploads/2018/04/Senior-High-School-Img-e1524729106137.jpg" class="d-block w-100" alt="image">
                </div>
                <div class="carousel-item">
                    <img src="https://tracecollege.edu.ph/wp-content/uploads/2018/04/Senior-High-School-Img-e1524729106137.jpg" class="d-block w-100" alt="image">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="jumbotron jumbotron-fluid" id="about">
        <br><br><br><br>
        <center>
            <font face="San-serif" size="6"><b>ABOUT</b></font>
        </center>
        <br><br><br>

        <div class="row row-cols-2" style="background-color:#216AD9;margin-left: 180px;margin-right: 180px;border-radius: 20px">
            <div class="col-5">
                <img src="https://bdp.fp.unram.ac.id/wp-content/uploads/2020/04/Gedung-Biru.jpg" style="margin-top: 50px;margin-left:30px;margin-bottom:50px;margin-right:30px" width="100%"/>
            </div>
            <div class="col-6" style="margin-top: 70px;margin-left:50px;margin-bottom:50px">
                <center>
                    <p style="text-align:justify"><font color="white">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;SMA Negeri 13 Pangkep merupakan sekolah negeri yang berada dibawah naungan Pemerintah Provinsi Sulawesi Selatan yang menerapakan
                        Sistem Boarding School dimana semua siswa harus tinggal di Asrama yang telah disediakan. Sistem pembelajaran yang digunakan yaitu Reguler dan
                        Non Reguler. Untuk pembelajaran Reguler menerapkan Kurikulum Merdeka dan Kurikulum 2013 sedangkan untuk Non Reguler menerapkan sistem semi
                        pesantren dimana siswa dibekali dengan ilmu-ilmu agama.</font></p>
                </center>
            </div>
        </div>
    </section>

    <section class="jumbotron jumbotron-fluid" id="visimisi">
        <br><br><br><br>
        <center>
            <font face="San-serif" size="6"><b>VISI & MISI</b></font>
        </center>
        <br><br><br>
        <div class="row row-cols-2" style="margin-left: 160px;margin-right: 160px">
            <div class="col-5">
            <p style="text-align:justify"><b>VISI : </b><br>
                    <i>"Terwujudnya Peserta Didik yang Religius, Berakhlak Mulia, Berkarakter, Cerdas, Berprestasi, Terampil, dan Berwawasan Lingkungan"</i></p>
            </div>
            <div class="col-6" style="margin-left:50px;margin-bottom:50px">
                    <p><b>MISI : </b><br>
                    1. Mewujudkan lingkungan sekolah yang bernuansa religius<br>
                    2. Melaksanakan pembelajaran Abad 21 (Millennial)<br>
                    3. Menumbuhkan semangat keunggulan yang sportif dan kompetitif<br>
                    4. Meningkatkan kompetensi tenaga pendidik yang profesional, inovatif, mandiri, disiplin dan bertanggung jawab<br>
                    5. Meningkatkan kompetensi peserta didik agar mampu bersaing untuk melanjutkan pendidikan ke jenjang yang lebih tinggi<br>
                    6. Menciptakan lingkungan sekolah bersih, sejuk indah dan nyaman<br>
                    7. Membentuk insan berperilaku sehat dan berwawasan lingkungan</p>
            </div>
        </div>
    </section>

    <section class="jumbotron jumbotron-fluid" id='unggul'>
    <br><br><br>
        <center>
            <font face="San-serif" size="6"><b>KEUNGGULAN</b></font>
        </center>
        <br><br><br>
        <div class="row row-cols-2" style="margin-left: 160px;margin-right: 160px">
            <div class="col-3" style="margin-right:125px">
                <center><img src="vector\boarding.png" width="50%"></center>
                <h4><center><b>Sistem Boarding School</b></center></h4><br>
                    <h10><center>Sekolah kami menerapkan sistem yang menarik yaitu Boarding School. Jadi siswa diwajibkan untuk tinggal di asrama yang telah disediakan</center></h10></p>
            </div>
            <div class="col-3" style="margin-right:125px">
                <center><img src="vector\akreditasi.png" width="50%"></center>
                <h4><center><b>Terakreditasi A</b></center></h4><br><br>
                    <h10><center>Sekolah kami sudah Terakreditasi A memiliki kualitas pembelajaran yang terbaik dan siap bersaing dalam dunia industri modern</center></h10></p>
            </div>
            <div class="col-3">
                <center><img src="vector\kurikulum.png" width="50%"></center>
                <h4><center><b>Kurikulum Ganda</b></center></h4><br><br>
                    <h10><center>Penerapan kurikulum ganda yaitu Kurikulum 2013 dan Kurikulum Merdeka. Siswa dituntu untuk proaktif dalam proses pembelajaran<center></h10></p>
            </div>
        </div>
    </section>

    <br><br><br>
    <footer style="background-color:#216AD9">
        <br><br>
        <div class="row row-cols-2" style="margin-left: 160px;margin-right: 160px">
            <div class="col-3" style="margin-right:110px">
                <h7 style="font-family:San-serif;color:white"><b>OUR SERVICE</b></h7><br><br>
                <h9 style="font-family:San-serif;color:white">Absent<br>Library<br>Payment<br>Extracurricular</h9>
            </div><br>
            <div class="col-3" style="margin-right:145px">
                <center><h7 style="font-family:San-serif;color:white"><b>Join Our Social Community</b></h7></center><br><br>
                <center><h9>
                    <a href="https://www.twitter.com">
                        <img src="https://www.pinclipart.com/picdir/big/138-1388876_2017-intertech-americas-corp-white-twitter-bird-transparent.png" width="40px" style="margin-right:15px">
                    </a>
                    <a href="https://www.facebook.com">
                        <img src="https://web.basemark.com/icons/facebook-gray.png" width="32px" style="margin-right:20px">
                    </a>
                    <a href="https://www.instagram.com">
                        <img src="https://th.bing.com/th/id/R.04e02954b83a193dd082db5ed0a4401d?rik=4OUbvusE2DGteQ&riu=http%3a%2f%2fpluspng.com%2fimg-png%2flogo-instagram-png-instagram-logo-white-png-371.png&ehk=SMvXM%2fPhwGPYucSKTxqUNbH1jmmsUf207oEzq3uJKVg%3d&risl=&pid=ImgRaw&r=0&sres=1&sresct=1" width="32px" style="margin-right:20px">
                    </a>
                    <a href="https://www.linkedin.com">
                        <img src="vector\linkedin.png" width="32px">
                    </a>
                </h9></center>
            </div>
            <div class="col-3">
                <h7 style="font-family:San-serif;color:white"><b>CONTACT US</b></h7><br><br>
                <h9 style="font-family:San-serif;color:white">
                    Borong-Borong, Desa Kassiloe, Kec. Labakkang,
                    Kab. Pangkep, Pangkajene, Sulawesi Selatan 90653
                </h9><br><br>
                <h9 style="font-family:San-serif;color:white">
                    Phone Number: 0852-5518-2737<br>
                    Fax: 0852-5518-2737<br>
                    Email: sman13@pangkep.sch.id<br>
                </h9><br><br>
            </div>
        </div>
    </footer>
    <footer style="background-color:#104DAA">
        <br>
        <div class="row row-cols-2" style="margin-left: 160px;margin-right: 160px">
            <div class="col-6" style="margin-right:343px">
                <h9 style="font-family:San-serif;color:white">© Copyright 2022 <b>SMA Negeri 13 Pangkep</b> All Rights Reserved</h9>
            </div>
            <div class="col-2">
                <h9 style="font-family:San-serif;color:white;text-align:right">Design by <b>Group 3</b></h9>
                <br><br>
            </div>
    </footer>
</body>
</html>