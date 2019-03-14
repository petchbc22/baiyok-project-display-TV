<?php
	include_once('config/connect_db.php');
$sql = "SELECT * FROM place_th WHERE id='{$_GET['id']}' ";
$query = mysql_query($sql);
$result = mysql_fetch_assoc($query);

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
<body id="sub">
<div class="animated fadeIn fo no-ovf">
    <audio autoplay>
        <source src=<?php echo $north ?> type="audio/mpeg">
    </audio>
    <div class="container animated fadeInDown mw-1600" >
        <div class="row">
            <div class="col-2 py-3 fo">
                <img src="img/232.png" width="200" class="">
            </div>
            <div class="col-8 py-3 m-auto text-center fo">
                <h1 class="f-100 text-white text-center "><?php echo $result['place_name'];?></h1>
            </div>
            <div class="col-2 py-3 m-auto text-right">
            </div>
        </div>
    </div>
    <div class="container animated fadeInDown mw-1600" >
        <div class="row">
            <div class="col-12 text-center">
                <img src="<?php echo $result['images'];?>" width="500">
            </div>
            <div class="col-12">
                <p class="text-white f-40"><?php echo $result['detail'];?></p>
            </div>
        </div>
    </div>
    <div style="position: fixed;bottom: 20px;right: 20px;">
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
                <a href="config/changesub.php?lang=TH">
                    <img src="img/th-circle.png" width="50">
                </a>
            </div>
            <div class="p-2 hv-lg">
                <a href="config/changesub.php?lang=EN">
                    <img src="img/us-circle.png" width="50">
                </a>
            </div>
            <div class="p-2 hv-lg">
                <a href="config/changesub.php?lang=RU">
                    <img src="img/ru-circle.png" width="50">
                </a>
            </div>
            <div class="p-2 hv-lg">
                <a href="config/changesub.php?lang=CH">
                    <img src="img/ch-circle.png" width="50">
                </a>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/layout.js"></script>
<!-- switch grid or slideshow with button -->
<script>
$(function(){
$(".action").click(function(){
    $("#slideshow").toggleClass("dp-n");
    $("#grid").toggleClass("dp-b");
});
});
</script>
</body>
</html>
