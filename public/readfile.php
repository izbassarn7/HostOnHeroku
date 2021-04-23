<?php
$handle = fopen("lab10.txt", 'r');
$count = 0;
while (feof($handle)!=true){
    $count++;
    fgets($handle);
    if ($count==4){ echo fgets($handle); break;}
}
fclose($handle);
?>
