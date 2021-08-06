<?php

class M_auth extends CI_Model
{

    function cek_user($UserID)
    {
        $this->db->where('UserID', $UserID);
        return $this->db->get('Logins')->row();
    }
}
