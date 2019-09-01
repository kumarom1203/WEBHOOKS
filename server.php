<?php
$data    = $_POST;
$headers = apache_request_headers();
echo "<pre>";
print_r($data);
echo "<hr>";
print_r($headers);
echo "<hr>";
$getallheaders = getallheaders();
print_r($getallheaders);
echo "<hr>";
print_r($_SERVER);
?>

<pre>
============ SERVER SIDE CODE server.php =============
$data=$_POST;
$headers = apache_request_headers();
echo "< pre>";
print_r($data);
echo "< hr>";

print_r($headers);
echo "< hr>";
$getallheaders  = getallheaders();
print_r($getallheaders);
echo "< hr>";
print_r($_SERVER);
======================================================
</pre>
