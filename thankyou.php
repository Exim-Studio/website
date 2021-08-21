<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta name="theme-color" content="#111">
    <title>Thank you for Subscribing</title>
    <link rel="stylesheet" href="css/style for mob.css">
    <meta http-equiv="refresh" content="5;url=http://eximstudio.com">
    <style>
      /* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #818181; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #4e4e4e; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #2b2b2b; 
  border-radius: 3px;
}
    </style>
</head>
<?php
require "Head/header.php"
?>
<body style="background:#111;">
    <div style="width:100%;height:auto;align:center;">
        <div style="color:#fff;position:absolute;top:30%;left:50%;transform: translateX(-50%);font-size:30px;"  data-aos="fade-up"data-aos-duration="3000"
       data-aos-anchor-placement="top-center">
       <h1>Thank You..!</h1>
        </div>
      </div>
      <div id="11" style="position:absolute;top:50%;left:50%;transform: translateX(-50%);text-align:center;">
        <div style="color:#fff;"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1500" 
         data-aos-anchor-placement="top-bottom">
         <h1>For subscribing</h1>
        </div>
      </div>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
      function ction(x) {
        if (x.matches) {
            document.getElementById("11").style.top = "60%";
        } else {
            //nothing
        }
        }
        var x = window.matchMedia("(max-width: 750px)")
        ction(x)
        x.addListener(ction)
    </script>
</body>
</html>


