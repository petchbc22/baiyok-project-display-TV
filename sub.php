<?php
include_once('config/check_lg.php');
?>
<html>
<head>
    <title><?php echo $strTitle;?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-874">
    <link href="css/components.css" rel="stylesheet">
    <link href="css/layout.css" rel="stylesheet">   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="css/animate.css" rel="stylesheet">
</head>
<body id="sub" class="bg animated fadeIn fo" style="overflow : hidden !important">
<audio autoplay>
    <source src=<?php echo $north ?>  type="audio/mpeg">
</audio>
<div class="container animated fadeInDown " style="    max-width: 1600px;">
    <div class="row">
        <div class="col-2 py-3 fo">
            <img src="img/232.png" width="300" class="">
            <!-- <img src="img/logo.png" width="150" class=""> -->
            <!-- <h1 class="text-white text-center"><?php echo $strTitle ?></h1> -->
        </div>
        <div class="col-8 py-3 m-auto text-center fo">
            <h1 class="f-100 text-white text-center "><?php echo $headingNorth ?></h1>
        </div>
        <div class="col-2">
            
        </div>
        <div class="col-md-12">
            <div uk-slider>
                <div class="uk-position-relative">
                    <div class="uk-slider-container">
                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m justify-content-center fo">
                            <li class="p-5 w-33p text-center ">
                                <div class="p-2 ">
                                    <a href="#" class=" link-no-ndl ">
                                        <div>
                                            <img src="img/S__3047432.jpg"  class="hv-travel-img">
                                        </div>
                                        <p class="text-white f-40 text-center py-2">
                                            พระราชวังดุสิต
                                        </p>
                                    </a>
                                </div>
                                <div class="p-2 ">
                                    <a href="#" class=" link-no-ndl ">
                                        <div>
                                            <img src="img/thaikufhaa.jpg"  class="hv-travel-img">
                                        </div>
                                        <p class="text-white f-40 text-center py-2">
                                            ธรรมเนียบรัฐบาล
                                        </p>
                                    </a>
                                </div>
                            </li>
                            <li class="p-5 w-33p text-center">
                                <div class="p-2  ">
                                    <a href="#" class=" link-no-ndl ">
                                        <div>
                                            <img src="img/IMG_1252.jpg"  class="hv-travel-img">
                                        </div>
                                        <p class="text-white f-40 text-center py-2">
                                            วังสวนผักกาด
                                        </p>
                                    </a>
                                </div>
                                <div class="p-2 ">
                                    <a href="#" class=" link-no-ndl ">
                                        <div>
                                            <img src="img/fa0a64263aba4f909a80368c3706f66c.jpg"  class="hv-travel-img">
                                        </div>
                                        <p class="text-white f-40 text-center py-2">
                                            พระตําหนักจิตรลดารโหฐาน
                                        </p>
                                    </a>
                                </div>
                            </li>
                            <li class="p-5 w-33p text-center">
                                <div class="p-2 ">
                                    <a href="#" class=" link-no-ndl ">
                                        <div>
                                            <img src="img/ty.jpg"  class="hv-travel-img">
                                        </div>
                                        <p class="text-white f-40 text-center py-2">
                                                พระที่นั่งวิมานเมฆ
                                        </p>
                                    </a>
                                </div>
                                <div class="p-2 ">
                                    <a href="#" class=" link-no-ndl ">
                                        <div>
                                            <img src="img/DSCF6272-1024x683.jpg"  class="hv-travel-img">
                                        </div>
                                        <p class="text-white f-40 text-center py-2">
                                                สวนสัตว์ดุสิต
                                        </p>
                                    </a>
                                </div>
                            </li>
                            <li class="p-5 w-33p text-center">
                                <div class="p-2 ">
                                    <a href="#" class=" link-no-ndl ">
                                        <div>
                                            <img src="img/lib supeen.jpg"  class="hv-travel-img">
                                        </div>
                                        <p class="text-white f-40 text-center py-2">
                                            หอสมุดแห่งชาติ
                                        </p>
                                    </a>
                                </div>
                                <div class="p-2 ">
                                    <a href="#" class=" link-no-ndl ">
                                        <div>
                                            <img src="img/p86tjz4jyr04qiMogz7-o.jpg"  class="hv-travel-img">
                                        </div>
                                        <p class="text-white f-40 text-center py-2">
                                            อนุสาวรีย์ชัยสมรภูมิ
                                        </p>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="uk-hidden@s uk-light">
                        <a class="uk-position-center-left uk-position-small text-white" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small text-white" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>
                    <div class="uk-visible@s">
                        <a class="uk-position-center-left-out uk-position-small text-white" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right-out uk-position-small text-white" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>
                </div>
                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
            </div>
        </div>
    </div>
</div>
    <div class="h-ico">
        <a href="javascript:delay('index.php')" >
            <i class="fas fa-home animated heartBeat home-css" id="ihomeFadeOut"></i>
        </a>
    </div>
    <div id='ss_menu'>
        <div class="hv-lg"> 
            <a href="config/changesub.php?lang=TH">
                <img src="img/th-circle.png" width="70"> 
            </a>        
        </div>
        <div class="hv-lg"> 
            <a href="config/changesub.php?lang=EN">
                <img src="img/us-circle.png" width="70"> 
            </a>
        </div>
        <div class="hv-lg"> 
            <a href="config/changesub.php?lang=RU">
                <img src="img/ru-circle.png" width="70"> 
            </a>        
        </div>
        <div class="hv-lg"> 
            <a href="config/changesub.php?lang=CH">
                <img src="img/ch-circle.png" width="70"> 
            </a>
         </div>
        <div class='menu'>
            <div class='share' id='ss_toggle' data-rot='180'>
                <img src="img/qQpex.png" width="95"> 
            </div>
        </div>
    </div>
    
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>
<script src="js/layout.js"></script>
</body>
</html>
