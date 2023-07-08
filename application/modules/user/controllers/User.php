<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
        public function index()
        {
        $data['title'] = 'Dashboard';
        $data['masuk'] = $this->model_masuk->tampil_data()->result();
        $data['total_masuk'] = $this->model_masuk->hitung_masuk();
        $data['total_keluar'] = $this->model_keluar->hitung_keluar();
        $this->load->view('_templates/header');
        $this->load->view('_templates/sidebar');
        $this->load->view('user/index', $data);
        $this->load->view('_templates/footer');
        }
        public function masuk()
        {
        $data['title'] = 'Kas Masuk';
        $data['masuk'] = $this->model_masuk->tampil_data()->result();
        $this->load->view('_templates/header');
        $this->load->view('_templates/sidebar');
        $this->load->view('user/masuk', $data);
        $this->load->view('_templates/footer');
        }
        
        public function keluar()
        {
        $data['title'] = 'Kas Keluar';
        $data['keluar'] = $this->model_keluar->tampil_data()->result();
        $this->load->view('_templates/header');
        $this->load->view('_templates/sidebar');
        $this->load->view('user/keluar', $data);
        $this->load->view('_templates/footer');
        }
        public function anggota()
        {
        $data['title'] = 'Anggota';
        $data['anggota'] = $this->model_anggota->tampil_data()->result();
        $this->load->view('_templates/header');
        $this->load->view('_templates/sidebar');
        $this->load->view('user/anggota', $data);
        $this->load->view('_templates/footer');
        }

        public function detail_masuk($id_masuk)
        {
                $this->load->model('model_masuk');
                $detail = $this->model_masuk->detail_data($id_masuk);
                $data['detail']= $detail;
                $this->load->view('_templates/header');
                $this->load->view('_templates/sidebar');
                $this->load->view('user/detail_masuk', $data);
                $this->load->view('_templates/footer');
        }

        public function tambah_masuk()
        {
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $jumlah = $this->input->post('jumlah');
        $tanggal = $this->input->post('tanggal');

        $data = array (
                'nama'          => $nama,
                'jabatan'       => $jabatan,
                'jumlah'        => $jumlah,
                'tanggal'       => $tanggal
        );
        $this->model_masuk->tambah_masuk($data, 'kas_masuk');
        redirect('user/masuk');
        }

        public function detail_keluar($id_keluar)
        {
                $this->load->model('model_keluar');
                $detail = $this->model_keluar->detail_data($id_keluar);
                $data['detail']= $detail;
                $this->load->view('_templates/header');
                $this->load->view('_templates/sidebar');
                $this->load->view('user/detail_keluar', $data);
                $this->load->view('_templates/footer');
        }

        public function tambah_keluar()
        {
        $nama = $this->input->post('nama');
        $jumlah = $this->input->post('jumlah');
        $tanggal = $this->input->post('tanggal');

        $data = array (
                'nama'          => $nama,
                'jumlah'        => $jumlah,
                'tanggal'       => $tanggal
        );
        $this->model_keluar->tambah_keluar($data, 'kas_keluar');
        redirect('user/keluar');
        }

        public function detail_anggota($id_anggota)
        {
                $this->load->model('model_anggota');
                $detail = $this->model_anggota->detail_data($id_anggota);
                $data['detail']= $detail;
                $this->load->view('_templates/header');
                $this->load->view('_templates/sidebar');
                $this->load->view('user/detail_anggota', $data);
                $this->load->view('_templates/footer');
        }

        public function tambah_anggota()
        {
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $alamat = $this->input->post('alamat');
        $telp = $this->input->post('telp');

        $data = array (
                'nama'          => $nama,
                'jabatan'       => $jabatan,
                'alamat'        => $alamat,
                'telp'          => $telp
        );
        $this->model_anggota->tambah_anggota($data, 'anggota');
        redirect('user/anggota');
        }

        public function edit_masuk($id_masuk)
        {
                $data['title'] = 'Edit Kas Masuk';
                $where = array('id_masuk' =>$id_masuk);
                $data['masuk'] = $this->model_masuk->edit_masuk($where, 'kas_masuk')->result();
                $this->load->view('_templates/header');
                $this->load->view('_templates/sidebar');
                $this->load->view('user/edit_masuk', $data);
                $this->load->view('_templates/footer');
        }
        public function update_masuk()
        {
                $id_masuk       = $this->input->post('id_masuk');
                $nama           = $this->input->post('nama');
                $jabatan        = $this->input->post('jabatan');
                $jumlah         = $this->input->post('jumlah');
                $tanggal        = $this->input->post('tanggal');

                $data = array (
                        'nama'          => $nama,
                        'jabatan'       => $jabatan,
                        'jumlah'        => $jumlah,
                        'tanggal'       => $tanggal
                );

                $where = array(
                        'id_masuk' => $id_masuk
                );

                $this->model_masuk->update_data($where, $data, 'kas_masuk');
                redirect('user/masuk');
        }

        public function hapus_masuk($id_masuk)
        {
                $where = array('id_masuk' => $id_masuk);
                $this->model_masuk->hapus_data($where, 'kas_masuk');
                redirect('user/masuk');
        }

        public function edit_keluar($id_keluar)
        {
                $data['title'] = 'Edit Pengeluaran';
                $where = array('id_keluar' =>$id_keluar);
                $data['keluar'] = $this->model_keluar->edit_keluar($where, 'kas_keluar')->result();
                $this->load->view('_templates/header');
                $this->load->view('_templates/sidebar');
                $this->load->view('user/edit_keluar', $data);
                $this->load->view('_templates/footer');
        }
        public function update_keluar()
        {
                $id_keluar       = $this->input->post('id_keluar');
                $nama           = $this->input->post('nama');
                $jumlah         = $this->input->post('jumlah');
                $tanggal        = $this->input->post('tanggal');

                $data = array (
                        'nama'          => $nama,
                        'jumlah'        => $jumlah,
                        'tanggal'       => $tanggal
                );

                $where = array(
                        'id_keluar' => $id_keluar
                );

                $this->model_keluar->update_data($where, $data, 'kas_keluar');
                redirect('user/keluar');
        }
        public function hapus_keluar($id_keluar)
        {
                $where = array('id_keluar' => $id_keluar);
                $this->model_keluar->hapus_data($where, 'kas_keluar');
                redirect('user/keluar');
        }

        public function edit_anggota($id_anggota)
        {
                $data['title'] = 'Edit Anggota';
                $where = array('id_anggota' =>$id_anggota);
                $data['anggota'] = $this->model_anggota->edit_anggota($where, 'anggota')->result();
                $this->load->view('_templates/header');
                $this->load->view('_templates/sidebar');
                $this->load->view('user/edit_anggota', $data);
                $this->load->view('_templates/footer');
        }
        public function update_anggota()
        {
                $id_anggota  = $this->input->post('id_anggota');
                $nama        = $this->input->post('nama');
                $jabatan     = $this->input->post('jabatan');
                $alamat      = $this->input->post('alamat');
                $telp        = $this->input->post('telp');

                $data = array (
                        'nama'         => $nama,
                        'jabatan'      => $jabatan,
                        'alamat'       => $alamat,
                        'telp'         => $telp
                );

                $where = array(
                        'id_anggota' => $id_anggota
                );

                $this->model_anggota->update_data($where, $data, 'anggota');
                redirect('user/anggota');
        }
        public function hapus_anggota($id_anggota)
        {
                $where = array('id_anggota' => $id_anggota);
                $this->model_anggota->hapus_data($where, 'anggota');
                redirect('user/anggota');
        }
        public function pdf_masuk()
        {
                $this->load->library('dompdf_gen');

                $data['masuk'] = $this->model_masuk->tampil_data('kas_masuk')->result();

                $this->load->view('laporan_masuk_pdf', $data);

                $paper_size ='A4';
                $orientation = 'landscape';
                $html = $this->output->get_output();
                $this->dompdf->set_paper($paper_size, $orientation);

                $this->dompdf->load_html($html);
                $this->dompdf->render();
                $this->dompdf->stream("Laporan_kas_masuk.pdf", array('Attachment'=>0));
        }
        public function pdf_keluar()
        {
                $this->load->library('dompdf_gen');

                $data['keluar'] = $this->model_keluar->tampil_data('kas_keluar')->result();

                $this->load->view('laporan_keluar_pdf', $data);

                $paper_size ='A4';
                $orientation = 'landscape';
                $html = $this->output->get_output();
                $this->dompdf->set_paper($paper_size, $orientation);

                $this->dompdf->load_html($html);
                $this->dompdf->render();
                $this->dompdf->stream("Laporan_kas_keluar.pdf", array('Attachment'=>0));
        }

        public function pdf_anggota()
        {
                $this->load->library('dompdf_gen');

                $data['anggota'] = $this->model_anggota->tampil_data('anggota')->result();

                $this->load->view('laporan_anggota_pdf', $data);

                $paper_size ='A4';
                $orientation = 'landscape';
                $html = $this->output->get_output();
                $this->dompdf->set_paper($paper_size, $orientation);

                $this->dompdf->load_html($html);
                $this->dompdf->render();
                $this->dompdf->stream("Laporan_anggota.pdf", array('Attachment'=>0));
        }
        
        public function cari_masuk()
        {
                $data['title'] = 'Pencarian';
                $keyword = $this->input->post('keyword');
                $data['masuk']=$this->model_masuk->get_keyword($keyword);
                $this->load->view('_templates/header');
                $this->load->view('_templates/sidebar');
                $this->load->view('user/masuk', $data);
                $this->load->view('_templates/footer');
        }

        public function cari_keluar()
        {
                $data['title'] = 'Pencarian';
                $keyword = $this->input->post('keyword');
                $data['keluar']=$this->model_keluar->get_keyword($keyword);
                $this->load->view('_templates/header');
                $this->load->view('_templates/sidebar');
                $this->load->view('user/keluar', $data);
                $this->load->view('_templates/footer');
        }

        public function cari_anggota()
        {
                $data['title'] = 'Pencarian';
                $keyword = $this->input->post('keyword');
                $data['anggota']=$this->model_anggota->get_keyword($keyword);
                $this->load->view('_templates/header');
                $this->load->view('_templates/sidebar');
                $this->load->view('user/anggota', $data);
                $this->load->view('_templates/footer');
        }
}