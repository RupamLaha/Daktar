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

        <!-- Doctor SignUp link -->

        <div class="col-12" id="login-doctor">
          <a href="doctor-signup.php">Signup as Doctor</a>
        </div>

        <!-- intro column... -->

        <div class="col-md-6 mb-3">
            <h2><center>Daktar</center></h2>
            <img src="doc2.jpg" class="img-fluid" alt="image"><br><br>
            <center>Now book your Doctor's appointment hasstle free in just a click</center>
        </div>

        <!-- //form column... -->

        <div class="col-md-6">
          <br>
          <center><h4>Sign Up</h4></center>
          <br>
          <form>
            <!-- //name... -->
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control">
              <br>
            </div>
            <!-- //email... -->
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control">
              <br>
            </div>
            <!-- //address... -->
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" name="address" class="form-control">
              <br>
            </div>
            <!-- //city... -->
              <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" name="city">
                <br>
              </div>
              <!-- //state... -->
              <div class="form-group">
                <label for="state">State</label>
                <input type="text" class="form-control" name="state">
                <br>
              </div>
              <!-- //pin... -->
              <div class="form-group">
                <label for="pin">Pin</label>
                <input type="text" class="form-control" name="pin">
                <br>
              </div>

              <!-- //dob -->
              <div class="form-group"> <!-- Date input -->
                <label class="control-label" for="date">Date of Birth</label>
                <input class="form-control" id="date" name="date" placeholder="dd/mm/yyyy" type="date"/>
                <br>
              </div>

              <!-- //gender -->

              <div class="form-group">
                <label for="gender">Gender</label><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="male">
                <label class="form-check-label" for="inlineRadio1">Male</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="female">
                <label class="form-check-label" for="inlineRadio2">Female</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="others">
                <label class="form-check-label" for="inlineRadio3">Others</label>
              </div>
            </div>
            <br>

            <!-- //password... -->
            <div class="form-group">
              <lable for="password">Password</lable>
              <input type="password" name="password" class="form-control">
              <br>
            </div>
            <!-- //confirm password... -->
            <div class="form-group">
              <lable for="confirm_password">Confirm Password</lable>
              <input type="password" name="confirm_password" class="form-control">
            </div>
            <!-- //signup button... -->
            <br>
              <button class="btn btn-class">Sign Up</button>
            <div class="signup">
              <!-- //signin link -->
            <br>
              Already have an account?
              <a href="index.php" class="signup-link">Sign In</a>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>
