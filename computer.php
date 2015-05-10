<!DOCTYPE html>
<html>
<head>
	<title>Vonrais-Computer</title>
  <link href="main.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="jquery.js"></script>
  <style>
      .wd{
        width: 200px;
        margin: 5px;
      }
  </style>
</head>
<body>
<script>
  $(document).ready(function(){
    $('#processor').change(function(){
      var rp = toRp($('#processor').val());
      $('#value1').val(rp);
    });
    $('#mainboard').change(function(){
      var rp = toRp($('#mainboard').val());
      $('#value2').val(rp);
    });
    $('#harddisk').change(function(){
      var rp = toRp($('#harddisk').val());
      $('#value3').val(rp);
    });
    $('#memory').change(function(){
      var rp = toRp($('#memory').val());
      $('#value4').val(rp);
    });
    $('#vga').change(function(){
      var rp = toRp($('#vga').val());
      $('#value5').val(rp);
    });
    $('#casing').change(function(){
      var rp = toRp($('#casing').val());
      $('#value6').val(rp);
    });
    $('#dvd').change(function(){
      var rp = toRp($('#dvd').val());
      $('#value7').val(rp);
    });
    $('#kNm').change(function(){
      var rp = toRp($('#kNm').val());
      $('#value8').val(rp);
    });
    $('#processor,#mainboard,#harddisk,#memory,#vga,#casing,#dvd,#kNm').change(function(){
      var a1 = parseInt($('#processor').val());
      var a2 = parseInt($('#mainboard').val());
      var a3 = parseInt($('#harddisk').val());
      var a4 = parseInt($('#memory').val());
      var a5 = parseInt($('#vga').val());
      var a6 = parseInt($('#casing').val());
      var a7 = parseInt($('#dvd').val());
      var a8 = parseInt($('#kNm').val());
      var rp = toRp(a1+a2+a3+a4+a5+a6+a7+a8);
      $('#value9').val(rp);
    });
    function toRp(angka){
        var rev     = parseInt(angka, 10).toString().split('').reverse().join('');
        var rev2    = '';
        for(var i = 0; i < rev.length; i++){
            rev2  += rev[i];
            if((i + 1) % 3 === 0 && i !== (rev.length - 1)){
                rev2 += '.';
            }
        }
        return 'Rp. ' + rev2.split('').reverse().join('') + ',00';
    }
  });
