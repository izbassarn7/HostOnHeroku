<?php
$emails = fopen("lidn.txt", 'rb');
stream_filter_append($emails, 'string.rot13');
while (feof($emails) != true){
    echo fgets($emails);
}
fclose($emails);
?>
