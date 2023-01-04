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
    <div class="row">
        <div class="col-6" style="color:white; background-color:#85A9FF">
            <form action="Login-Murid_Email.php" method="POST" style="padding-left: 50px; padding-right: 50px; margin-right:70px">
                <div class="form_wrap" style="margin-top:60px;margin-left:70px">
                    <div class="input_grp">
                        <h4 style="font-family:San-serif">Sign Up</h4><br>
                        <input type="hidden" id="id" name="id">

                        <label for="nama" class="form-label" style="font-family:San-serif;font-size:15px">Full Name</label>
                        <input type="text" class="form-control" id="nama" name="nama" style="border-radius: 15px;background-color:#F2F0F0"><br>

                        <label for="no_hp" class="form-label" style="font-family:San-serif;font-size:15px">Phone Number</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" style="border-radius: 15px;background-color:#F2F0F0"><br>
                        
                        <label for="email" class="form-label" style="font-family:San-serif;font-size:15px">Email</label>
                        <input type="email" class="form-control round-5" id="email" name="email" style="border-radius: 15px;background-color:#F2F0F0"><br>

                        <label for="password" class="form-label" style="font-family:San-serif;font-size:15px">Password</label>
                        <input type="password" class="form-control" id="password" name="password" style="border-radius: 15px;background-color:#F2F0F0"><br>

                        <label for="konfirmasi" class="form-label" style="font-family:San-serif;font-size:15px">Confirm Password</label>
                        <input type="password" class="form-control" id="konfirmasi" name="konfirmasi" style="border-radius: 15px;background-color:#F2F0F0"><br><br>

                        <button type="submit" class="btn btn-primary" style="width: 120px; height:40px;border-radius: 15px">Sign Up</button>
                    </div>
                    <br>
                    <p style="font-family:San-serif">Already have an account? <a href="Login-Murid_Email.php" target = "_self" style="color:blue;text-decoration:none">Login</a> </p>
                </div><br><br>
            </form>
        </div>

        <div class="col">
            <p style="font-family:San-serif;font-size:50px;margin-top:80px;margin-left:150px"><b>Welcome, Student.</b></p>
            <img src="https://www.gempool.ie/images/made/images/uploads/job_application_process_878_667_c1.jpg" style="width:75%;margin-top:30px;margin-left:80px">
        </div>
    </div>
</body>

</html>