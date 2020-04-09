<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- bootstrap-css -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <!--// bootstrap-css -->
    <!-- css -->
    <link rel="stylesheet" href="css/custom.css" type="text/css" media="all"/>
    <!--// css -->
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- portfolio -->
    <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="all">
    <!-- //portfolio -->
    <!-- font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
          rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300'
          rel='stylesheet' type='text/css'>
    <!-- //font -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
    <title>Gaming </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Gaming Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener('load', function () { setTimeout(hideURLbar, 0) }, false)

      function hideURLbar () { window.scrollTo(0, 1) } </script>

    <script type="text/javascript">
      jQuery(document).ready(function ($) {
        $('.scroll').click(function (event) {
          event.preventDefault()
          $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000)
        })
      })
    </script>
</head>
<body>
@yield('content')
</body>
<!-- //copyright -->
<script src="js/jarallax.js"></script>
<!-- <script src="js/SmoothScroll.min.js"></script> -->
<script type="text/javascript">
  /* init Jarallax */
  $('.jarallax').jarallax({
    speed: 0.5,
    imgWidth: 1366,
    imgHeight: 768
  })
</script>
<script src="js/responsiveslides.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
  $(document).ready(function () {
    /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear'
        };
    */

    $().UItoTop({ easingType: 'easeOutQuart' })

  })
</script>
<!-- //here ends scrolling icon -->
<!-- Tabs-JavaScript -->
<script src="js/jquery.filterizr.js"></script>
<script src="js/controls.js"></script>
<script type="text/javascript">
  $(function () {
    $('.filtr-container').filterizr()
  })
</script>
<!-- //Tabs-JavaScript -->
<!-- PopUp-Box-JavaScript -->
<script src="js/jquery.chocolat.js"></script>
<script type="text/javascript">
  $(function () {
    $('.filtr-item a').Chocolat()
  })
</script>
<!-- //PopUp-Box-JavaScript -->

</html>

