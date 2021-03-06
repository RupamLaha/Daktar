<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Daktar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="style.css">
  </head>
  <body>

    <div class="container">
      <div class="row content">
        <div class="col-12" id="login-doctor">
          <a href="doctor-login.php">Login as Doctor</a>
        </div>
        <div class="col-md-6 mb-3">
            <h2><center>Daktar</center></h2>
            <img src="doc2.jpg" class="img-fluid" alt="image"><br><br>
            <center>Now book your Doctor's appointment hasstle free in just a click</center>
        </div>
        <div class="col-md-6">
          <br>
          <center><h4>Sign In</h4></center>
          <br>
          <form>
            <div class="form-group">
              <lable for="email">Email</lable>
              <input type="email" name="email" class="form-control">
              <br>
            </div>
              <div class="form-group">
                <lable for="password">Password</lable>
                <input type="password" name="password" class="form-control">
              </div>
              <br>
                <button class="btn btn-class">Log In</button>
              <div class="signup">
                <br>
                New to Daktar?
                <a href="signup.php" class="signup-link">Sign Up</a>
              </div>
          </form>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>
