Interactive shell

php > <?php
php >
php > $id = isset($_GET['id'])?$_GET['id']:'cctv1';

Parse error: syntax error, unexpected token "<", expecting end of file in php shell code on line 1
php > $n = [
php >     //
php >     'cctv4k' => 2022575203,//cccv-4k
php >     'cctv8k' => 2020603421,//cccv-8k
php >     'cctv1' => 2022576803,//cccv1
php >     'cctv2' => 2022576703,//cccv2
php >     'cctv3' => 2022576503,//cccv3(vip)
php >     'cctv4' => 2022576603,//cccv4
php >     'cctv5' => 2022576403,//cccv5
php >     'cctv5p' => 2022576303,//cccv5+
php >     'cctv6' => 2022574303,//cccv6(vip)
php >     'cctv7' => 2022576203,//cccv7
php >     'cctv8' => 2022576103,//cccv8(vip)
php >     'cctv9' => 2022576003,//cccv9
php >     'cctv10' => 2022573003,//CCTV10
php >     'cctv11' => 2022575903,//CCTV11
php >     'cctv12' => 2022575803,//CCTV12
php >     'cctv13' => 2022575703,//CCTV13
php >     'cctv14' => 2022575603,//CCTV14
php >     'cctv15' => 2022575503,//CCTV15
php >     'cctv16' => 2022575403,//CCTV16
php >     'cctv16-4k' => 2022575103,//CCTV16-4k(vip)
php >     'cctv17' => 2022575303,//CCTV17
php >     //
php >     'bqkj' => 2012513403,//CCTV    (vip)
php >     'dyjc' => 2012514403,//CCTV    (vip)
php >     'hjjc' => 2012511203,//CCTV    (vip)
php >     'fyjc' => 2012513603,//CCTV    (vip)
php >     'fyyy' => 2012514103,//CCTV    (vip)
php >     'fyzq' => 2012514203,//CCTV    (vip)
php >     'dszn' => 2012514003,//CCTV    (vip)
php >     'nxss' => 2012513903,//CCTV    (vip)
php >     'whjp' => 2012513803,//CCTV      (vip)
php >     'sjdl' => 2012513303,//CCTV    (vip)
php >     'gefwq' => 2012512503,//CCTV     (vip)
php >     'ystq' => 2012513703,//CCTV    (vip)
php >     'wsjk' => 2012513503,//CCTV    (vip)
php >     //
php >     'cgtn' => 2022575003,//CGTN
php >     'cgtnjl' => 2022574703,//CGTN
php >     'cgtne' => 2022574803,//CGTN
php >     'cgtnf' => 2022574903,//CGTN
php >     'cgtna' => 2022574603,//CGTN
php >     'cgtnr' => 2022574803,//CGTN
php >     //
php >     'bjws' => 2000272103,//
php >     'dfws' => 2000292403,//
php >     'tjws' => 2019927003, //
php >     'cqws' => 2000297803,//
php >     'hljws' => 2000293903,//
php >     'lnws' => 2000281303,//
php >     'hbws' => 2000293403,//
php >     'sdws' => 2000294803,//
php >     'ahws' => 2000298003,//
php >     'hnws' => 2000296103,//
php >     'hubws' => 2000294503,//
php >     'hunws' => 2000296203,//
php >     'jxws' => 2000294103,//
php >     'jsws' => 2000295603,//
php >     'zjws' => 2000295503,//
php >     'dnws' => 2000292503,//
php >     'gdws' => 2000292703,//
php >     'szws' => 2000292203,//
php >     'gxws' => 2000294203,//
php >     'gzws' => 2000293303,//
php >     'scws' => 2000295003,//
php >     'xjws' => 2019927403, //
php >     'hinws' => 2000291503,//
php >     ];
php > $cnlid = $n[$id];

Warning: Undefined variable $id in php shell code on line 1

Warning: Undefined array key "" in php shell code on line 1
php > $guid = "lsdbop7p_".nu(100);

Warning: Uncaught Error: Call to undefined function nu() in php shell code:1
Stack trace:
#0 {main}
  thrown in php shell code on line 1
php > $salt = '0f$IVHi9Qno?G';
php > $platform = "5910204";
php > $key = hex2bin("48e5918a74ae21c972b90cce8af6c8be");
php > $iv = hex2bin("9a7e7d23610266b1d9fbf98581384d92");
php > $ts = time();
php > $el = "|{$cnlid}|{$ts}|mg3c3b04ba|V1.0.0|{$guid}|{$platform}|https://www.yangshipin.c|mozilla/5.0 (windows nt ||Mozilla|Netscape|Win32|";

