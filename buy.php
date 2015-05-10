<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Vonrais-Payment</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="main.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top" style="background-color:#13244f;color:#f9494b">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- ini kasih logo nya sama tulisan coba disamain yaa -->
          <a class="navbar-brand" href="index.php">Vonrais</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="#">Home</a></li>
            <li><a href="computer.php">Computer</a></li>
            <li><a href="forum.php">Forum</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <form class="form-inline" style="margin-top:0.5em;">
              <div class="form-group">
                <label class="sr-only" for="searchBar">Search Product</label>
                <div class="input-group">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
                  <input type="text" class="form-control" id="searchBar" placeholder="Search Product">
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Search</button>
            </form>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container holder" style="background-color:#fcfcfc">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="col-md-12">
        <h2 style="text-align:center">Pay With Your Credit Card</h2>
        <form action="thankyou.php">
        <div class="col-md-6">
          <h3>Your payment information</h3>
          <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firstName" name="email">
          </div>
          <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="email">
          </div>
          <div class="form-group">
            <label for="cardNumber">Card Number</label>
            <input type="number" class="form-control" id="cardNumber" name="email">
          </div>
          <div class="form-group">
            <label for="verification">Card Verification Number</label>
            <input type="text" class="form-control" id="verification" name="email">
          </div>
          <div class="form-group">
            <label for="expMonth">Expiration Date</label>
            <select class="wd btn btn-default" id="mainboard">
              <option value="0">--select--</option>
              <option value="575000">1</option>
              <option value="800000">2</option>
              <option value="925000">3</option>
              <option value="980000">4</option>
              <option value="1150000">5</option>
              <option value="1150000">6</option>
              <option value="1150000">7</option>
              <option value="1150000">8</option>
              <option value="1150000">9</option>
              <option value="1150000">10</option>
              <option value="1150000">11</option>
              <option value="1150000">12</option>
            </select>
            <select class="wd btn btn-default" id="mainboard">
              <option value="0">--select--</option>
              <option value="575000">2015</option>
              <option value="575000">2016</option>
              <option value="575000">2017</option>
              <option value="575000">2018</option>
              <option value="575000">2019</option>
              <option value="575000">2020</option>
            </select>
          </div>
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
        </div>
        <div class="col-md-6">
          <h3>Your Billing Information</h3>
          <div class="form-group">
            <label for="address1">Address 1</label>
            <input type="text" class="form-control" id="address1" name="email">
          </div>
          <div class="form-group">
            <label for="address2">Address 2</label>
            <input type="text" class="form-control" id="address2" name="email">
          </div>
          <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" name="email">
          </div>
          <div class="form-group">
            <label for="zip">Zip/Postal Code</label>
            <input type="text" class="form-control" id="zip" name="email">
          </div>
          <div class="form-group">
            <label for="country">Country</label>
            <input type="text" class="form-control" id="country" name="email">
          </div>
          <div class="form-group">
            <label for="state">State</label>
            <input type="text" class="form-control" id="state" name="email">
          </div>
          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="number" class="form-control" id="phone" name="email">
          </div>
        </div>
        <div class="col-md-6" style="text-align:center">
          <img src="images/verif.png">
        </div>
        <div class="col-md-6" style="text-align:center; margin-top:2em;">
          <button type="submit" class="btn btn-primary">Pay Now</button>
        </div>
        </form>
        <div class="col-md-12" style="text-align:center">
          <h2>Pay With Bank Transfer</h2>
          <div class="col-md-6 col-md-offset-3" style="text-align:left">
            <h3>Rekening BCA</h3>
            <h4>Nomor Rekening: 7265829284</h4>
            <h4>Atas Nama: Alvin Hartanto</h4>
            <button onclick="window.open('thankyou.php','_self')" class="btn btn-default">Pay to This Bank</button>
            <h3>Rekening Mandiri</h3>
            <h4>Nomor Rekening: 84658301845</h4>
            <h4>Atas Nama: Alvin Hartanto</h4>
            <button class="btn btn-default" onclick="window.open('thankyou.php','_self')">Pay to This Bank</button>
            <h3>Rekening BRI</h3>
            <h4>Nomor Rekening: 00846267592</h4>
            <h4>Atas Nama: Alvin Hartanto</h4>
            <button class="btn btn-default" onclick="window.open('thankyou.php','_self')">Pay to This Bank</button>
          </div>
        </div>
      </div>

    </div> <!-- /container -->

    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
  </body>
</html>
