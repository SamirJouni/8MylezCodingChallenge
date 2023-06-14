<?php
function reverseString($str) { $reversed = '';
for ($i = 1; $i <= strlen($str); $i++) { $reversed .= $str[-$i];
}
return $reversed; }
$string = "Hallo, Welt!";
$result = reverseString($string);
echo "Umgekehrter String: " . $result;
?>