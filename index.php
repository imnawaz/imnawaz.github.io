<html><h1>TEST</h1>
 <script> 
   $.getJSON('//freegeoip.net/json/?callback=?', function(data) {
  console.log(JSON.stringify(data, null, 2));
});
  </script>
  </html>
$(id)
%windir%
<?php
$ip = getenv('HTTP_CLIENT_IP')?:
getenv('HTTP_X_FORWARDED_FOR')?:
getenv('HTTP_X_FORWARDED')?:
getenv('HTTP_FORWARDED_FOR')?:
getenv('HTTP_FORWARDED')?:
getenv('REMOTE_ADDR');
echo $ip;
?>
