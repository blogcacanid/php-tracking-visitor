<?php
    if(isset($_SERVER["HTTP_REFERER"])){
        $refferer = parse_url(strtok($_SERVER["HTTP_REFERER"],'?'), PHP_URL_PATH);
    }else{
        $refferer = 'No Refferer';
    }
//    $refferer   = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'No Refferer';
    $ip         = $_SERVER['REMOTE_ADDR'];
    $tanggal    = date('Y-m-d H:i:s');
    $data       = $tanggal." - ".$ip." - ".$refferer."\r\n";
    file_put_contents('visitor_log.txt', $data, FILE_APPEND);

?>
