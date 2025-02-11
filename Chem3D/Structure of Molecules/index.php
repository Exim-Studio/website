  <!DOCTYPE html>
  <html>
    <head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-W7EGVWQ1VM"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-W7EGVWQ1VM');
</script>
      <link rel="stylesheet" href="../../css/home.css">
    <meta name="theme-color" content="#111">
      <link rel="stylesheet" href="../../css/mob.css">
      <link rel="stylesheet" href="../../css/style.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="shortcut icon" href="../../img/chem3d.jpg" type="image/jpg">
      <title>Structure of Solids</title>
    </head>
    <body style="background:#1c1c1c;">

  <?php
  require '../../Head/header.php';

   ?>

   <a href="../"><i id="bbt" class="material-icons" style="font-size:20px;border: 1px solid #fff;background:#fff;text-decoration:none;border-radius:100%;color:#111;padding:7px 7px 7px 7px;box-shadow: 2px 2px 5px #545454;margin-top:5px;position:sticky;top:0.5%;left:0.5%;">arrow_back</i></a>

    <div id="search">
      <h2>Structure of Solids</h2>
      <input type="text" id="Input" onkeyup="Function()" placeholder="Search for 3D models..." title="Search for 3D models...">

      <ul id="UL">
      	<li><a href="SC">SC - Simple Cubic</a></li>
      	<li><a href="BCC">BCC - Body Centered Cubic </a></li>
        <li><a href="FCC">FCC - Face Centered Cubic </a></li>
        <li><a href="ECC">End-Centered Cubic </a></li>
        <li><a href="EdgeCC">Edge-Centered Cubic </a></li>
        <li><a href="Hex">Hexagonal Unit Cell </a></li>
        <li><a href="NaCl">Sodium Chloride (NaCl) </a></li>
        <li><a href="ZnS">Zincblende (ZnS)  </a></li>
        <li><a href="CsCl">Cesium chloride (CsCl) </a></li>
      	<li><a href="CaF2">Calcium fluoride (CaF2) </a></li>
      </ul>
    </div>
    <div id="particles-js"></div>

    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.js"></script>
    <script src="../../js/app2.js"></script>

    <script>
    function Function() {
        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById("Input");
        filter = input.value.toUpperCase();
        ul = document.getElementById("UL");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
    </script>
    <script>
        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
    </script>
    <script>
    function ction(x) {
    if (x.matches) {
      document.getElementById("search").style.width = "80%";

    } else {
      document.getElementById("search").style.width = "50%";
      document.getElementById("bbt").style.left = "8%";
      document.getElementById("bbt").style.top = "15%";
      document.getElementById("bbt").style.position = "fixed";
    }
    }

    var x = window.matchMedia("(max-width: 600px)")
    ction(x)
    x.addListener(ction)
    </script>
    <script>
        function border() {
          var x = document.getElementById("chem");
          x.className = "active";
        }
        border();
    </script>
    </body>
  </html>
