<?php

    $filename ="StockBarang.xls";
    header('Content-type: application/ms-excel');
    header('Content-Disposition: attachment; filename='.$filename);
    
include 'xlstok.php';
?>