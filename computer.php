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
      <option value="1">Core 2 Duo 3.0Ghz(e8400)</option>
      <option value="2">Quad core Q6600 2.4Ghz</option>
      <option value="3">Core i3 3240 2.8Ghz</option>
      <option value="4">Core i5 3330 3.0Ghz</option>
      <option value="5">Core i7 3770 3.40Ghz</option>
      <option value="6">AMD PHENOM X4 955 A3</option>
      <option value="7">AMD FM2 A8 6600</option>
    </select>
    <div align="center" style="display: inline;">
      <input type="text" class="form-control wd" id="value1" value="0" readonly>
    </div>

    <br>

    <div class="form-group">
        <label class="wd">MainBoard</label>
    </div>
    <select class="wd btn btn-default" id="mainboard">
      <option value="select">--select--</option>
      <option value="1">Biostar A75-MG FM1</option>
      <option value="2">Biostar G41</option>
      <option value="3">GigaByte H81</option>
      <option value="4">GigaByte P61A-D3</option>
      <option value="5">GigaByte Z77-DS3H</option>
    </select>
    <div align="center" style="display: inline;">
      <input type="text" class="form-control wd" id="value2" value="0" readonly>
    </div>

    <br>

    <div class="form-group">
        <label class="wd">Harddisk</label>
    </div>
    <select class="wd btn btn-default" id="harddisk">
      <option value="select">--select--</option>
      <option value="1">250 GB SEAGATE </option>
      <option value="2">500 GB SEAGATE </option>
      <option value="3">1 TB SEAGATE </option>
      <option value="4">2 TB SEAGATE </option>
      <option value="5">3 TB SEAGATE </option>
    </select>
    <div align="center" style="display: inline;">
      <input type="text" class="form-control wd" id="value3" value="0" readonly>
    </div>

    <br>

    <div class="form-group">
        <label class="wd">Memory RAM</label>
    </div>
    <select class="wd btn btn-default" id="memory">
      <option value="select">--select--</option>
      <option value="1">DDR3 4GB V-GEN </option>
      <option value="2">DDR3 8GB V-GEN </option>
      <option value="3">DDR3 4GB SILICON POWER</option>
    </select>
    <div align="center" style="display: inline;">
      <input type="text" class="form-control wd" id="value4" value="0" readonly>
    </div>

    <br>

    <div class="form-group">
        <label class="wd">VGA</label>
    </div>
    <select class="wd btn btn-default" id="vga">
      <option value="select">--select--</option>
      <option value="1">Power color 5570 DDR3 1GB 128 BIT</option>
      <option value="2">Power color 6570 DDR3 2GB 128 BIT </option>
      <option value="3">GigaByte GT730 2GB </option>
      <option value="4">DA 65702GB DDR3 128BIT </option>
      <option value="5">Nvidia GTX760 2GB DDR3 </option>
    </select>
    <div align="center" style="display: inline;">
      <input type="text" class="form-control wd" id="value5" value="0" readonly>
    </div>

    <br>    

    <div class="form-group">
        <label class="wd">Casing</label>
    </div>
    <select class="wd btn btn-default" id="casing">
      <option value="select">--select--</option>
      <option value="1">CASING SPC/POWER PRO </option>
      <option value="2">CASING SIMCODE </option>
      <option value="3">CASING TRANSPARAN </option>
      <option value="4">CASING POWER LOGIC </option>
      <option value="5">CASING ARMAGEDDON </option>
    </select>
    <div align="center" style="display: inline;">
      <input type="text" class="form-control wd" id="value6" value="0" readonly>
    </div>

    <br>

    <div class="form-group">
        <label class="wd">DVD</label>
    </div>
    <select class="wd btn btn-default" id="dvd">
      <option value="select">--select--</option>
      <option value="1">LG DVDRW </option>
      <option value="2">SAMSUNG DVDRW 22X </option>
      <option value="3">LG DVDRW 24X SATA BOX </option>
    </select>
    <div align="center" style="display: inline;">
      <input type="text" class="form-control wd" id="value8" value="0" readonly>
    </div>

    <br>

    <div class="form-group">
        <label class="wd">Keyboard & Mouse</label>
    </div>
    <select class="wd btn btn-default" id="kNm">
      <option value="select">--select--</option>
      <option value="1">KEYB + MOUSE GIGABYTE </option>
      <option value="2">KEYB + MOUSE LOGITECT WIRELESS MK </option>
      <option value="3">KEYB + MOUSE LOGITECT USB </option>
      <option value="4">KEYB + MOUSE OPT ADVANCE / ITECH  </option>
      <option value="5">KEYB + MOUSE GENIUS MULTIMEDIA </option>
    </select>
    <div align="center" style="display: inline;">
      <input type="text" class="form-control wd" id="value9" value="0" readonly>
    </div>

    <br>
    <br>

    <div class="form-group">
        <label class="wd" style="width:400px; margin-right:15px;">Total</label>
    </div>
     <div align="center" style="display: inline;">
      <input type="text" class="form-control wd" id="value10" value="0" readonly>
    </div>
    <div>
      <button class="btn btn-info" type="submit" value="Submit">Buy Now</button>
      <button class="btn btn-info" type="reset" value="Reset">Reset</button>
    </div>
  </form>
</body>
</html>