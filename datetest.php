<?php 
        $now = date('Y-m-d');
        $agelimit =  date('Y-m-d',strtotime('-10 year'. $now)); 

        echo $agelimit;


?>