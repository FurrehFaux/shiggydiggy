<?php
echo '<title>Sick fuckery is not allowed</title>';
echo '<p style="text-align:center;"> 
<object width="1280" height="720">
    <param name="movie" value="banned">
    <embed src="http://dl.dropbox.com/u/50124425/banned.swf" width="800" height="600">
    </embed>
</object>
</p>';
echo '<p style="text-align:center;"></p>According to our servers, your IP is: </p>', $_SERVER['REMOTE_ADDR'];
$line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]";
file_put_contents('visitors.log', $line . PHP_EOL, FILE_APPEND);
?>
