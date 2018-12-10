<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wxe1e66ab4b9e9c32e", "cd982198168236fa63f3ece72f8a6164");
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html>



<!-- Head -->
<head>

<title>北京天气</title>

<!-- For-Mobile-Apps -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Monaco Weather Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->

<!-- Index-Page-CSS -->	  <link rel="stylesheet" href="css/style.css"		 type="text/css" media="all">
<!-- Owl-Carousel-CSS --> <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">

<!-- Fonts -->
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" 						type="text/css" media="all">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" type="text/css" media="all">
<!-- //Fonts -->

<!-- Font-Awesome-File-Links -->
<!-- CSS --> <link rel="stylesheet" href="css/font-awesome.css" 	 	 type="text/css" media="all">
<!-- TTF --> <link rel="stylesheet" href="fonts/fontawesome-webfont.ttf" type="text/css" media="all">
<!-- //Font-Awesome-File-Links -->


</head>
<!-- Head -->



<!-- Body -->
<body>



	<!-- Heading -->
	<h1>BEIJING WEATHER</h1>
	<!-- //Headng -->



	<!-- Container -->
	<div class="container">

		<!-- Current-Weather-Widget -->
		<div class="weather-widget agileits w3layouts">
			<div class="place agileits w3layouts">

				<div class="city agileits-w3layouts agileits w3layouts">
					<p>北京市</p>
				</div>

				<div class="dmy agileits w3-agile w3layouts">
					<script type="text/javascript">
						var mydate=new Date()
						var year=mydate.getYear()
						if(year<1000)
						year+=1900
						var day=mydate.getDay()
						var month=mydate.getMonth()
						var daym=mydate.getDate()
						if(daym<10)
						daym="0"+daym
						var dayarray=new Array("星期日","星期一","星期二","星期三","星期四","星期五","星期六")
						var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
						document.write(""+dayarray[day]+", "+montharray[month]+" "+daym+", "+year+"")
					</script>
				</div>

				<!--<div id="txt"></div>-->
              <div class="city agileits-w3layouts agileits w3layouts"><p>大部晴朗</p></div>

				<div class="w3temperatureaits agileits w3-agileits">
					<div class="w3temperatureaits-grid w3-agileits wthreetemp">
						<p>0° C</p>
					</div>
					<div class="w3temperatureaits-grid w3tempimg">
						<figure class="icons agileits w3layouts">
							<canvas id="clear-day" width="70" class="w3-agileits" height="70"></canvas>
						</figure>
					</div>
					<div class="w3temperatureaits-grid w3-agile wthreestats">
						<ul>
							<li class="agiletemp agiletemppressure">温度 -3℃~9℃</li>
							<li class="agiletemp wthree agiletemphumidity w3-agile">湿度 48%</li>
							<li class="agiletemp agileits-w3layouts agileinfo agiletempwind">PM2.5 65</li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>

				<div id="owl-demo" class="owl-carousel agileits text-center">
					<div class="item w3threeitem w3threeitem1">
						<h4>星期日</h4>
						<figure class="icons agileits-w3layouts agileits w3layouts">
							<canvas id="wind" width="50" height="50"></canvas>
						</figure>
						<h5>18°C</h5>
						<h6>12°C</h6>
					</div>
					<div class="item w3threeitem agileinfo w3threeitem2">
						<h4>星期一</h4>
						<figure class="icons wthree agileits w3layouts">
							<canvas id="sleet" width="50" class="w3ls" height="50"></canvas>
						</figure>
						<h5>17°C</h5>
						<h6>12°C</h6>
					</div>
					<div class="item w3 w3threeitem w3threeitem3">
						<h4>星期二</h4>
						<figure class="icons agileits w3layouts">
							<canvas id="rain" width="50" height="50"></canvas>
						</figure>
						<h5>17°C</h5>
						<h6>10°C</h6>
					</div>
					<div class="item w3threeitem w3threeitem4">
						<h4>星期三</h4>
						<figure class="icons agileits w3layouts">
							<canvas id="fog" width="50" class="w3ls" height="50"></canvas>
						</figure>
						<h5>17°C</h5>
						<h6>10°C</h6>
					</div>
					<div class="item w3threeitem wthree agileinfo w3threeitem5">
						<h4>星期四</h4>
						<figure class="icons agileits w3layouts">
							<canvas id="partly-cloudy-day" width="50" height="50"></canvas>
						</figure>
						<h5>17°C</h5>
						<h6>10°C</h6>
					</div>
					<div class="item w3 w3threeitem w3threeitem6">
						<h4>星期五</h4>
						<figure class="icons agileits w3layouts">
							<canvas id="snow" width="50" height="50"></canvas>
						</figure>
						<h5>12°C</h5>
						<h6>10°C</h6>
					</div>
					<div class="item w3l w3threeitem w3threeitem7">
						<h4>星期六</h4>
						<figure class="icons agileits w3layouts">
							<canvas id="cloudy" class="agileits-w3layouts" width="50" height="50"></canvas>
						</figure>
						<h5>20°C</h5>
						<h6>15°C</h6>
					</div>
				</div>

			</div>
		</div>
		<!-- //Current-Weather-Widget -->

	</div>
	<!-- //Container -->



	<!-- Custom-JavaScript-File-Links -->

		<!-- Default-JavaScript --> <script type="text/javascript" src="js/jquery-3.1.1.js"></script>

		<!-- Weather-Widget-JavaScript -->
			<script src="js/skycons.js"></script>
			<script>
				var icons = new Skycons({"color": "#FFFFFF"}),
				list  = [
					"clear-day"
				],
				i;
				for(i = list.length; i--; )
				icons.set(list[i], list[i]);
				icons.play();
			</script>
			<script>
				var icons = new Skycons({"color": "#FFFFFF"}),
				list = [
					"clear-night", "partly-cloudy-day",	"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind", "fog"
				],
				i;
				for(i = list.length; i--; )
				icons.set(list[i], list[i]);
				icons.play();
			</script>
		<!--//Weather-Widget-JavaScript -->

		<!-- Owl-Carousel-JavaScript -->
			<script src="js/owl.carousel.js"></script>
			<script>
				$(document).ready(function() {
					$("#owl-demo").owlCarousel({
						autoPlay: 3000,
						items : 5,
						itemsDesktop : [1024,4],
						itemsDesktopSmall : [640,3]
					});
				});
			</script>
		<!-- //Owl-Carousel-JavaScript -->

	<!-- //Custom-JavaScript-File-Links -->



