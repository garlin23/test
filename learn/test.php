<?php

header('Content-type: text/html; charset=utf-8');

require_once 'functions.php';

require_once 'user.php';








function dead($arr) {
    $one = ['Q', 'U', 'T', 'H', 'C', 'R', 'D', 'M', 'Z'];
    $four = ['W', 'E', 'O', 'V', 'X', 'I', 'N', 'G'];
    $seven = ['J', 'F', 'A', 'B', 'K', 'P', 'L', 'Y'];
    $ten = ['S'];
    $oneSeat = [0,11,1,10,2,9,3,8,4,7,5,6];
    $fourSeat = [3,2,4,1,5,0,6,11,7,10,8,9];
    $sevenSeat = [6,5,7,4,8,3,9,2,10,1,11,0];
    $tenSeat = [9,8,10,7,11,6,0,5,1,4,2,3];
    
    $result = [];
    $count = 0;
    
    foreach ($arr as $item) {
        $i = str_split($item)[0];
        if(in_array($i, $one)) {
            foreach ($oneSeat as $value) {
                if(!isset($result[$value])) {
                    $result[$value] = $item;
                    break;
                }
            }
        }
    
        if(in_array($i, $four)) {
            foreach ($fourSeat as $value) {
                if(!isset($result[$value])) {
                    $result[$value] = $item;
                    break;
                }
            }
        }
    
        if(in_array($i, $seven)) {
            foreach ($sevenSeat as $value) {
                if(!isset($result[$value])) {
                    $result[$value] = $item;
                    break;
                }
            }
        }
    
        if(in_array($i, $ten)) {
            foreach ($tenSeat as $value) {
                if(!isset($result[$value])) {
                    $result[$value] = $item;
                    break;
                }
            }
        }
        
        $count++;
        if($count > 11)
            break;
    }
    for ($i=0; $i<12;$i++) {
        if(!isset($result[$i]))
            $result[$i] = "_____";
    }
    
    ksort($result);
    
    return $result;
}




i_show(dead(['Egdob', 'Liame', 'Skceg', 'Yesba', 'Cinid', 'Sallo', 'Sumac', 'Triks', 'Sipat', 'Elona']));



//["Cinid", "Sreod", "Elona", "Egdob", "Deyab", "Yesba", "Liame", "Sipat", "Sallo", "Skceg", "Sumac", "Triks"]
//for ($i=0; $i<count($n); $i++) {
//
//}




