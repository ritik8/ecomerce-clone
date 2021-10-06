<?php

function isUserLogin(){

    $CI=get_instance();
    if($CI->session->userdata('id'))
    {
          return TRUE;
    }
    else
    {
             return TRUE;
    }
}

?>