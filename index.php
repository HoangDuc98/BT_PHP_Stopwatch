<?php
include_once "StopWatch.php";
$stopWatch = new stopWatch();
$stopWatch->start();
for ($i = 0; $i < 10000; $i++) {
    if ($i % 3 == 0) {
        echo oke;
    } else {
        echo $i;
    }
}
echo "<br>";
$stopWatch->stop();
echo $stopWatch->getElapsedTime();
?>