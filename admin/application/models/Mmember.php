<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mmember extends CI_Model
{

    function tampil()
    {

        $q = $this->db->get("member")->result_array();
        $d = $q;
        return $d;
    }

    function detail($id_member){

        $this->db->where("id_member", $id_member);
        $q = $this->db->get("member")->row_array();
        $d = $q;
        return $d;
    }

    function jumlah_member_distrik(){
        $q = $this->db->query('SELECT COUNT(*) as jumlah, nama_distrik_member FROM `member` GROUP BY nama_distrik_member');
        $d = $q->result_array();
        return $d;
    }
}