</script>
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
  <form class="form-inline" align="center" action="buy.php" method="post">
    <div class="form-group">
        <label class="wd">Processor</label>
    </div>
    <select class="wd btn btn-default" id="processor">
      <option value="0">--select--</option>
      <option value="300000">Core 2 Duo 3.0Ghz(e8400)</option>
      <option value="650000">Quad core Q6600 2.4Ghz</option>
      <option value="1250000">Core i3 3240 2.8Ghz</option>
      <option value="1950000">Core i5 3330 3.0Ghz</option>
      <option value="2750000">Core i7 3770 3.40Ghz</option>
      <option value="650000">AMD PHENOM X4 955 A3</option>
      <option value="1150000">AMD FM2 A8 6600</option>
  </select>
    <div align="center" style="display: inline;">
      <input type="text" class="form-control wd" id="value1" value="0" readonly>
    </div>

    <br>

    <div class="form-group">
        <label class="wd">MainBoard</label>
    </div>
    <select class="wd btn btn-default" id="mainboard">
      <option value="0">--select--</option>
      <option value="575000">Biostar A75-MG FM1</option>
      <option value="800000">Biostar G41</option>
      <option value="925000">GigaByte H81</option>
      <option value="980000">GigaByte P61A-D3</option>
      <option value="1150000">GigaByte Z77-DS3H</option>
    </select>
    <div align="center" style="display: inline;">
      <input type="text" class="form-control wd" id="value2" value="0" readonly>
    </div>

    <br>

    <div class="form-group">
        <label class="wd">Harddisk</label>
    </div>
    <select class="wd btn btn-default" id="harddisk">
      <option value="0">--select--</option>
      <option value="320000">250 GB SEAGATE </option>
      <option value="385000">500 GB SEAGATE </option>
      <option value="720000">1 TB SEAGATE </option>
      <option value="950000">2 TB SEAGATE </option>
      <option value="1450000">3 TB SEAGATE </option>
    </select>
    <div align="center" style="display: inline;">
      <input type="text" class="form-control wd" id="value3" value="0" readonly>
    </div>

    <br>

    <div class="form-group">
        <label class="wd">Memory RAM</label>
    </div>
    <select class="wd btn btn-default" id="memory">
      <option value="0">--select--</option>
      <option value="465000">DDR3 4GB V-GEN </option>
      <option value="900000">DDR3 8GB V-GEN </option>
      <option value="400000">DDR3 4GB SILICON POWER</option>
    </select>
    <div align="center" style="display: inline;">
      <input type="text" class="form-control wd" id="value4" value="0" readonly>
    </div>

    <br>

    <div class="form-group">
        <label class="wd">VGA</label>
    </div>
    <select class="wd btn btn-default" id="vga">
      <option value="0">--select--</option>
      <option value="500000">Power color 5570 DDR3 1GB 128 BIT</option>
      <option value="700000">Power color 6570 DDR3 2GB 128 BIT </option>
      <option value="953000">GigaByte GT730 2GB </option>
      <option value="710000">DA 65702GB DDR3 128BIT </option>
      <option value="3400000">Nvidia GTX760 2GB DDR3 </option>
    </select>
    <div align="center" style="display: inline;">
      <input type="text" class="form-control wd" id="value5" value="0" readonly>
    </div>

    <br>    

    <div class="form-group">
        <label class="wd">Casing</label>
    </div>
    <select class="wd btn btn-default" id="casing">
      <option value="0">--select--</option>
      <option value="185000">CASING SPC/POWER PRO </option>
      <option value="665000">CASING SIMCODE </option>
      <option value="395000">CASING TRANSPARAN </option>
      <option value="250000">CASING POWER LOGIC </option>
      <option value="475000">CASING ARMAGEDDON </option>
    </select>
    <div align="center" style="display: inline;">
      <input type="text" class="form-control wd" id="value6" value="0" readonly>
    </div>

    <br>

    <div class="form-group">
        <label class="wd">DVD</label>
    </div>
    <select class="wd btn btn-default" id="dvd">
      <option value="0">--select--</option>
      <option value="173000">LG DVDRW </option>
      <option value="177000">SAMSUNG DVDRW 22X </option>
      <option value="195000">LG DVDRW 24X SATA BOX </option>
    </select>
    <div align="center" style="display: inline;">
      <input type="text" class="form-control wd" id="value7" value="0" readonly>
    </div>

    <br>

    <div class="form-group">
        <label class="wd">Keyboard & Mouse</label>
    </div>
    <select class="wd btn btn-default" id="kNm">
      <option value="0">--select--</option>
      <option value="125000">KEYB + MOUSE GIGABYTE </option>
      <option value="325000">KEYB + MOUSE LOGITECT WIRELESS MK </option>
      <option value="120000">KEYB + MOUSE LOGITECT USB </option>
      <option value="75000">KEYB + MOUSE OPT ADVANCE / ITECH  </option>
      <option value="125000">KEYB + MOUSE GENIUS MULTIMEDIA </option>
    </select>
    <div align="center" style="display: inline;">
      <input type="text" class="form-control wd" id="value8" value="0" readonly>
    </div>

    <br>
    <br>

    <div class="form-group">
        <label class="wd" style="width:400px; margin-right:15px;">Total</label>
    </div>
     <div align="center" style="display: inline;">
      <input type="text" class="form-control wd" id="value9" name="total" value="0" readonly>
    </div>
    <div>
      <button class="btn btn-info" type="submit" value="Submit">Buy Now</button>
      <button class="btn btn-info" type="reset" value="Reset">Reset</button>
    </div>
  </form>
</body>
</html>