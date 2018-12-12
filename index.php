
<?php



$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "8080",
  CURLOPT_URL => "http://10.118.0.54:8080/MicroStrategy/servlet/mstrWeb/MicroStrategyLibrary/api/auth/login",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\r\n  \"username\": \"admin\",\r\n  \"password\": \"MSTR!@#$\",\r\n  \"loginMode\": 1,\r\n  \"maxSearch\": 3,\r\n  \"workingSet\": 0,\r\n  \"changePassword\": false,\r\n  \"newPassword\": \"string\",\r\n  \"metadataLocale\": \"en_us\",\r\n  \"warehouseDataLocale\": \"en_us\",\r\n  \"displayLocale\": \"en_us\",\r\n  \"messagesLocale\": \"en_us\",\r\n  \"numberLocale\": \"en_us\",\r\n  \"timeZone\": \"UTC\",\r\n  \"applicationType\": 35\r\n}",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

header("Location: Microstrategy.html");
?>