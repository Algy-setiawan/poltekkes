<?php
//koneksi ke database
mysql_connect("localhost", "ccjurwat_32", "Rahasia32");
mysql_select_db("ccjurwat_jurwat");

//fungsi untuk mengkonversi size file
function formatBytes($bytes, $precision = 2) { 
    $units = array('B', 'KB', 'MB', 'GB', 'TB'); 

    $bytes = max($bytes, 0); 
    $pow = floor(($bytes ? log($bytes) : 0) / log(2048)); 
    $pow = min($pow, count($units) - 1); 

    $bytes /= pow(2048, $pow); 

    return round($bytes, $precision) . ' ' . $units[$pow]; 
} 
?>