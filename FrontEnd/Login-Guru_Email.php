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
            <br>
            <form action="Home-Guru.php" method="POST" style="padding-left: 50px; padding-right: 50px; margin-right:70px">
                <div class="form_wrap" style="margin-top:100px;margin-left:70px">
                    <div class="input_grp">
                        <h4 style="font-family:San-serif">Login</h4><br>
                        <input type="hidden" id="id" name="id">
                        
                        <label for="email" class="form-label" style="font-family:San-serif;font-size:15px">Email</label>
                        <input type="email" class="form-control" id="email" name="email" style="border-radius: 15px;background-color:#F2F0F0"><br>

                        <label for="password" class="form-label" style="font-family:San-serif;font-size:15px">Password</label>
                        <input type="password" class="form-control" id="password" name="password" style="border-radius: 15px;background-color:#F2F0F0"><br><br>

                        <button type="submit" class="btn btn-primary" style="width: 100px; height:40px;border-radius: 15px">Login</button>
                    </div>
                    <br>
                    <p style="font-family:San-serif">Login with <a href="Login-Guru_Hp.php" target = "_self" style="color:blue;text-decoration:none">Phone Number</a></p>
                    <p style="font-family:San-serif">Don't have an account? <a href="Signup-Guru.php" target = "_self" style="color:blue;text-decoration:none">Sign Up</a></p>
                </div><br><br><br><br>
            </form>
        </div>

        <div class="col">
            <p style="font-family:San-serif;font-size:50px;margin-top:80px;margin-left:150px"><b>Welcome, Teacher.</b></p>
            <img src="vector\guru.png" style="width:65%;margin-top:30px;margin-left:120px">
        </div>
    </div>
</body>
</html>