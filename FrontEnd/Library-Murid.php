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
    <nav class="navbar navbar-expand-sm navbar-light fixed-top" style="background-color: #ffffff;">
        <div class="container-md">
            <a class="navbar-brand" href="Home-Murid.php">
                <img src="LOGO.png" width="200" height="50">
            </a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-link" href="Home-Murid.php" style="margin-left: 80px;font-family:San-serif">ABSENT</a>
                <a class="nav-link" href="Library-Murid.php" style="margin-left: 20px;font-family:San-serif"><b>LIBRARY</b></a>
                <a class="nav-link" href="Payment-Murid.php" style="margin-left: 20px;font-family:San-serif">PAYMENT</a>
                <a class="nav-link" href="Extra-Murid.php" style="margin-left: 20px;font-family:San-serif">EXTRACURRICULAR</a>
                <a class="nav-link" href="Activity-Murid.php" style="margin-left: 20px;font-family:San-serif">ACTIVITY</a>
                </div>
            </div>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                <a button class="btn btn-outline-dark rounded-3" type="button" style="width:120px;height:40px" data-bs-toggle="dropdown">
                        <p style="font-family:San-serif;margin-left:3px"><b>Amanda<img src="https://cdn1.iconfinder.com/data/icons/ios-11-ui-elements-vol-1/29/25_dropdown_menu_down_arrow-512.png" alt="Logo" width="25" height="25"></b></p>
                    </a>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href="Profile-Murid.php">Profile</a>
                        <a class="dropdown-item" href="Notif-Murid.php">Notification</a>
                        <a class="dropdown-item" href="SMAN13.php">Logout</a>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <br><br><br><br>
    <center>
        <font face="San-serif" size="6"><b>Book List</b></font>
    </center>
    <br><br>
    <div class="mb-1" style="width:30%;margin-left:auto;margin-right:100px">
        <a href="Library-Form.php">
            <button type="submit" class="btn btn-primary" id="request" name="request" style="margin-left: 140px;">Book Request</button>
        </a>
        <a href="Library-Confirm.php">
            <button type="submit" class="btn" id="payment" name="payment" style="background-color:#F2F0F0"><img src="history.png" width="15" height="15"> History</button>
        </a>
    </div>

    <section style="margin-left: 160px;">
        <br>
        <font face="San-serif" size="5"><b>Pelajaran Sekolah</b></font>
        <hr class="border border-primary border-1 opacity-100" style="width:185px">
        <div class="row row-cols-5">
            <div class="col-2" style="margin-right:15px">
                <div class="shadow" style="background-color:#FFFFFF">
                    <img src="https://perpustakaansman112.sch.id/wp-content/uploads/2020/08/cov-pkn-k10.png"
                    style="margin-left:10px;margin-right:10px;margin-top:10px;margin-bottom:10px;" width="158px" height="225px">
                </div><br>
                <center><font face="San-serif" size="3px"><b>Pendidikan Pancasila dan<br>Kewarganegaraan X</b></font></center><br>
                <a class="btn btn-primary" href="ppknx.php" role="button" style="width:100%">
                    <font face="San-serif" size="3px" color="#FFFFFF">See Detail</font>
                </a>
            </div>
            <div class="col-2" style="margin-right:15px">
                <div class="shadow" style="background-color:#FFFFFF">
                    <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTmdUypo1PsD0H4dcK4HTbc4mBlUWdAqf8tQ1lOltoxWoCfWfYH"
                    style="margin-left:10px;margin-right:10px;margin-top:10px;margin-bottom:10px;" width="158px" height="225px">
                </div><br>
                <center><font face="San-serif" size="3px"><b>Sejarah Indonesia X</b></font></center><br><br>
                <a class="btn btn-primary" href="" role="button" style="width:100%">
                    <font face="San-serif" size="3px" color="#FFFFFF">See Detail</font>
                </a>
            </div>
            <div class="col-2" style="margin-right:15px">
                <div class="shadow" style="background-color:#FFFFFF">
                    <img src="https://1.bp.blogspot.com/-uQ8XIENSZ3Y/XYmlPLuZ6EI/AAAAAAAAB2g/8c6edww5z101-uq3Y5rOFpcGGcNyn4yLgCLcBGAsYHQ/s1600/WhatsApp%2BImage%2B2017-08-17%2Bat%2B15.55.45.jpeg"
                    style="margin-left:10px;margin-right:10px;margin-top:10px;margin-bottom:10px;" width="158px" height="225px">
                </div><br>
                <center><font face="San-serif" size="3px"><b>Bahasa Indonesia X</b></font></center><br><br>
                <a class="btn btn-primary" href="" role="button" style="width:100%">
                    <font face="San-serif" size="3px" color="#FFFFFF">See Detail</font>
                </a>
            </div>
            <div class="col-2" style="margin-right:15px">
                <div class="shadow" style="background-color:#FFFFFF">
                    <img src="https://a.cdn-myedisi.com/book/cover/bse-a_59fc2c09116ad392659386.jpg"
                    style="margin-left:10px;margin-right:10px;margin-top:10px;margin-bottom:10px;" width="158px" height="225px">
                </div><br>
                <center><font face="San-serif" size="3px"><b>Bahasa Indonesia XI</b></font></center><br><br>
                <a class="btn btn-primary" href="" role="button" style="width:100%">
                    <font face="San-serif" size="3px" color="#FFFFFF">See Detail</font>
                </a>
            </div>
            <div class="col-2" style="margin-right:15px">
                <div class="shadow" style="background-color:#FFFFFF">
                    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRYbYv04cqL7sNEo3d1nE2dVyKIzs60DV9fmij1f_BamI-phF_b"
                    style="margin-left:10px;margin-right:10px;margin-top:10px;margin-bottom:10px;" width="158px" height="225px">
                </div><br>
                <center><font face="San-serif" size="3px"><b>Matematika XI</b></font></center><br><br>
                <a class="btn btn-primary" href="" role="button" style="width:100%">
                    <font face="San-serif" size="3px" color="#FFFFFF">See Detail</font>
                </a>
            </div>
        </div><br><br><br>
        
        <div class="row row-cols-5">
            <div class="col-2" style="margin-right:15px">
                <div class="shadow" style="background-color:#FFFFFF">
                    <img src="https://bukusekolah.id/wp-content/uploads/2020/04/Kelas-12-Buku-Siswa-islam.jpg"
                    style="margin-left:10px;margin-right:10px;margin-top:10px;margin-bottom:10px;" width="158px" height="225px">
                </div><br>
                <center><font face="San-serif" size="3px"><b>Pendidikan Agama Islam<br>XII</b></font></center><br>
                <a class="btn btn-primary" href="" role="button" style="width:100%">
                    <font face="San-serif" size="3px" color="#FFFFFF">See Detail</font>
                </a>
            </div>
            <div class="col-2" style="margin-right:15px">
                <div class="shadow" style="background-color:#FFFFFF">
                    <img src="https://a.cdn-myedisi.com/book/cover/bse-a_5975715a31d0a443724631.jpg"
                    style="margin-left:10px;margin-right:10px;margin-top:10px;margin-bottom:10px;" width="158px" height="225px">
                </div><br>
                <center><font face="San-serif" size="3px"><b>Bahasa Inggris XII</b></font></center><br><br>
                <a class="btn btn-primary" href="" role="button" style="width:100%">
                    <font face="San-serif" size="3px" color="#FFFFFF">See Detail</font>
                </a>
            </div>
            <div class="col-2" style="margin-right:15px">
                <div class="shadow" style="background-color:#FFFFFF">
                    <img src="http://yrama-widya.co.id/wp-content/uploads/2017/03/Buku-Siswa-Fisika-Kelas-XI-Peminatan.jpg"
                    style="margin-left:10px;margin-right:10px;margin-top:10px;margin-bottom:10px;" width="158px" height="225px">
                </div><br>
                <center><font face="San-serif" size="3px"><b>Fisika XI</b></font></center><br><br>
                <a class="btn btn-primary" href="" role="button" style="width:100%">
                    <font face="San-serif" size="3px" color="#FFFFFF">See Detail</font>
                </a>
            </div>
            <div class="col-2" style="margin-right:15px">
                <div class="shadow" style="background-color:#FFFFFF">
                    <img src="https://id-live-01.slatic.net/p/97ecf24e5773eaaa396a643fc7427460.jpg"
                    style="margin-left:10px;margin-right:10px;margin-top:10px;margin-bottom:10px;" width="158px" height="225px">
                </div><br>
                <center><font face="San-serif" size="3px"><b>Kimia XII</b></font></center><br><br>
                <a class="btn btn-primary" href="" role="button" style="width:100%">
                    <font face="San-serif" size="3px" color="#FFFFFF">See Detail</font>
                </a>
            </div>
        </div>
    </section>

    <section style="margin-left: 160px;">
        <br><br><br><br>
        <font face="San-serif" size="5"><b>Bahasa</b></font>
        <hr class="border border-primary border-1 opacity-100" style="width:185px">
        <div class="row row-cols-5">
            <div class="col-2" style="margin-right:15px">
                <div class="shadow" style="background-color:#FFFFFF">
                    <img src="https://semestahikmah.com/wp-content/uploads/2019/12/461-mahir-bahasa-jepang-dari-nol-va_1-365x0.jpg"
                    style="margin-left:10px;margin-right:10px;margin-top:10px;margin-bottom:10px;" width="158px" height="225px">
                </div><br>
                <center><font face="San-serif" size="3px"><b>Mahir Bahasa Jepang<br>dari Nol</b></font></center><br>
                <a class="btn btn-primary" href="jepang.php" role="button" style="width:100%">
                    <font face="San-serif" size="3px" color="#FFFFFF">See Detail</font>
                </a>
            </div>
            <div class="col-2" style="margin-right:15px">
                <div class="shadow" style="background-color:#FFFFFF">
                    <img src="https://s4.bukalapak.com/img/9390365332/large/aHR0cHM6Ly9lY3M3LnRva29wZWRpYS5uZXQvaW1nL3Byb2R1Y3QtMS8yMDE1.jpg.webp"
                    style="margin-left:10px;margin-right:10px;margin-top:10px;margin-bottom:10px;" width="158px" height="225px">
                </div><br>
                <center><font face="San-serif" size="3px"><b>Panduan Terlengkap<br>Belajar Bahasa Korea</b></font></center><br>
                <a class="btn btn-primary" href="" role="button" style="width:100%">
                    <font face="San-serif" size="3px" color="#FFFFFF">See Detail</font>
                </a>
            </div>
            <div class="col-2" style="margin-right:15px">
                <div class="shadow" style="background-color:#FFFFFF">
                    <img src="https://inc.mizanstore.com/aassets/img/com_cart/produk/bahasa-jerman-super-simple-cara-praktis-kuasai.jpg"
                    style="margin-left:10px;margin-right:10px;margin-top:10px;margin-bottom:10px;" width="158px" height="225px">
                </div><br>
                <center><font face="San-serif" size="3px"><b>Cara Praktis Kuasai<br>Bahasa Jerman</b></font></center><br>
                <a class="btn btn-primary" href="" role="button" style="width:100%">
                    <font face="San-serif" size="3px" color="#FFFFFF">See Detail</font>
                </a>
            </div>
            <div class="col-2" style="margin-right:15px">
                <div class="shadow" style="background-color:#FFFFFF">
                    <img src="https://www.bukukita.com/babacms/displaybuku/105393_f.jpg"
                    style="margin-left:10px;margin-right:10px;margin-top:10px;margin-bottom:10px;" width="158px" height="225px">
                </div><br>
                <center><font face="San-serif" size="3px"><b>Bahasa Perancis itu Mudah</b></font></center><br>
                <a class="btn btn-primary" href="" role="button" style="width:100%">
                    <font face="San-serif" size="3px" color="#FFFFFF">See Detail</font>
                </a>
            </div>
            <div class="col-2" style="margin-right:15px">
                <div class="shadow" style="background-color:#FFFFFF">
                    <img src="http://opac-library.unhas.ac.id/uploaded_files/sampul_koleksi/original/Monograf/18994.jpg"
                    style="margin-left:10px;margin-right:10px;margin-top:10px;margin-bottom:10px;" width="158px" height="225px">
                </div><br>
                <center><font face="San-serif" size="3px"><b>Jago Kuasai Bahasa Arab</b></font></center><br><br>
                <a class="btn btn-primary" href="" role="button" style="width:100%">
                    <font face="San-serif" size="3px" color="#FFFFFF">See Detail</font>
                </a>
            </div>
        </div>
    </section>

    <section style="margin-left: 160px;">
        <br><br><br><br>
        <font face="San-serif" size="5"><b>Novel</b></font>
        <hr class="border border-primary border-1 opacity-100" style="width:185px">
        <div class="row row-cols-5">
            <div class="col-2" style="margin-right:15px">
                <div class="shadow" style="background-color:#FFFFFF">
                    <img src="https://cdnwpseller.gramedia.net/wp-content/uploads/2022/07/01111519/image001.jpg"
                    style="margin-left:10px;margin-right:10px;margin-top:10px;margin-bottom:10px;" width="158px" height="225px">
                </div><br>
                <center><font face="San-serif" size="3px"><b>Kata</b></font></center><br>
                <a class="btn btn-primary" href="" role="button" style="width:100%">
                    <font face="San-serif" size="3px" color="#FFFFFF">See Detail</font>
                </a>
            </div>
            <div class="col-2" style="margin-right:15px">
                <div class="shadow" style="background-color:#FFFFFF">
                    <img src="http://assets.kompasiana.com/items/album/2018/08/18/14ce416308240e90767f9eed91930d1f2bc21207-1-5b784869bde5753b1a0246f2.jpg"
                    style="margin-left:10px;margin-right:10px;margin-top:10px;margin-bottom:10px;" width="158px" height="225px">
                </div><br>
                <center><font face="San-serif" size="3px"><b>Pergi</b></font></center><br>
                <a class="btn btn-primary" href="" role="button" style="width:100%">
                    <font face="San-serif" size="3px" color="#FFFFFF">See Detail</font>
                </a>
            </div>
            <div class="col-2" style="margin-right:15px">
                <div class="shadow" style="background-color:#FFFFFF">
                    <img src="https://blokbojonegoro.com/upload/Image/image_74_img_20180623_081356.jpg"
                    style="margin-left:10px;margin-right:10px;margin-top:10px;margin-bottom:10px;" width="158px" height="225px">
                </div><br>
                <center><font face="San-serif" size="3px"><b>Dilan 1990</b></font></center><br>
                <a class="btn btn-primary" href="" role="button" style="width:100%">
                    <font face="San-serif" size="3px" color="#FFFFFF">See Detail</font>
                </a>
            </div>
            <div class="col-2" style="margin-right:15px">
                <div class="shadow" style="background-color:#FFFFFF">
                    <img src="https://inc.mizanstore.com/aassets/img/com_cart/produk/mariposa.jpg"
                    style="margin-left:10px;margin-right:10px;margin-top:10px;margin-bottom:10px;" width="158px" height="225px">
                </div><br>
                <center><font face="San-serif" size="3px"><b>Mariposa</b></font></center><br>
                <a class="btn btn-primary" href="" role="button" style="width:100%">
                    <font face="San-serif" size="3px" color="#FFFFFF">See Detail</font>
                </a>
            </div>
            <div class="col-2" style="margin-right:15px">
                <div class="shadow" style="background-color:#FFFFFF">
                    <img src="https://cdn.gramedia.com/uploads/items/9786239712716.jpg"
                    style="margin-left:10px;margin-right:10px;margin-top:10px;margin-bottom:10px;" width="158px" height="225px">
                </div><br>
                <center><font face="San-serif" size="3px"><b>Angkasa dan 56 Hari</b></font></center><br>
                <a class="btn btn-primary" href="angkasa.php" role="button" style="width:100%">
                    <font face="San-serif" size="3px" color="#FFFFFF">See Detail</font>
                </a>
            </div>
        </div><br><br><br>
        
        <div class="row row-cols-5">
            <div class="col-2" style="margin-right:15px">
                <div class="shadow" style="background-color:#FFFFFF">
                    <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2022/2/13/97f7e70c-e44d-41f8-b15b-f4c39365f6e4.jpg"
                    style="margin-left:10px;margin-right:10px;margin-top:10px;margin-bottom:10px;" width="158px" height="225px">
                </div><br>
                <center><font face="San-serif" size="3px"><b>Shaka Oh Shaka</b></font></center><br>
                <a class="btn btn-primary" href="" role="button" style="width:100%">
                    <font face="San-serif" size="3px" color="#FFFFFF">See Detail</font>
                </a>
            </div>
            <div class="col-2" style="margin-right:15px">
                <div class="shadow" style="background-color:#FFFFFF">
                    <img src="https://cdnwpseller.gramedia.net/wp-content/uploads/2022/03/30032635/image001-118.jpg"
                    style="margin-left:10px;margin-right:10px;margin-top:10px;margin-bottom:10px;" width="158px" height="225px">
                </div><br>
                <center><font face="San-serif" size="3px"><b>Teluk Alaska</b></font></center><br>
                <a class="btn btn-primary" href="" role="button" style="width:100%">
                    <font face="San-serif" size="3px" color="#FFFFFF">See Detail</font>
                </a>
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