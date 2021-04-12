<?php
$handle = fopen("lab10.txt", 'r');
while (feof($handle)!=true){
    echo fgets($handle)."<br>";
}
fclose($handle);
?>
