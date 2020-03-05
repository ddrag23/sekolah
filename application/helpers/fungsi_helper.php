<?php
function cekAlreadyLogin(){
    $ci =& get_instance();
    $sess = $ci->session->userdata('id');
    if ($sess) {
        redirect('dashbaord');
    }
}
function cekNotLogin(){
    $ci =& get_instance();
    $sess = $ci->session->userdata('id');
    if (!$sess) {
        redirect('auth');
    }
}
?>