<?php

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

for($i=2; $i < 255 ; $i++){
  $h = $ips[0].".".$ips[1].".".$ips[2].".".$i;
  if(fsockopen($h, $port, $errorno, $errorstr, 0.1))
  {
      $ip .= $h."|";

      gethostbyaddr($_SERVER['REMOTE_ADDR']);
      echo $h."(o)<br/>";
      flush();
  }else{
      echo $h."<br/>";
      flush();
  }

}

// echo $ip;

?>
