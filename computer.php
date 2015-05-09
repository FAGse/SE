<!DOCTYPE html>
<html>
<head>
	<title>Computer</title>
  <link href="main.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <style>
      .wd{
        width: 200px;
        margin: 5px;
      }
  </style>
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
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="#">Computer</a></li>
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
  <form class="form-inline" align="center">
    <div class="form-group">
        <label class="wd">Processor</label>
    </div>
    <select class="wd btn btn-default" id="processor">
      <option value="select">--select--</option>
    </select>
    <div align="center" style="display: inline;">
      <input type="text" class="form-control wd" id="value1" readonly>
    </div>

    <br>

    <div class="form-group">
        <label class="wd">Mainboard</label>
    </div>
    <select class="wd btn btn-default" id="mainboard">
      <option value="select">--select--</option>
    </select>
    <div align="center" style="display: inline;">
      <input type="text" class="form-control wd" id="value2" readonly>
    </div>

    <br>

    <div class="form-group">
        <label class="wd">Harddisk</label>
    </div>
    <select class="wd btn btn-default" id="harddisk">
      <option value="select">--select--</option>
    </select>
    <div align="center" style="display: inline;">
      <input type="text" class="form-control wd" id="value3" readonly>
    </div>

    <br>

    <div class="form-group">
        <label class="wd">Memory RAM</label>
    </div>
    <select class="wd btn btn-default" id="memory">
      <option value="select">--select--</option>
    </select>
    <div align="center" style="display: inline;">
      <input type="text" class="form-control wd" id="value4" readonly>
    </div>

    <br>

     <div class="form-group">
        <label class="wd">VGA</label>
    </div>
    <select class="wd btn btn-default" id="vga">
      <option value="select">--select--</option>
    </select>
    <div align="center" style="display: inline;">
      <input type="text" class="form-control wd" id="value5" readonly>
    </div>

    <br>    

     <div class="form-group">
        <label class="wd">Casing</label>
    </div>
    <select class="wd btn btn-default" id="casing">
      <option value="select">--select--</option>
    </select>
    <div align="center" style="display: inline;">
      <input type="text" class="form-control wd" id="value6" readonly>
    </div>

    <br>

     <div class="form-group">
        <label class="wd">DVD</label>
    </div>
    <select class="wd btn btn-default" id="dvd">
      <option value="select">--select--</option>
    </select>
    <div align="center" style="display: inline;">
      <input type="text" class="form-control wd" id="value8" readonly>
    </div>

    <br>

     <div class="form-group">
        <label class="wd">Keyboard & Mouse</label>
    </div>
    <select class="wd btn btn-default" id="kNm">
      <option value="select">--select--</option>
    </select>
    <div align="center" style="display: inline;">
      <input type="text" class="form-control wd" id="value9" readonly>
    </div>

    <br>
  </form>
</body>
</html>