<?php

class Model_anggota extends CI_Model{
    public function tampil_data(){
        return $this->db->get('anggota');
    }
    public function tambah_anggota($data, $table){
        $this->db->insert($table, $data);
    }
    public function edit_anggota($where, $table){
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function detail_data($id_anggota = null)
    {
        $query = $this->db->get_where('anggota', array('id_anggota' =>$id_anggota))->row();
        return $query;
    }
    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('anggota');
        $this->db->like('nama', $keyword);
        $this->db->or_like('jabatan', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('telp', $keyword);

        return $this->db->get()->result();
    }
}