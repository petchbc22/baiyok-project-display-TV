<?php
include_once('config/connect_db.php');
$strSQL = "SELECT * FROM place_th";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
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
                <h1 class="f-100 text-white text-center "></h1>
            </div>
            <div class="col-2 py-3 m-auto text-right">
            </div>
        </div>
    </div>
    <div class="container animated fadeInDown mw-1600 pt-5" id="slideshow">
        <div class="row">
            <div class="col-12">
                <div class="swiper-container main-slider loading">
                    <div class="swiper-wrapper">
                        <?php
                            while($objResult = mysql_fetch_array($objQuery))
                            {
                                $id = $objResult['id'];
                                $d_id = $objResult['Direction_id'];
                        ?>
                        <div class="swiper-slide">
                            <figure class="slide-bgimg" style="background-image:url(<?php echo $objResult["images"];?>)">
                                <img src="<?php echo $objResult["images"];?>" class="entity-img" />
                            </figure>
                            <div class="content">
                                <a class="title link-no-ndl" href="detail.php?id=<?php echo $objResult['id']; ?>?typeid=<?php echo $objResult['Direction_id']; ?>"> <?php echo $objResult["place_name"];?></a>
                                <span class="caption">
                               
                                </span>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev swiper-button-white"></div>
                    <div class="swiper-button-next swiper-button-white"></div>
                </div>
            
            

                <!-- Thumbnail navigation -->
                <div class="swiper-container nav-slider loading">
                    <div class="swiper-wrapper">
                      
                            <?php
                            $strSQL2 = "SELECT * FROM place_th";
                            $objQuery2 = mysql_query($strSQL2) or die ("Error Query [".$strSQL2."]");
                            while($objResult2 = mysql_fetch_array($objQuery2))
                            {
                        ?>
                        <div class="swiper-slide">
                            <figure class="slide-bgimg" style="background-image:url(<?php echo $objResult2["images"];?>)">
                                <img src="<?php echo $objResult2["images"];?>" class="entity-img" />
                            </figure>
                            <div class="content">
                        
                            </div>
                        </div>
                       <?php
                            }
                       ?>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
    <div class="container animated fadeInDown mw-1600 pt-2" id="grid">
        <div class="row">
            <div class="col-md-12">
                <div uk-slider>
                    <div class="uk-position-relative">
                        <div class="uk-slider-container">
                            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m"> 
                            <?php
                                    $strSQL1 = "SELECT * FROM place_th";
                                    $objQuery1 = mysql_query($strSQL1) or die ("Error Query [".$strSQL1."]");
                                    $i = 0;
                                    $a = 0;
                                    while($objResult1 = mysql_fetch_array($objQuery1))  
                                    {
                                        $id = $objResult1['id'];
                                        echo '<li>';                                    
                                        if ($i >= 0)  {
                                        echo '<div class="mw-300-uk-slide p-2 custom-hv text-left">';
                                        echo '<a href="detail.php?id='.$objResult1['id'].'" class="link-no-ndl">';
                                        echo '<img src="'.$objResult1['images'].'" width="400" height="270">';
                                        echo '<h1 class="text-white text-center pt-2">'.$objResult1['place_name'].'</h1>';
                                        echo '</a></div>';
                                    }
                                    $i++;
                                        echo '</li>';
                                }
                                ?>     
                            </ul>
                        </div>
                        <div class="uk-hidden@s uk-light">
                            <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                        </div>
                        <div class="uk-visible@s">
                            <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                        </div>
                    </div>
                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                </div>
            </div>
        </div>
    </div>
    <div style="position: fixed;bottom: 20px;right: 20px;">
        <div class="d-flex">
            <div class="p-2 hv-lg pr-3">
                <a href="#" class="pointer action">
                    <img src="img/change_icon_png_245643.png" width="50" >
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
<?php
mysql_close($objConnect);
?>
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
