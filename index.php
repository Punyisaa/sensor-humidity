<h1>62106182 Punyisa Kaewchuen<h1>

<iframe src = https://thingspeak.com/channels/1464734/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15 style="height:40%;width:35%;"></iframe>
  <br></br>
 <iframe src =https://thingspeak.com/channels/1464734/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15  style="height:40%;width:35%;"></iframe>
<br></br>
  <iframe src =https://thingspeak.com/channels/1464734/maps/channel_show  style="height:45%;width:35%;"></iframe>
<html>
<head>
<script type="text/JavaScript">

function timedRefresh(timeoutPeriod) {
    setTimeout("location.reload(true);",timeoutPeriod);
}

</script>
</head>
<body onload="JavaScript:timedRefresh(15000);">

<?php 
 $humidity = file_get_contents('http://api.thingspeak.com/channels/1464734/feeds.json?results=1');
$temp = file_get_contents('http://api.thingspeak.com/channels/1464734/feeds.json?results=1');

 echo "<br> temp is = ".$temp."<br>";
 echo "humidity is = ".$humidity;
 
?>

</body>
</html>
