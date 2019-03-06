<?php
include_once('check_lg.php');
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
<body class="bg" style="overflow : hidden !important">
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-white text-center"><?php echo $strTitle ?></h1>
        </div>
    </div>
</div>
    <div style=" left: 0px;
        top: 0px;">
        <a href="index.php">
       <i class="fas fa-home animated heartBeat" style="color: white;
    font-size: 50;
    position: fixed;
    left: 20px;
    bottom: 10px;
    width: 60px;
    height: 60px;"></i></a>
    </div>
    <div id='ss_menu'>
        <div class="hv-lg"> 
            <a href="changesub.php?lang=TH">
                <img src="img/th-circle.png" width="70"> 
            </a>        
        </div>
        <div class="hv-lg"> 
            <a href="changesub.php?lang=EN">
                <img src="img/us-circle.png" width="70"> 
            </a>
        </div>
        <div class="hv-lg"> 
            <a href="changesub.php?lang=RU">
                <img src="img/ru-circle.png" width="70"> 
            </a>        
        </div>
        <div class="hv-lg"> 
            <a href="changesub.php?lang=CH">
                <img src="img/ch-circle.png" width="70"> 
            </a>
         </div>
        <div class='menu'>
            <div class='share' id='ss_toggle' data-rot='180'>
                <img src="img/qQpex.png" width="50"> 
            </div>
        </div>
    </div>
    
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>
<script src="js/layout.js"></script>
<script>
$(document).ready(function(ev) {
  var toggle = $('#ss_toggle');
  var menu = $('#ss_menu');
  var rot;
  
  $('#ss_toggle').on('click', function(ev) {
    rot = parseInt($(this).data('rot')) - 180;
    menu.css('transform', 'rotate(' + rot + 'deg)');
    menu.css('webkitTransform', 'rotate(' + rot + 'deg)');
    if ((rot / 180) % 2 == 0) {
      //Moving in
      toggle.parent().addClass('ss_active');
      toggle.addClass('close');
    } else {
      //Moving Out
      toggle.parent().removeClass('ss_active');
      toggle.removeClass('close');
    }
    $(this).data('rot', rot);
  });

  menu.on('transitionend webkitTransitionEnd oTransitionEnd', function() {
    if ((rot / 180) % 2 == 0) {
      $('#ss_menu div i').addClass('ss_animate');
    } else {
      $('#ss_menu div i').removeClass('ss_animate');
    }
  });
  
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script>
function delay (URL) {
    setTimeout( function() { window.location = URL }, 1000 );
}
$(document).ready(function() {
   
   $("#btnFadeOut").click(function(){
      $('.fo').addClass('animated fadeOutDown')

    });
   
 
   
 });
</script>
</body>
</html>
