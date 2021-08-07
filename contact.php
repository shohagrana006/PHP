<?php
$shohan = array(12,52,254,251,362,6365,56);
// sort($shohan);
// rsort($shohan);
// asort($shohan);
// arsort($shohan);
// ksort($shohan);
// krsort($shohan);
// print_r($shohan) ;

$shajid = "hey sajid, how are you?";
echo strlen($shajid)."<br />";
echo str_word_count($shajid)."<br />";
echo strrev($shajid)."<br />";
print_r(str_split($shajid))."<br />"."<br />";
echo str_repeat($shajid, 5)."<br />";
echo str_replace("sajid", "shohag", $shajid)."<br />";
echo ucwords($shajid)."<br />";
echo ucfirst($shajid)."<br />";
echo md5($shajid)."<br />";


$a = 1;
while ($a <= 10) {
  echo $a;
  $a++;
}

echo "<br />";

$b = 1;
do{
  echo $b;
  $b++;
}while($b >= 10);


?>
