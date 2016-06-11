<?php

function Encrypt($string) {
 /* $long = strlen($string);//primer metodo de encriptado no tiene como desencriptar
  $str = '';
  for($x = 0; $x < $long; $x++) {
    $str .= ($x % 2) != 0 ? md5($string[$x]) : $x;
  }
  return md5($str);
}*/
$key='SHA1XML';
 $result = '';
   for($i=0; $i<strlen($string); $i++) {
      $char = substr($string, $i, 1);
      $keychar = substr($key, ($i % strlen($key))-1, 1);
      $char = chr(ord($char)+ord($keychar));
      $result.=$char;
   }
   return base64_encode($result);

}

?>
