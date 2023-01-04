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
            <a class="navbar-brand" href="Home-Pustakawan.php">
                <img src="LOGO.png" width="200" height="50">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                <a button class="btn btn-outline-dark rounded-3" type="button" style="width:160px;height:40px" data-bs-toggle="dropdown">
                        <p style="font-family:San-serif;margin-left:3px"><b>Pustakawan<img src="https://cdn1.iconfinder.com/data/icons/ios-11-ui-elements-vol-1/29/25_dropdown_menu_down_arrow-512.png" alt="Logo" width="25" height="25"></b></p>
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
        <font face="San-serif" size="6"><b>Confirm Book Request</b></font>
    </center>
    <br><br>
    <section style="margin-left:160px;margin-right:160px">
        <div class="card">
            <div class="card-header" style="background-color:#85A9FF;color:white">Book Request Confirmation</div>
            <br>
            <form action="Home-Pustakawan.php" method="POST" style="margin-left: 10px; margin-right: 10px; padding-left:100px; padding-right:100px">
                <div class="mb-3">
                    <input type="hidden" id="id_customer" name="id_customer">
                </div>
                <div class="form-wrap">
                    <div class="mb-3">
                        <label for="username" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="username" name="username" value="Amanda Aurellie Utami" disabled>
                    </div>
                    <div class="input-group">
                        <div class="input-wrap" style="width: 390px; margin-right:25px">
                            <label for="nis" class="form-label">NIS</label>
                            <input type="text" class="form-control" id="nis" name="nis" value="5012132" disabled>
                        </div>
                        <div class="input-wrap" style="width: 390px">
                            <label for="class" class="form-label">Class</label>
                            <input type="text" class="form-control" id="class" name="class" value="XI IPA" disabled>
                        </div>
                    </div><br>
                    <div class="input-group">
                        <div class="input-wrap" style="width: 390px; margin-right:25px">
                            <label for="title" class="form-label">Book Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="Fisika XI">
                        </div>
                        <div class="input-wrap" style="width: 390px">
                            <label for="code" class="form-label">Code</label>
                            <input type="text" class="form-control" id="code" name="code" value="22.12.001">
                        </div>
                    </div><br>
                    <div class="input-group">
                        <div class="input-wrap" style="width: 390px; margin-right:25px">
                            <label for="start" class="form-label">Start Date</label>
                            <input type="text" class="form-control" id="start" name="start" value="02/01/2023" disabled>
                        </div>
                        <div class="input-wrap" style="width: 390px">
                            <label for="return" class="form-label">Return Date</label>
                            <input type="text" class="form-control" id="return" name="return" value="23/11/2022" disabled>
                        </div>
                    </div><br>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" aria-label="Default select example">
                            <option value="Process">Process</option>
                            <option value="Accepted">Accepted</option>
                            <option value="Rejected">Rejected</option>
                            <option value="Returned">Returned</option>
                            <option value="Fined">Fined</option>
                        </select>
                    </div>
                    
                    <br><br>
                    <div class="d-grid gap-2" style="width:15%;margin-left:auto;margin-right:0"> 
                        <button type="submit" class="btn btn-primary" id="confirm" name="confirm" value="confirm">Confirm</button>
                    </div>
                </div>
            </form>
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
                <h9 style="font-family:San-serif;color:white">© Copyright 2022 <b>SMA Negeri 13 Pangkep</b> All Rights Reserved</h9>
            </div>
            <div class="col-2">
                <h9 style="font-family:San-serif;color:white;text-align:right">Design by <b>Group 3</b></h9>
                <br><br>
            </div>
    </footer>
</body>
</html>