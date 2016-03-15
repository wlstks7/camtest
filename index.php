<html class="ui-mobile">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta charset="utf-8">
	<link rel="stylesheet" id="open-sans-css" href="//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&amp;subset=latin%2Clatin-ext&amp;ver=4.2.7" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/mediaelement-and-player.min.js"></script>
	<link rel="stylesheet" href="assets/css/mediaelementplayer.css" />
</head>
<body class="ui-mobile-viewport ui-overlay-a">
	<!-- Progress bar holder -->
	<div id="progress" style="width:500px;position: absolute; top:50%;"></div>
	<!-- Progress information -->
	<div id="information" style="text-align: center;position: absolute; top:50%; width: 100%;"></div>
	
	<div data-role="page" tabindex="0" class="ui-page">
		<div class="ui-panel-wrapper">
			<div data-role="header" data-tap-toggle="false" data-theme="a" role="banner" class="ui-header ui-bar-a">
               <h1 class="header-title ui-title" role="heading" aria-level="1">라이브 채널</h1>
           </div>
			<div data-role="content" class="ui-content" role="main">
				<ul data-role="listview" data-icon="false" data-divider-theme="a" class="ui-listview">
	         	  <li data-theme="b" class="ui-li-has-thumb">
                    	<a href="view.php" class="ui-btn ui-btn-b">
	                    	<div data-role="onair" class="onair">CAM001</div>
                        	<img src="tmp.jpg">
	                        <div class="desc">
		                        <h2>샘플 테스트 카메라 연결</h2>
								<span>채널설명</span>
	                        </div>
                    	</a>
                    </li>
<?php
		// Tell user that the process is completed
		echo '<script language="javascript">document.getElementById("information").innerHTML="Process completed"</script>';
	
	function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

ini_set('display_errors', 0);

$host = get_client_ip();
$ips = explode(".", $host);
$port = 9999;

for($i=1; $i < 255 ; $i++){
  $percent = intval($i/255 * 100)."%";
 
	echo '<script language="javascript">
	document.getElementById("progress").innerHTML="<div style=\"width:'.$percent.';background-color:red;\">&nbsp;</div>";
    document.getElementById("information").innerHTML="카메라 검색중('.$percent.')";
    </script>';
    echo str_repeat(' ',1024*64);
  
  $h = $ips[0].".".$ips[1].".".$ips[2].".".$i;
  if(fsockopen($h, $port, $errorno, $errorstr, 0.1))
  {  
      $ip .= $h."|";

      gethostbyaddr($_SERVER['REMOTE_ADDR']);
?>
                      <li data-theme="b" class="ui-li-has-thumb">
                    	<a href="view.html" class="ui-btn ui-btn-b">
	                    	<div data-role="onair" class="onair">CAM</div>
                        	<img src="">
	                        <div class="desc">
		                        <h2>[<?=$h?>]</h2>
								<span>-</span>
	                        </div>
                    	</a>
                    </li>
<?php 
	    flush();   
	  }
	}

	echo '<script language="javascript">
	$("#progress").remove();
	document.getElementById("information").innerHTML="검색완료";</script>';
	
	sleep(5);
	echo '<script language="javascript">
	$("#information").remove();
    </script>';

?>                   
                </ul>
			</div>
		</div>
	</div>
</body>
</html>
