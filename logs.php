<?php
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $datetime = date(DATE_RFC822);

    $log_line = 'IP adress: '. $ip_address. 'Date/Time: '.$datetime. '\n';
    $logfile = fopen('logs.txt', 'a+') or die('Unable to open file!');
    fwrite($logfile, $log_line);
    fclose($logfile);
?>