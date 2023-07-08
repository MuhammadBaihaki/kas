<?php

class Model_masuk extends CI_Model{
    public function tampil_data(){
        return $this->db->get('kas_masuk');
    }
    public function tambah_masuk($data, $table){
        $this->db->insert($table, $data);
    }
    public function edit_masuk($where, $table){
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
    public function hitung_masuk()
        {
        $this->db->select_sum('jumlah');
        $query = $this->db->get('kas_masuk');
        if($query->num_rows()>0)
        {
                return $query->row()->jumlah;
        }else
        {
                return 0;
        }
        }
    public function detail_data($id_masuk = null)
    {
        $query = $this->db->get_where('kas_masuk', array('id_masuk' =>$id_masuk))->row();
        return $query;
    }
    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('kas_masuk');
        $this->db->like('nama', $keyword);
        $this->db->or_like('jabatan', $keyword);
        $this->db->or_like('jumlah', $keyword);
        $this->db->or_like('tanggal', $keyword);

        return $this->db->get()->result();
    }
}