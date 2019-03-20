<?php
// เรียกการทำงานจากหน้า check_lg

include_once('config/check_lg.php');
// เช็ค session ว่าเป็นภาษาอะไร แล้วทำการ query DB ออกมา เป็น DB นั้น ๆ 
    $_SESSION['id'] = $_GET['id'];
    if($_SESSION["lang"] == "EN")
    { 
        $strSQL = "SELECT * FROM place_en WHERE id='{$_GET['id']}'";
        $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
        $result = mysql_fetch_assoc($objQuery);

        
    }
    elseif ($_SESSION["lang"] == "RU")  
    {
        $strSQL = "SELECT * FROM place_ru WHERE id='{$_GET['id']}'";
        $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
        $result = mysql_fetch_assoc($objQuery);
    }
    elseif ($_SESSION["lang"] == "CH")  
    {
        $strSQL = "SELECT * FROM place_ch WHERE id='{$_GET['id']}'";
        $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
        $result = mysql_fetch_assoc($objQuery);
    }
    else 
    {
        $strSQL = "SELECT * FROM place_th WHERE id='{$_GET['id']}'";
        $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
        $result = mysql_fetch_assoc($objQuery);
    }
?>
<html>
<head>
    <title>Baiyoke</title>
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
                <h1 class="f-100 text-white text-center" 
                    style="
                        <?php 
                            if($_SESSION["lang"]== "CH") 
                                { 
                                    echo "font-size:36px;";
                                } 
                        ?>"> 
                    <?php echo $result['place_name'];?></h1>
            </div>
            <div class="col-2 py-3 m-auto text-right">
            </div>
        </div>
    </div>
    <div class="container animated fadeInDown mw-1600" >
        <div class="row">
            <div class="col-12 text-center">
                <img src="img/<?php echo $result['images'];?>" width="500">
            </div>
            <div class="col-12">
                <p class="text-white f-40 py-5"
                   style="
                        <?php 
                            if($_SESSION["lang"]== "CH") 
                            { 
                                echo "font-size:24px;";
                            } 
                        ?>"> 
                   "
                ><?php echo $result['detail'];?></p>
            </div>
        </div>
    </div>
    <div style="position: fixed;bottom: 20px;right: 20px;">
        <div class="d-flex">
            <div class="p-2 hv-lg pr-3">
                <a href="sub.php?d_id=<?php  echo $_SESSION["d_id"];?>" >
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
                <a href="config/change_detail.php?lang=TH&id=<?php echo $_SESSION['id']; ?>">
                    <img src="img/th-circle.png" width="50">
                </a>
            </div>
            <div class="p-2 hv-lg">
                <a href="config/change_detail.php?lang=EN">
                    <img src="img/us-circle.png" width="50">
                </a>
            </div>
            <div class="p-2 hv-lg">
                <a href="config/change_detail.php?lang=RU">
                    <img src="img/ru-circle.png" width="50">
                </a>
            </div>
            <div class="p-2 hv-lg">
                <a href="config/change_detail.php?lang=CH">
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
