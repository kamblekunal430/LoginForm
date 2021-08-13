<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="validate.js"></script>
  <style type="text/css">
    li{color: red;}
  </style>
</head>
<body>

    <div class="container col-md-5 text-center mt-4">
        <img class = "text-center" src="simpli.jpg" alt="simplilearn logo">
        <h1 class="pt-4">
            Welcome to Simplilearn
        </h1>
    </div>

  <div class="container col-md-5 d-flex justify-content-center pt-4">

    <div class="mb-3 col-md-4 m-4 text-center" id = "container">
        <h4>New User</h4>
        <a href="register.php">
        <button class="form-control btn btn-success" >Register</button>
        </a>
        
        <br><br><br>
        <h4>Existing User</h4>
        <a href="login.php">
        <button class="form-control btn btn-success">Login</button>
        </a>
       
        
    </div>


  </div>
</body>
</html>