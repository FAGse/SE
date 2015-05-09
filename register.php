<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Static Top Navbar Example for Bootstrap</title>

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
          <a class="navbar-brand" href="index.html">Vonrais</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="computer.html">Computer</a></li>
            <li><a href="forum.html">Forum</a></li>
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


    <div class="container holder col-md-6 col-md-offset-3" style="background-color:#fcfcfc">

      <!-- Main component for a primary marketing message or call to action -->
      <form action="controller/doRegister.php" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
          <label for="userame">Full Name</label>
          <input type="text" class="form-control" id="userame" placeholder="Enter Full Name" name="fullname">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> I Agree with the terms and conditions
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div> <!-- /container -->

    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
  </body>
</html>
