<?php
  error_reporting(E_ALL);
    print_r($_POST);
    include('/submit_data.php');
    $submitData = new submit_data();
      //$returnValue = $submitData->insert();


     ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/developer.css">
    <title></title>
  </head>
  <body>
    <div class="container padding">
        <div class="row">
          <div class="col-md-12">
            <h3>Register user</h3>
            <form class="" action="index.php" method="post">
                <div class="form-group">
                  <label for="">Enter Your Name</label>
                  <input type="text" name="name" class="form-control"
                  placeholder ="Enter name">
                </div>

                <div class="form-group">
                  <label for="">Enter Your Email</label>
                  <input type="text" name="email"  class="form-control"
                  placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <label for="">Enter Phone number</label>
                  <input type="text" name="phone" class="form-control"
                  placeholder="Enter you Phone">
                </div>
                <button type="submit" class="btn btn-primary" >Regiter Now</button>
            </form>

          </div>
        </div>
    </div>

  <script href="js/bootstrap.min.js"></script>
  </body>
</html>
