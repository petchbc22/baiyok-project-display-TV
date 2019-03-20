<?php
include_once('config/check_lg.php');
$_SESSION["d_id"] = $_GET['d_id'] ; 
?>
<html>
<?php 
    $strSQL = "SELECT * FROM direction WHERE d_id='{$_GET['d_id']}'";
    $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
    $result = mysql_fetch_assoc($objQuery);
?>
<head>
    <title>Baiyoke</title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-874">
    <link href="css/components.css" rel="stylesheet">
    <link href="css/layout.css" rel="stylesheet">   
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/swiper.min.css" rel="stylesheet">.
    <style>
        #sub{
           background: linear-gradient(rgba(0, 0, 0, 0.59), rgba(0, 0, 0, 0.8)),url(img/<?php echo $result['img_bg'];?>);
           height: 100%;
           background-position: center;
           background-repeat: no-repeat;
           background-size: cover;
        }
    </style>
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
                

                <?php 
                    if($_SESSION["lang"] == "EN")
                    { 
                        echo '<h1 class="f-100 text-white text-center ">';
                        echo $result["en_name"];
                        echo '</h1>';
                    }
                    elseif ($_SESSION["lang"] == "TH")  
                    {
                        echo '<h1 class="f-100 text-white text-center ">';
                        echo $result["th_name"];
                        echo '</h1>';
                    }
                    elseif ($_SESSION["lang"] == "CH")  
                    {
                        echo '<h1 class="f-40 text-white text-center ">';
                        echo $result["ch_name"];
                        echo '</h1>';
                    }
                    else 
                    {
                        echo '<h1 class="f-40 text-white text-center ">';
                        echo $result["ru_name"];
                        echo '</h1>';
                    }
                ?>
                
           
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
                        if($_SESSION["lang"] == "EN")
                        { 
                            $strSQL = "SELECT * FROM place_en WHERE d_id='{$_GET['d_id']}'";
                            $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
                        }
                        elseif ($_SESSION["lang"] == "RU")  
                        {
                            $strSQL = "SELECT * FROM place_ru WHERE d_id='{$_GET['d_id']}'";
                            $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
                        }
                        elseif ($_SESSION["lang"] == "CH")  
                        {
                            $strSQL = "SELECT * FROM place_ch WHERE d_id='{$_GET['d_id']}'";
                            $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
                        }
                        else 
                        {
                            $strSQL = "SELECT * FROM place_th WHERE d_id='{$_GET['d_id']}'";
                            $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
                        }
                    ?>
                    <?php 
                        while($objResultslide = mysql_fetch_array($objQuery))
                        {
                        $images = $objResultslide["images"];
                        $placename = $objResultslide["place_name"];
                    ?>

                        <div class="swiper-slide">
                            <figure class="slide-bgimg" style="background-image:url(img/<?php echo $images;?>)">
                                <img src="img/<?php echo $objResult["images"];?>" class="entity-img" />
                            </figure>
                            <div class="content">
                                <a href="detail.php?id=<?php echo $objResultslide['id']; ?>" 
                                   class="
                                        <?php 
                                            if($_SESSION["lang"]== "CH") 
                                                { 
                                                    echo "title link-no-ndl f-36";
                                                } 
                                            else{
                                                    echo "title link-no-ndl";
                                            }
                                        ?>"> 
                                        <?php echo $placename;?></a>
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
                        if($_SESSION["lang"] == "EN")
                        { 
                            $strSQL_sildeleft = "SELECT * FROM place_en WHERE d_id='{$_GET['d_id']}'";
                            $objQuery_sildeleft = mysql_query($strSQL_sildeleft) or die ("Error Query [".$strSQL_sildeleft."]");
                        }
                        elseif ($_SESSION["lang"] == "RU")  
                        {
                            $strSQL_sildeleft = "SELECT * FROM place_ru WHERE d_id='{$_GET['d_id']}'";
                            $objQuery_sildeleft = mysql_query($strSQL_sildeleft) or die ("Error Query [".$strSQL_sildeleft."]");
                        }
                        elseif ($_SESSION["lang"] == "CH")  
                        {
                            $strSQL_sildeleft = "SELECT * FROM place_ch WHERE d_id='{$_GET['d_id']}'";
                            $objQuery_sildeleft = mysql_query($strSQL_sildeleft) or die ("Error Query [".$strSQL_sildeleft."]");
                        }
                        else 
                        {
                            $strSQL_sildeleft = "SELECT * FROM place_th WHERE d_id='{$_GET['d_id']}'";
                            $objQuery_sildeleft = mysql_query($strSQL_sildeleft) or die ("Error Query [".$strSQL_sildeleft."]");
                        }
                    ?>
                    <?php 
                        while($objResultslide = mysql_fetch_array($objQuery_sildeleft))
                        {
                        $images1 = $objResultslide["images"];
                    ?>
                        <div class="swiper-slide">
                            <figure class="slide-bgimg" style="background-image:url(img/<?php echo $images1;?>)">
                                <img src="img/<?php echo $images1;?>" class="entity-img" />
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
            <?php 
                if($_SESSION["lang"] == "EN")
                { 
                    $strSQL_grid = "SELECT * FROM place_en WHERE d_id='{$_GET['d_id']}'";
                    $objQuery_grid = mysql_query($strSQL_grid) or die ("Error Query [".$strSQL_gridt."]");
                }
                elseif ($_SESSION["lang"] == "RU")  
                {
                    $strSQL_grid = "SELECT * FROM place_ru WHERE d_id='{$_GET['d_id']}'";
                    $objQuery_grid = mysql_query($strSQL_grid) or die ("Error Query [".$strSQL_grid."]");
                }
                elseif ($_SESSION["lang"] == "CH")  
                {
                    $strSQL_grid = "SELECT * FROM place_ch WHERE d_id='{$_GET['d_id']}'";
                    $objQuery_grid = mysql_query($strSQL_grid) or die ("Error Query [".$strSQL_grid."]");
                }
                else 
                {
                    $strSQL_grid = "SELECT * FROM place_th WHERE d_id='{$_GET['d_id']}'";
                    $objQuery_grid = mysql_query($strSQL_grid) or die ("Error Query [".$strSQL_grid."]");
                }
            ?>
            <?php 
                while($objResultgrid = mysql_fetch_array($objQuery_grid))  
                {
                $imagegrid = $objResultgrid['images'];
                $place_name = $objResultgrid['place_name'];
            ?>
            <div class="col-md-4">
                <a href="detail.php?id=<?php echo $objResultgrid['id'];?>" class="link-no-ndl">
                    <img src="img/<?php echo $imagegrid; ?>" width="100%" height="317">
                    <div class="py-3">
                        <h1 class="text-white text-center"><?php echo $place_name; ?></h1>
                    </div>  
                </a>
            </div>
            <?php } ?>
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
