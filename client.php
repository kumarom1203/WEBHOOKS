<?php
$postdata = array(
    'descriptions' => 'This content generated by curl UPDATED BY CURL ',
    'created_by' => 'curl method',
    'category_id' => '2'
);
$curl     = curl_init();
curl_setopt_array($curl, array(
    //CURLOPT_PORT            => "80",
    CURLOPT_URL => "http://fileck.com/paypal/webhooks.php",
    //CURLOPT_URL             => "http://fileck.com/webhooks/server.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    //  CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $postdata,
    CURLOPT_HTTPHEADER => array(
        "Postman-Token: 86f00973-a642-46e2-86ad-a60c5652ef3f",
        "Cache-Control: no-cache",
        // "Content-Type: application/x-www-form-urlencoded",
        "Content-Type: multipart/form-data",
        "Merchand: MER_a60c5652ef3f_CHAND",
        "Author: Om Kumar Yadav",
        "Purpose: Rest Api Token Test"
    )
));
$response = curl_exec($curl);
$err      = curl_error($curl);
curl_close($curl);
if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}
?>

<hr><hr>

<pre>
$postdata = array(
    'descriptions' => 'This content generated by curl UPDATED BY CURL ',
    'created_by' => 'curl method',
    'category_id'   => '2',
);
$curl = curl_init();
curl_setopt_array($curl, array(
  //CURLOPT_PORT            => "80",
  CURLOPT_URL             => "http://fileck.com/webhooks/server.php",
  CURLOPT_RETURNTRANSFER  => true,
  CURLOPT_ENCODING        => "",
  CURLOPT_MAXREDIRS       => 10,
  CURLOPT_TIMEOUT         => 30,
//  CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST   => "POST",
  CURLOPT_POSTFIELDS      => $postdata,
  CURLOPT_HTTPHEADER      => array(
    "Postman-Token: 86f00973-a642-46e2-86ad-a60c5652ef3f",
    "Cache-Control: no-cache",
   
   // "Content-Type: application/x-www-form-urlencoded",
  
  /* 
   application/json
   application/x-javascript
   text/javascript
   text/x-javascript
   text/x-json
 */
    "Content-Type: multipart/form-data",
    "Merchand: MER_a60c5652ef3f_CHAND",
    "Author: Om Kumar Yadav",
    "Purpose: Rest Api Token Test",
  ),
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) 
{
  echo "cURL Error #:" . $err;
}else 
{
  echo $response;
}
</pre>
