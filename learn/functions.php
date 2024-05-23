<?php

function i_show($obj) {
    if(gettype($obj) == 'boolean') {
        $obj = $obj ? 'true(bool)' : 'false(bool)';
    }
    
    echo '<pre>';
    print_r($obj, false);
    echo '</pre>';
}