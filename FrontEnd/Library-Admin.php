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
            <a class="navbar-brand" href="Home-Admin.php">
            <img src="LOGO.png" width="200" height="50">
            </a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-link" href="Home-Admin.php" style="margin-left: 80px;font-family:San-serif">ABSENT</a>
                <a class="nav-link" href="Library-Admin.php" style="margin-left: 20px;font-family:San-serif"><b>LIBRARY</b></a>
                <a class="nav-link" href="Payment-Admin.php" style="margin-left: 20px;font-family:San-serif">PAYMENT</a>
                <a class="nav-link" href="Extra-Admin.php" style="margin-left: 20px;font-family:San-serif">EXTRACURRICULAR</a>
                <a class="nav-link" href="Activity-Admin.php" style="margin-left: 20px;font-family:San-serif">ACTIVITY</a>
                </div>
            </div>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a button class="btn btn-outline-dark rounded-3" type="button" style="width:120px;height:40px" data-bs-toggle="dropdown">
                        <p style="font-family:San-serif;margin-left:3px"><b>Admin<img src="https://cdn1.iconfinder.com/data/icons/ios-11-ui-elements-vol-1/29/25_dropdown_menu_down_arrow-512.png" alt="Logo" width="25" height="25"></b></p>
                    </a>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href="SMAN13.php">Logout</a>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <br><br><br><br>
    <center>
        <font face="San-serif" size="6"><b>Book Request List</b></font>
    </center>
    <br><br>
    <section style="margin-left:100px;margin-right:100px">
        <div class="card">
            <table class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Full Name</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Class</th>
                        <th scope="col">Code Book</th>
                        <th scope="col">Book Title</th>
                        <th scope="col">Start</th>
                        <th scope="col">End</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nur Afni</td>
                        <td>5672833</td>
                        <td>XII IPA</td>
                        <td>10.08.005</td>
                        <td>Angkasa dan 56 hari</td>
                        <td>23/11/2022</td>
                        <td>23/11/2022</td>
                        <td style="color:#104DAA">Returned</td>
                        <td>
                            <a href="BookAdmin-Edit.php">
                                <button type="submit" class="btn btn-primary" id="edit" name="edit" style="margin-left:5px">Edit</button>
                            </a>
                            <a href="">
                                <button type="submit" class="btn btn-danger" id="edit" name="edit" style="margin-left:5px">Delete</button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Anugerah Bagas Kurniawan</td>
                        <td>5012132</td>
                        <td>X IPS</td>
                        <td>10.12.001</td>
                        <td>Teluk Alaska</td>
                        <td>24/11/2022</td>
                        <td>23/11/2022</td>
                        <td style="color:#104DAA">Returned</td>
                        <td>
                            <a href="BookAdmin-Edit.php">
                                <button type="submit" class="btn btn-primary" id="edit" name="edit" style="margin-left:5px">Edit</button>
                            </a>
                            <a href="">
                                <button type="submit" class="btn btn-danger" id="edit" name="edit" style="margin-left:5px">Delete</button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Ramya Anindita</td>
                        <td>5012132</td>
                        <td>X IPA</td>
                        <td>22.12.001</td>
                        <td>Mariposa</td>
                        <td>27/11/2022</td>
                        <td>23/11/2022</td>
                        <td style="color:#104DAA">Accepted</td>
                        <td>
                            <a href="BookAdmin-Edit.php">
                                <button type="submit" class="btn btn-primary" id="edit" name="edit" style="margin-left:5px">Edit</button>
                            </a>
                            <a href="">
                                <button type="submit" class="btn btn-danger" id="edit" name="edit" style="margin-left:5px">Delete</button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Muhammad Salim Mursid</td>
                        <td>5012132</td>
                        <td>XII IPS</td>
                        <td>10.12.001</td>
                        <td>Kimia XII</td>
                        <td>30/11/2022</td>
                        <td>23/11/2022</td>
                        <td style="color:#104DAA">Rejected</td>
                        <td>
                            <a href="BookAdmin-Edit.php">
                                <button type="submit" class="btn btn-primary" id="edit" name="edit" style="margin-left:5px">Edit</button>
                            </a>
                            <a href="">
                                <button type="submit" class="btn btn-danger" id="edit" name="edit" style="margin-left:5px">Delete</button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Amanda Aurellie Utami</td>
                        <td>5012132</td>
                        <td>XI IPA</td>
                        <td>22.12.001</td>
                        <td>Fisika XI</td>
                        <td>02/01/2023</td>
                        <td>23/11/2022</td>
                        <td style="color:#104DAA">Process</td>
                        <td>
                            <a href="BookAdmin-Edit.php">
                                <button type="submit" class="btn btn-primary" id="edit" name="edit" style="margin-left:5px">Edit</button>
                            </a>
                            <a href="">
                                <button type="submit" class="btn btn-danger" id="edit" name="edit" style="margin-left:5px">Delete</button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>
        </div>
    </section>
        
    
    <br><br><br><br><br>
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
                <h9 style="font-family:San-serif;color:white">?? Copyright 2022 <b>SMA Negeri 13 Pangkep</b> All Rights Reserved</h9>
            </div>
            <div class="col-2">
                <h9 style="font-family:San-serif;color:white;text-align:right">Design by <b>Group 3</b></h9>
                <br><br>
            </div>
    </footer>
</body>
</html>