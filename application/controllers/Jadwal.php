<?php
    class Jadwal extends CI_Controller {
       public function index(){
         $data['tb_tugas'] = $this->m_jadwal->tampil_data()-> result();
         $this->load->view('templates/header');
         $this->load->view('templates/sidebar');
         $this->load->view('v_tugas', $data);
         $this->load->view('templates/footer');
       }
       public function tambah(){
         $this->load->view('templates/header');
         $this->load->view('templates/sidebar');
         $this->load->view('v_tugas');
         $this->load->view('templates/footer');
       }
       public function tambah_aksi(){
           $mata_kuliah = $this->input->post('mata_kuliah');
           $dosen       = $this->input->post ('dosen');
           $jenis_tugas = $this->input->post('jenis_tugas');
           $nama_tugas  = $this->input->post('nama_tugas');
           $deadline    = $this->input->post('deadline');
           $nama_file   = $this->input->post('nama_file');
           $pengumpulan = $this->input->post('pengumpulan');
           $keterangan  = $this->input->post('keterangan');

           $data = array(
            'mata_kuliah'    => $mata_kuliah,
            'dosen'          => $dosen,
            'jenis_tugas'    => $jenis_tugas,
            'nama_tugas'     => $nama_tugas,
            'deadline'       => $deadline,
            'nama_file'      => $nama_file,
            'pengumpulan'    => $pengumpulan,
            'keterangan'     => $keterangan
           );
           $this->m_jadwal->input_data($data, 'tb_tugas');
           redirect('jadwal/index');
       }
       public function hapus($id){
		$where = array('id' => $id);
		$this->m_jadwal->hapus_data($where,'tb_tugas');
        redirect('jadwal/index');
        }
        public function edit($id){
            $where = array('id'=>$id);
            $data['tb_tugas'] = $this->m_jadwal->edit_data($where,'tb_tugas')->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('v_edit', $data);
            $this->load->view('templates/footer');
        }
        public function update(){
            $id = $this->input->post('id');
            $mata_kuliah = $this->input->post('mata_kuliah');
            $dosen       = $this->input->post ('dosen');
            $jenis_tugas = $this->input->post('jenis_tugas');
            $nama_tugas  = $this->input->post('nama_tugas');
            $deadline    = $this->input->post('deadline');
            $nama_file   = $this->input->post('nama_file');
            $pengumpulan = $this->input->post('pengumpulan');
            $keterangan  = $this->input->post('keterangan');

            $data = array(
                'mata_kuliah'    => $mata_kuliah,
                'dosen'          => $dosen,
                'jenis_tugas'    => $jenis_tugas,
                'nama_tugas'     => $nama_tugas,
                'deadline'       => $deadline,
                'nama_file'      => $nama_file,
                'pengumpulan'    => $pengumpulan,
                'keterangan'     => $keterangan
                );
            $where = array (
                'id' => $id
                );
            $this->m_jadwal->update_data($where, $data, 'tb_tugas');
           redirect('jadwal/index');
        }
        public function search(){
            $keyword = $this->input->post('keyword');
            $data['tb_tugas']=$this->m_jadwal->get_keyword($keyword);
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('v_tugas', $data);
            $this->load->view('templates/footer');
        }
    }


 ?>
