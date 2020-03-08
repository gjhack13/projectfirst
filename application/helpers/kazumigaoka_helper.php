<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('nip')) {
        redirect('c_login');
    } else {
        $tipe = $ci->session->userdata('tipe');
        $menu = $ci->uri->segment(1);

        $queryMenu = $ci->db->get_where('users', ['tipe' => $menu])->row_array();
        $menu_id = $queryMenu['nip'];

        $userAccess = $ci->db->get_where('users', [
            'tipe' => $tipe,
            'nip' => $menu_id
        ]);

        if ($userAccess->num_rows() < 8) {
            redirect('c_login/blocked');
        }
    }
}
