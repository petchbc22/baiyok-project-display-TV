<?php
include_once('config/check_lg.php');
?>
<html>
<head>
    <title><?php echo $strTitle;?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-874">
    <link href="css/components.css" rel="stylesheet">
    <link href="css/layout.css" rel="stylesheet">   
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/swiper.min.css" rel="stylesheet">

</head>
<body id="n_cld">
<div class="animated fadeIn fo no-ovf">
<audio autoplay>
    <source src=<?php echo $north ?>  type="audio/mpeg">
</audio>
<div>
    <div class="container animated fadeInDown mw-1600" >
        <div class="row">
            <div class="col-2 py-3 fo">
                <img src="img/232.png" width="200" class="">
                <!-- <img src="img/logo.png" width="150" class=""> -->
                <!-- <h1 class="text-white text-center"><?php echo $strTitle ?></h1> -->
            </div>
            <div class="col-8 py-3 m-auto text-center fo">
                <h1 class="f-100 text-white text-center "><?php echo $Chitralada ?></h1>
            </div>
            <div class="col-2 py-3 m-auto text-right">
                
            </div>
        </div>
    </div>
</div>



<div class="container animated fadeInDown mw-1600 pt-2">
    <div class="row">
        <div class="col-md-12">
            <img src="img/fa0a64263aba4f909a80368c3706f66c.jpg" width="200">
        </div>
    </div>
</div>
    <div style="position: fixed;bottom: 10px;right: 10px;">
        <div class="d-flex">
            <div class="p-2 hv-lg pr-3">
                <a href="sub.php" >
                    <img src="img/back-arrow.png" width="50">
                </a>
            </div>
            <div class="bd-r"></div>
            <div class="p-2 hv-lg pr-3 pl-3">
                <a href="index.php" >
                    <img src="img/Orphan-Home-icon-circle-white.png" width="50">
                </a>
            </div>
            <div class="bd-r"></div>
            <div class="p-2 hv-lg pl-3">
                <a href="config/change_n.php?lang=TH">
                    <img src="img/th-circle.png" width="50">
                </a>
            </div>
            <div class="p-2 hv-lg">
                <a href="config/change_n.php?lang=EN">
                    <img src="img/us-circle.png" width="50">
                </a>
            </div>
            <div class="p-2 hv-lg">
                <a href="config/change_n.php?lang=RU">
                    <img src="img/ru-circle.png" width="50">
                </a>
            </div>
            <div class="p-2 hv-lg">
                <a href="config/change_n.php?lang=CH">
                    <img src="img/ch-circle.png" width="50">
                </a>
            </div>
        </div>
    </div>
    
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/layout.js"></script>
<script>

$(function(){
  $(".action").click(function(){
    $("#slideshow").toggleClass("dp-n");
    $("#grid").toggleClass("dp-b");
  });
});
</script>

</div>
</body>
</html>
