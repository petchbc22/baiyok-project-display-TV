<?php
// error_reporting(~E_NOTICE );
include_once('config/check_lg.php');
?>
<html>
<head>
    <title><?php echo $strTitle;?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-874">
    <link href="css/components.css" rel="stylesheet">
    <link href="css/layout.css" rel="stylesheet">   
    <link href="css/animate.css" rel="stylesheet">
</head>
<body id="home">
    <div class="bg animated fadeIn fo-all no-ovf"> 
        <audio autoplay>
            <source src=<?php echo $str_Soundwelc ?> type="audio/mpeg">
        </audio>
        <div class="container h-100 animated fadeInUp" style="    max-width: 2000px;">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-md-5 text-center">
                    <video width="100%" height="400" class="fo" autoplay muted>
                        <source src="media/vdo.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-md-7 text-center py-5">
                    <img src="img/logo.png" class="fo">
                    <div class="row justify-content-center py-3">
                    <?php 
                    while($objResult = mysql_fetch_array($objQuery_direction))
                    {
                        $en_name = $objResult["en_name"];
                        $th_name = $objResult["th_name"];
                        $ch_name = $objResult["ch_name"];
                        $ru_name = $objResult["ru_name"];
                        $images = $objResult["icon"];
                        $d_id = $objResult["d_id"];
                        ?>
                        <div class="px-3">
                            <a href="sub.php?d_id=<?php echo $d_id ?>">
                                <button class="btn-custom  fo ">
                                    <div class="d-flex justify-content-center">
                                        <div style="padding: 10px;"><img src="<?php echo $images; ?>" width="60" class="ani-infinite"></div>
                                        <div class="m-auto">
                                        <?php 
                                            if($_SESSION["lang"] == "EN")
                                            { 
                                                echo $en_name; 
                                            }
                                            elseif ($_SESSION["lang"] == "RU")  
                                            {
                                                echo $ru_name; 
                                            }
                                            elseif ($_SESSION["lang"] == "CH")  
                                            {
                                                echo $ch_name; 
                                            }
                                            else 
                                            {
                                                echo $th_name;
                                            }
                                        ?>
                                        </div>
                                    </div>
                                </button>
                            </a>
                        </div>
                        <?php } ?>
                        <!-- <div class="px-3">
                            <a href="#">
                                <button class="btn-custom  fo ">
                                    <div class="d-flex justify-content-center">
                                        <div style="padding: 10px;"><img src="img/compass-s.png" width="60" class="ani-infinite"></div>
                                        <div class="m-auto"><</div>
                                    </div>
                                </button>
                            </a>
                        </div>
                        <div class="px-3">
                            <a href="#">
                                <button class="btn-custom  fo ">
                                    <div class="d-flex justify-content-center">
                                        <div style="padding: 10px;"><img src="img/compass-e.png" width="60" class="ani-infinite"></div>
                                        <div class="m-auto"></div>
                                    </div>
                                </button>
                            </a>
                        </div>
                        <div class="px-3">
                            <a href="#">
                                <button class="btn-custom  fo ">
                                    <div class="d-flex justify-content-center">
                                        <div style="padding: 10px;"><img src="img/compass-w.png" width="60" class="ani-infinite"></div>
                                        <div class="m-auto"></div>
                                    </div>
                                </button>
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div id='ss_menu'>
            <div class="hv-lg"> 
                <a href="config/change.php?lang=TH">
                    <img src="img/th-circle.png" width="70"> 
                </a>        
            </div>
            <div class="hv-lg"> 
                <a href="config/change.php?lang=EN">
                    <img src="img/us-circle.png" width="70"> 
                </a>
            </div>
            <div class="hv-lg"> 
                <a href="config/change.php?lang=RU">
                    <img src="img/ru-circle.png" width="70"> 
                </a>        
            </div>
            <div class="hv-lg"> 
                <a href="config/change.php?lang=CH">
                    <img src="img/ch-circle.png" width="70"> 
                </a>
            </div>
            <div class='menu'>
                <div class='share' id='ss_toggle' data-rot='180'>
                    <img src="img/qQpex.png" width="60"> 
                </div>
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
