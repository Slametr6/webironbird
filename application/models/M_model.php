<?php

class M_model extends CI_Model
{
    function insert($table, $data)
    {
        $this->db->insert($table, $data);
    }

    function delete($table, $where)
    {
        $this->db->where($where)->delete($table);
    }

    function update($table, $where, $data)
    {
        $this->db->where($where)->update($table, $data);
    }

    function get_user_by_nip($UserID)
    {
        return $this->db->get_where('logins', ['UserID' => $UserID])->row();
    }

    function get_user_by_email($email)
    {
        return $this->db->get_where('logins', ['email' => $email])->row();
    }

    function get_users($UserID = '')
    {
        if ($UserID == '') {
            return $this->db->get('Logins')->result();
        } else {
            return $this->db->get_where('Logins', ['UserID' => $UserID])->row();
        }
    }

    function get_services($id = '')
    {
        if ($id == '') {
            return $this->db->get('Layanan')->result();
        } else {
            return $this->db->get_where('Layanan', ['id' => $id])->row();
        }
    }

    function fn_servicehome($limit)
    {
            $this->db->where('Status',1);
            $this->db->limit($limit);
            return $this->db->get('Layanan')->result();
    }

	
    function fn_service($Slug = '')
    {
		if ($Slug == '') {
			$this->db->where('Status',1);
            return $this->db->get('Layanan')->result();
        } else {
			$this->db->where('Slug',$Slug); 
            $query = $this->db->get('Layanan');   
            return $query->row();
        }
    }
	
	function fn_sosmedhome()
	{
		return $this->db->get('Sosmed')->row();
	}

    function get_galeri($idgaleri = '')
    {
        if ($idgaleri == '') {
            return $this->db->get('Gallery')->result();
        } else {
            return $this->db->get_where('Gallery', ['idgaleri' => $idgaleri])->row();
        }
    }

    function get_detgaleri($idgaleri = '', $id = '')
    {
        if ($idgaleri == '' && $id == '') {
            return $this->db->get('Det_galeri')->result();
        }
        if ($id != '') {
            return $this->db->get_where('Det_galeri', ['Det_galeri.id' => $id])->row();
        }else{
            $this->db->join('Gallery', 'Gallery.idgaleri = Det_galeri.idgaleri');
            return $this->db->get_where('Det_galeri', ['Det_galeri.idgaleri' => $idgaleri])->result();
        }       
    }

    function addpost_galeri($post_data)
    {
        $this->db->insert('Gallery', $post_data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }

    public function insertimg($data = array())
    {
        $insert = $this->db->insert_batch('Det_galeri', $data);
        return $insert ? true : false;
    }

    function get_pencapaian($idpencapaian = '')
    {
        if ($idpencapaian == '') {
            return $this->db->get('Pencapaian')->result();
        } else {
            return $this->db->get_where('Pencapaian', ['idpencapaian' => $idpencapaian])->row();
        }
    }

    function fn_pencapaian()
    {
        $this->db->where('Status', 1);
        return $this->db->get('Pencapaian')->result();
    }

    function get_berita($idberita = '')
    {
        if ($idberita == '') {
            return $this->db->get('Berita')->result();
        } else {
            return $this->db->get_where('Berita', ['idberita' => $idberita])->row();
        }
    }

    function fn_berita($Slug = '')
    {
        if ($Slug == '') {
			$this->db->where('Status', 1);
            return $this->db->get('Berita')->result();
        } else {
            $this->db->where('Slug', $Slug); 
            $query = $this->db->get('Berita');   
            return $query->row();
        }
    }

    function get_by_like($limit, $start, $value){ 
        return  $this->db->like('Judul', $value)->or_like('Konten', $value)->order_by('idberita','desc')->get('Berita', $limit, $start);
    }

    function get_all_post($limit, $start){ 
        $query = $this->db->order_by('idberita','desc')->get('Berita', $limit, $start);
        return $query;
    }

    public function latest($limit = ''){
        $this->db->order_by('idberita','desc'); 
        if($limit != ''){
            $this->db->limit($limit);
        }else{
            $this->db->limit(4);
        }
        $query = $this->db->get('Berita');
        return $query->result();    
    }

    function get_karir($idKarir = '')
    {
        if ($idKarir == '') {
            return $this->db->get('Karir')->result();
        } else {
            return $this->db->get_where('Karir', ['idKarir' => $idKarir])->row();
        }
    }

    function fn_karir($Slug = '')
    {
        if ($Slug == '') {
            $this->db->where('Status', 1);
            return $this->db->get('Karir')->result();
        } else {
            $this->db->where('Slug', $Slug); 
            $query = $this->db->get('Karir');   
            return $query->row();
        }
    }

    function get_internship($idInternship = '')
    {
        if ($idInternship == '') {
			return $this->db->get('Internship')->result();
        } else {
            return $this->db->get_where('Internship', ['idInternship' => $idInternship])->row();
        }
    }

    function fn_internship()
    {
        $this->db->where('Status', 1);
        return $this->db->get('Internship')->result();
    }

    function get_sosmed()
    {
        return $this->db->get('Sosmed')->row();        
    }

    function get_alasan()
    {
        return $this->db->get_where('Alasan')->row();
	}
	
	function get_value()
    {
        return $this->db->get_where('Value')->row();
	}
	
	function get_visimisi()
    {
        return $this->db->get_where('Visimisi')->row();
	}
	
	function get_manajemen($idmanajemen = '')
    {
        if ($idmanajemen == '') {
            return $this->db->get('Manajemen')->result();
        } else {
            return $this->db->get_where('Manajemen', ['idmanajemen' => $idmanajemen])->row();
        }
	}
	
	function get_kantor($idkantor = '')
    {
        if ($idkantor == '') {
            return $this->db->get('Kantor')->result();
        } else {
            return $this->db->get_where('Kantor', ['idkantor' => $idkantor])->row();
        }
    }

    function fn_chooseus($limit)
    {
        $this->db->limit($limit);
        return $this->db->get('Alasan')->result();
	}
	
	function get_slide($idslide = '')
    {
        if ($idslide == '') {
			return $this->db->get('Slide')->result();
        } else {
            return $this->db->get_where('Slide', ['idslide' => $idslide])->row();
        }
	}
	
	function fn_slide()
    {
        $this->db->where('Status', 1);
        return $this->db->get('Slide')->result();
    }
}
