<html class="ui-mobile">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta charset="utf-8">
	<link rel="stylesheet" id="open-sans-css" href="//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&amp;subset=latin%2Clatin-ext&amp;ver=4.2.7" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/script.js"></script>
	<script src="assets/js/mediaelement-and-player.min.js"></script>
	<link rel="stylesheet" href="assets/css/mediaelementplayer.css" />
</head>
<body class="ui-mobile-viewport ui-overlay-a">
	<div data-role="page" tabindex="0" class="ui-page">
		<div class="ui-panel-wrapper">
			<div data-role="header" data-tap-toggle="false" data-theme="a" role="banner" class="ui-header ui-bar-a">
				<a data-role="none" href="list.php" data-rel="back" class="header-back-button ui-btn-left"><i class="fa fa-angle-left"></i></a>
               <input type="button" value="방송시작" />
               <h1 class="header-title ui-title" role="heading" aria-level="1">시연테스트 카메라 연결</h1>
           </div>
			<div data-role="content" class="ui-content" role="main">
				<div data-role="box stream" class="owl-video">
					<div data-role="onair" class="onair">ON AIR</div>
					<video width="100%" id="player1" preload="none">
					    <source type="video/youtube" src="http://www.youtube.com/watch?v=nOEw9iiopwI" />
					</video>
				</div>
				<div data-role="bar">
					<h1>시연테스트 카메라 연결</h1>
					<span>사용자 : user0001</span>
				</div>
				<div data-role="box-inner stream" class="owl-videos">
					<a herf="view.php?stream="><div data-role="onair" class="onair">CAM 01</div><img src="tmp.jpg" onclick="location.href='view.php?stream='"></a>
					<a herf="view.php?stream="><div data-role="onair" class="onair">CAM 02</div><img src="tmp.jpg" onclick="location.href='view.php?stream='"></a>
					<a herf="view.php?stream="><div data-role="onair" class="onair">CAM 03</div><img src="tmp.jpg" onclick="location.href='view.php?stream='"></a>
				</div>
				
				<div data-role="box-inner control" class="owl-desc">
					사용자 패널
					<p>본 채널은 시연채널입니다.</p>
				</div>
				
				<div data-role="box-inner control" class="owl-control">
					관리자 패널<br/>
					- 반전<br/>
					<div style="margin:  0 auto; width: 80%; text-align: center;">
					<i class="fa fa-arrow-left"></i> 
					<i class="fa fa-arrow-up"></i> 
					<i class="fa fa-arrow-down"></i> 
					<i class="fa fa-arrow-right"></i>				
					</div>
					- 해상도<br/>
					- 프레임<br/>
				</div>
				
				<div class="col" style="margin: 3%; text-align: center;">
				  <div class="row">
				    <div class="col strech">
				      <i id="x-icon" class="fa fa-mobile"></i>
				      <div class="value">X: <span id="x">N/A</span></div>
				      <i id="y-icon" class="fa fa-mobile"></i>
				      <div class="value">Y: <span id="y">N/A</span></div>
				      <i id="z-icon" class="fa fa-mobile"></i>
				      <div class="value">Z: <span id="z">N/A</span></div>
				    </div>
				    사용자의 위치정보 공유중
				  </div>
				</di>
				
			</div>
		</div>
	</div>
	<script>
		
		
	$('#player1').mediaelementplayer({
		// if the <video width> is not specified, this is the default
    defaultVideoWidth: 480,
    // if the <video height> is not specified, this is the default
    defaultVideoHeight: 270,
    // if set, overrides <video width>
    videoWidth: -1,
    // if set, overrides <video height>
    videoHeight: -1,
    // width of audio player
    audioWidth: 400,
    // height of audio player
    audioHeight: 30,
    // initial volume when the player starts
    startVolume: 0.8,
    // useful for <audio> player loops
    loop: false,
    // enables Flash and Silverlight to resize to content size
    enableAutosize: true,
    // the order of controls you want on the control bar (and other plugins below)
    features: [],
    // Hide controls when playing and mouse is not over the video
    alwaysShowControls: false,
    // force iPad's native controls
    iPadUseNativeControls: false,
    // force iPhone's native controls
    iPhoneUseNativeControls: false, 
    // force Android's native controls
    AndroidUseNativeControls: false,
    // forces the hour marker (##:00:00)
    alwaysShowHours: false,
    // show framecount in timecode (##:00:00:00)
    showTimecodeFrameCount: false,
    // used when showTimecodeFrameCount is set to true
    framesPerSecond: 25,
    // turns keyboard support on and off for this instance
    enableKeyboard: true,
    // when this player starts, it will pause other players
    pauseOtherPlayers: true,
    // array of keyboard commands
    keyActions: []
	});
	</script>
</body>
</html>
