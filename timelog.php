<?php


date_default_timezone_set('Asia/Ho_Chi_Minh');

$date = date('d/m/Y - H:i:s');

echo $date;

$tep = fopen("time.txt", "a+");
fwrite($tep, "$date\n");
fclose($tep);
