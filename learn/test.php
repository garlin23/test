<?php

header('Content-type: text/html; charset=utf-8');

require_once 'functions.php';

require_once 'user.php';








function bumpCounter($arr) {
    i_show(array_unique($arr));
    i_show(count(array_unique($arr)));
    i_show(2 ** count(array_unique($arr)));

    
    
    
    
    return 2 ** count(array_unique($arr)) - 1;
}




i_show(bumpCounter([2, 3, 4, 5, 5, 6, 6, 7, 8, 8]));




//for ($i=0; $i<count($n); $i++) {
//
//}




