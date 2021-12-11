<?php
function cekuser()
{
    $ci = get_instance();
    $role_id = $ci->session->userdata('role_id');
    $menu = $ci->uri->segment(1);
    if (!$ci->session->userdata('email')){
    	redirect('login');
    }
    if ($role_id == 1) {
        switch ($menu) {
            case 'dashboard':
                redirect('administrator');
                break;

            default:
                # code...
                break;
        }
    } else if ($role_id == 2) {
        switch ($menu) {
            case 'administrator':
                redirect('auth/blocked');
                break;
            default:
                # code...
                break;
        }

	}
}