Warning: Undefined variable $guid in php shell code on line 1
php > $len = strlen($el);
php > $xl = 0;
php > for($i=0;$i<$len;$i++){
php {     $xl = ($xl << 5) - $xl + ord($el[$i]);
php {     $xl &= $xl & 0xFFFFFFFF;
php {     }
php >
php > $xl = ($xl > 2147483648) ? $xl - 4294967296 : $xl;
php >
php > $el = '|'.$xl.$el;
php > $ckey = "--01".strtoupper(bin2hex(openssl_encrypt($el,"AES-128-CBC",$key,1,$iv)));

Warning: Uncaught Error: Call to undefined function openssl_encrypt() in php shell code:1
Stack trace:
#0 {main}
  thrown in php shell code on line 1
php > function Kc($t) {//
php {     $e = "";
php {     $r = [];
php {     $Rc = '0f$IVHi9Qno?G';
php {     foreach ($t as $key => $value) {
php {         $r[] = $key;
php {     }
php {     sort($r);
php {     foreach ($r as $index => $key) {
php {         if ($index != 0) {
php {             $e .= "&";
php {         }
php {         if (is_array($t[$key])) {
php {             $t[$key] = implode(",", $t[$key]);
php {         }
php {         $e .= $key . "=" . rawurlencode($t[$key]);
php {     }
php {     $e .= $Rc;
php {     return md5($e);
php { }
php > function nu($t = 10) {
php {     $e = "ABCDEFGHIJKlMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
php {     $r = strlen($e);
php {     $n = "";
php {     for ($i = 0; $i < $t; $i++) {
php {         $n .= $e[rand(0, $r - 1)];
php {     }
php {     return $n;
php { }
php > $randomString = nu(10);
php > //
php > $currentTimeMillis = round(microtime(true) * 1000);
php > $request_id = "999999".$randomString.$currentTimeMillis;
php >
php > function sign($param) {//
php {     $e = "";
php {     $r = array_keys($param);
php {     sort($r); //
php {
php {     foreach ($r as $n => $key) {
php {         if ($n != 0) {
php {             $e .= "&";
php {         }
php {
php {         if (is_array($param[$key])) {
php {             $t[$key] = implode(',', $param[$key]); //
php {         }
php {
php {         $e .= $key . "=" . rawurlencode($param[$key]); //    rawurlencode    URL
php {     }
php {
php {     $e .= "Q0uVOpuUpXTOUwRn"; //
php {     return md5($e); //          MD5
php { }
php > $param = [
php >     "pid"=>'600001859',
php >     "guid"=>$guid,
php >     "appid"=>"ysp_pc",
php >     "rand_str"=>nu(10),
php > ];

Warning: Undefined variable $guid in php shell code on line 3
php > $singature=sign($param);

Deprecated: rawurlencode(): Passing null to parameter #1 ($string) of type string is deprecated in php shell code on line 15
php > $param["signature"] = $singature;
php >
php > //print_r($param);
php > $bstrURL = "https://player-api.yangshipin.cn/v1/player/auth";//
php > $headers = [
php >     "Content-Type: application/x-www-form-urlencoded;charset=UTF-8",
php >     "Referer: https://www.yangshipin.cn/",
php >     "Cookie: guid={$guid};  versionName=99.99.99; versionCode=999999; vplatform=109; platformVersion=Chrome; deviceModel=123; updateProtocol=1; seqId=
36;request-id={$request_id}",
php >     "Yspappid: 519748109",
php >     ];

Warning: Undefined variable $guid in php shell code on line 4
php > $ch = curl_init($bstrURL);

Warning: Uncaught Error: Call to undefined function curl_init() in php shell code:1
Stack trace:
#0 {main}
  thrown in php shell code on line 1
php > curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

Warning: Uncaught Error: Call to undefined function curl_setopt() in php shell code:1
Stack trace:
#0 {main}
  thrown in php shell code on line 1
php > curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

Warning: Uncaught Error: Call to undefined function curl_setopt() in php shell code:1
Stack trace:
#0 {main}
  thrown in php shell code on line 1
php > curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

Warning: Uncaught Error: Call to undefined function curl_setopt() in php shell code:1
Stack trace:
#0 {main}
  thrown in php shell code on line 1
php > curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);

Warning: Uncaught Error: Call to undefined function curl_setopt() in php shell code:1
Stack trace:
#0 {main}
  thrown in php shell code on line 1
php > curl_setopt($ch, CURLOPT_POST,1);

Warning: Uncaught Error: Call to undefined function curl_setopt() in php shell code:1
Stack trace:
#0 {main}
  thrown in php shell code on line 1
php > curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($param));

Warning: Uncaught Error: Call to undefined function curl_setopt() in php shell code:1
Stack trace:
#0 {main}
  thrown in php shell code on line 1
php > $data = curl_exec($ch);

Warning: Uncaught Error: Call to undefined function curl_exec() in php shell code:1
Stack trace:
#0 {main}
  thrown in php shell code on line 1
php > curl_close($ch);

Warning: Uncaught Error: Call to undefined function curl_close() in php shell code:1
Stack trace:
#0 {main}
  thrown in php shell code on line 1
php > $json_data = json_decode($data);

Warning: Undefined variable $data in php shell code on line 1

Deprecated: json_decode(): Passing null to parameter #1 ($json) of type string is deprecated in php shell code on line 1
php > $token = $json_data->data->token;

Warning: Attempt to read property "data" on null in php shell code on line 1

Warning: Attempt to read property "token" on null in php shell code on line 1
php > //auth
php >
php > //    get_info
php > $params = [
php >     "cnlid" => "{$cnlid}",
php >     "stream" => "2",
php >     "guid" => $guid,
php >     "cKey" => $ckey,
php >     "adjust" => 1,
php >     "sphttps" => "1",
php >     "platform" => "5910204",
php >     "cmd" => "2",
php >     "encryptVer" => "8.1",
php >     "dtype" => "1",
php >     "devid" => "devid",
php >     "otype" => "ojson",
php >     "appVer" => "V1.0.0",
php >     "app_version" => "V1.0.0",
php >     "rand_str" => nu(10),
php >     "channel" => "ysp_tx",
php >     "defn" => "fhd",
php >
php > ];

Warning: Undefined variable $guid in php shell code on line 4

Warning: Undefined variable $ckey in php shell code on line 5
php > $sign1 = Kc($params);

Deprecated: rawurlencode(): Passing null to parameter #1 ($string) of type string is deprecated in php shell code on line 16

Deprecated: rawurlencode(): Passing null to parameter #1 ($string) of type string is deprecated in php shell code on line 16
php > $params["signature"] = $sign1;
php >
php > $bstrURL1 = "https://player-api.yangshipin.cn/v1/player/get_live_info";
php > $headers1 = [
php >     "Content-Type: application/json;charset=UTF-8",
php >     "Referer: https://www.yangshipin.cn/",
php >     "Cookie: guid={$guid};  versionName=99.99.99; versionCode=999999; vplatform=109; platformVersion=Chrome; deviceModel=123; updateProtocol=1; seqId=
36;request-id={$request_id}",
php >     "Yspappid: 519748109",
php >     "yspplayertoken: {$token}",
php > ];

Warning: Undefined variable $guid in php shell code on line 4
php > $ch = curl_init($bstrURL1);

Warning: Uncaught Error: Call to undefined function curl_init() in php shell code:1
Stack trace:
#0 {main}
  thrown in php shell code on line 1
php > curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

Warning: Uncaught Error: Call to undefined function curl_setopt() in php shell code:1
Stack trace:
#0 {main}
  thrown in php shell code on line 1
php > curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

Warning: Uncaught Error: Call to undefined function curl_setopt() in php shell code:1
Stack trace:
#0 {main}
  thrown in php shell code on line 1
php > curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

Warning: Uncaught Error: Call to undefined function curl_setopt() in php shell code:1
Stack trace:
#0 {main}
  thrown in php shell code on line 1
php > curl_setopt($ch, CURLOPT_HTTPHEADER,$headers1);

Warning: Uncaught Error: Call to undefined function curl_setopt() in php shell code:1
Stack trace:
#0 {main}
  thrown in php shell code on line 1
php > curl_setopt($ch, CURLOPT_POST,1);

Warning: Uncaught Error: Call to undefined function curl_setopt() in php shell code:1
Stack trace:
#0 {main}
  thrown in php shell code on line 1
php > curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($params));

Warning: Uncaught Error: Call to undefined function curl_setopt() in php shell code:1
Stack trace:
#0 {main}
  thrown in php shell code on line 1
php > $data = curl_exec($ch);

Warning: Uncaught Error: Call to undefined function curl_exec() in php shell code:1
Stack trace:
#0 {main}
  thrown in php shell code on line 1
php > //   CURL
php > curl_close($ch);

Warning: Uncaught Error: Call to undefined function curl_close() in php shell code:1
Stack trace:
#0 {main}
  thrown in php shell code on line 1
php > $json = json_decode($data);

Warning: Undefined variable $data in php shell code on line 1

Deprecated: json_decode(): Passing null to parameter #1 ($json) of type string is deprecated in php shell code on line 1
php > $live = $json->data->playurl;

Warning: Attempt to read property "data" on null in php shell code on line 1

Warning: Attempt to read property "playurl" on null in php shell code on line 1
php > $extended_param = $json->data->extended_param;

Warning: Attempt to read property "data" on null in php shell code on line 1

Warning: Attempt to read property "extended_param" on null in php shell code on line 1
php > $chanllCode = json_decode($json->data->chanll)->code;

Warning: Attempt to read property "data" on null in php shell code on line 1

Warning: Attempt to read property "chanll" on null in php shell code on line 1

Deprecated: json_decode(): Passing null to parameter #1 ($json) of type string is deprecated in php shell code on line 1

Warning: Attempt to read property "code" on null in php shell code on line 1
php > $decodeChanll = base64_decode($chanllCode);

Deprecated: base64_decode(): Passing null to parameter #1 ($string) of type string is deprecated in php shell code on line 1
php > //           des_key des_iv
php > $patternKey = '/var des_key = "(.*?)";/';
php > $patternIv = '/var des_iv = "(.*?)";/';
php > //
php > $desKey = "";
php > $desIv = "";
php > //          des_key
php > if (preg_match($patternKey, $decodeChanll, $matchesKey)) {
php {     $desKey = $matchesKey[1];
php { }
php > //          des_iv
php > if (preg_match($patternIv, $decodeChanll, $matchesIv)) {
php {     $desIv = $matchesIv[1];
php { }
php > //
php > $jsonString = '{"mver":"1","subver":"1.2","host":"www.yangshipin.cn/#/tv/home?pid=","referer":"","canvas":"YSPANGLE(Intel,Intel(R)Iris(R)XeGraphics(0x
000046A6)Direct3D11vs_5_0ps_5_0,D3D11)"}';
php > $data = json_decode($jsonString, true);
php > function encryptData($data,$desKey,$desIv) {
php {     $plaintext = json_encode($data,JSON_UNESCAPED_SLASHES);
php {     $key = base64_decode($desKey);
php {     $iv = base64_decode($desIv);
php {     $encrypted = openssl_encrypt($plaintext, 'des-ede3-cbc', $key, OPENSSL_RAW_DATA, $iv);
php {     return strtoupper(bin2hex($encrypted));
php { }
php > //      revoi
php > $encryptedHex = encryptData($data,$desKey,$desIv);//revoi

Warning: Uncaught Error: Call to undefined function openssl_encrypt() in php shell code:5
Stack trace:
#0 php shell code(1): encryptData(Array, '', '')
#1 {main}
  thrown in php shell code on line 5
php > $burl = explode("{$n[$id]}.m3u8",$live)[0];

Warning: Undefined variable $id in php shell code on line 1

Warning: Undefined array key "" in php shell code on line 1

Deprecated: explode(): Passing null to parameter #2 ($string) of type string is deprecated in php shell code on line 1
php > $d = file_get_contents($live);

Deprecated: file_get_contents(): Passing null to parameter #1 ($filename) of type string is deprecated in php shell code on line 1

Warning: Uncaught ValueError: Path cannot be empty in php shell code:1
Stack trace:
#0 php shell code(1): file_get_contents('')
#1 {main}
  thrown in php shell code on line 1
php > $pattern = '/\.m3u8(.*)/';
php > preg_match($pattern, $live, $matches);

Deprecated: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in php shell code on line 1
php > $str = preg_replace("/(.*?.ts)/", $burl."$1$matches[1]",$d);

Warning: Undefined array key 1 in php shell code on line 1

Warning: Undefined variable $d in php shell code on line 1

Deprecated: preg_replace(): Passing null to parameter #3 ($subject) of type array|string is deprecated in php shell code on line 1
php > $filteredContent = preg_replace('/outlivecloud-cdn.ysp.cctv.cn/', 'hlslive-tx-cdn.ysp.cctv.cn',$str);
php > header("Content-Type: application/vnd.apple.mpegurl");

Warning: Cannot modify header information - headers already sent in php shell code on line 1
php > header("Content-Disposition: inline; filename=index.m3u8");

Warning: Cannot modify header information - headers already sent in php shell code on line 1
php > echo $filteredContent;
php > ?>
    >
