<?php
class M_jadwal extends CI_Model{
    public function tampil_data(){
        return $this->db->get('tb_tugas');
    }
    public function input_data($data, $table){
        $this->db->insert($table, $data);
    }
    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }
    public function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('tb_mahasiswa');
        $this->db->like('mata_kuliah', $keyword);
        $this->db->or_like('dosen', $keyword);
        $this->db->or_like('jenis_tugas', $keyword);
        $this->db->or_like('nama_tugas', $keyword);
        $this->db->or_like('deadline', $keyword);
        $this->db->or_like('nama_file', $keyword);
        $this->db->or_like('pengumpulan', $keyword);
        $this->db->or_like('keterangan', $keyword);
        return $this->db->get()->result();
    }
}

 ?>
