<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
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
    <form action="authenticate.php" method="post">
      <div class="container col-md-5 justify-content-center pt-4">

        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" placeholder="Email" name = "email" onblur="validateEmail();">
        </div>

        <div id="mailmessage"></div>

        <div class="mb-3">
          <label for="password" class="col-sm-2 col-form-label">Password</label>
          <input type="password" class="form-control" id="password" name = "password" placeholder="password">
        </div>
    
        <div class="mb-3 col-md-4">
          <button type = "submit" class="form-control btn btn-danger" name = "login" id="login" >Login</button>
        </div>
      </div>
    </form>  
  
</body>
</html>