</body>
<!-- //Body -->
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
  /*
   * 注意：
   * 1. 所有的JS接口只能在公众号绑定的域名下调用，公众号开发者需要先登录微信公众平台进入“公众号设置”的“功能设置”里填写“JS接口安全域名”。
   * 2. 如果发现在 Android 不能分享自定义内容，请到官网下载最新的包覆盖安装，Android 自定义分享接口需升级至 6.0.2.58 版本及以上。
   * 3. 常见问题及完整 JS-SDK 文档地址：http://mp.weixin.qq.com/wiki/7/aaa137b55fb2e0456bf8dd9148dd613f.html
   *
   * 开发中遇到问题详见文档“附录5-常见错误及解决办法”解决，如仍未能解决可通过以下渠道反馈：
   * 邮箱地址：weixin-open@qq.com
   * 邮件主题：【微信JS-SDK反馈】具体问题
   * 邮件内容说明：用简明的语言描述问题所在，并交代清楚遇到该问题的场景，可附上截屏图片，微信团队会尽快处理你的反馈。
   */
  wx.config({
    debug: true,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: [
      // 所有要调用的 API 都要加到这个列表中
    'getLocation',
    'openLocation',
   // 'scanQRCode'
    ]
  });
  
  var latitude = 0.0;
  var longitude = 0.0;

  wx.ready(function () {
        // 在这里调用 API
        wx.getLocation({
            type: 'wgs84', // 默认为wgs84的gps坐标，如果要返回直接给openLocation用的火星坐标，可传入'gcj02'
            success: function (res) {
                latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90
                longitude = res.longitude; // 经度，浮点数，范围为180 ~ -180。
                var speed = res.speed; // 速度，以米/每秒计
                var accuracy = res.accuracy; // 位置精度
                alert("latitude:" + latitude + "longitude:" + longitude);
            }
        });
    });
  
 

  wx.ready(function () {
    // 在这里调用 API
    wx.scanQRCode({
needResult: 0, // 默认为0，扫描结果由微信处理，1则直接返回扫描结果，
scanType: ["qrCode","barCode"], // 可以指定扫二维码还是一维码，默认二者都有
success: function (res) {
var result = res.resultStr; // 当needResult 为 1 时，扫码返回的结果
}
});
  });
</script>
</html>
