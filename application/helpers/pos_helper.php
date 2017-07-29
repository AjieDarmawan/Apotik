<?php
function cek_session()
{

    $ci=& get_instance();
    $session=$ci->session->userdata('status_login');
    if($session!='oke')
    {
        redirect('login');
        
    }
}

function cek()
{

    $ci=& get_instance();
    $session=$ci->session->userdata('cek');
    if($session!='oke')
    {
        redirect('login');
        
    }
}

    

?>