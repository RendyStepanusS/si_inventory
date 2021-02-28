<?php
class Ruangan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Ruangan_model', 'm_ruangan');
    $this->load->model('Gedung_model', 'm_gedung');
  }

  public function index()
  {
    $data['send_data']['title_web'] = "SI.Inventarisasi";
    $data['send_data']['judul_content'] = "Data Ruangan";
    $data['send_data']['breadcumb1'] = 'Data Master';
    $data['send_data']['breadcumb2'] = 'Data Ruangan';

    $data['ruangan'] = $this->m_ruangan->getAll();

    $this->load->view('template/tamplate', $data);
    $this->load->view('ruangan/index', $data);
    $this->load->view('template/footer');
  }

  public function tambahData()
  {
    $data['send_data']['title_web'] = "SI.Inventarisasi";
    $data['send_data']['judul_content'] = "Tambah Data Ruangan";
    $data['send_data']['breadcumb1'] = 'Data Master';
    $data['send_data']['breadcumb2'] = 'Tambah Data Ruangan';

    $data['gedung'] = $this->m_gedung->getAll();
    $data['getlantai'] = $this->m_ruangan->getlantai();

    $this->form_validation->set_rules('kode_ruangan', 'Kode Ruangan', 'required');
    $this->form_validation->set_rules('nama_ruangan', 'Nama Ruangan', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('template/tamplate', $data);
      $this->load->view('ruangan/ruangan_tambah', $data);
      $this->load->view('template/footer');
    } else {
      $this->m_ruangan->simpan();
      $this->session->set_flashdata('pesan', 'Data berhasil ditambahkan!');
      redirect('ruangan');
    }
  }

  public function editData($id)
  {
    $data['send_data']['title_web'] = "SI.Inventarisasi";
    $data['send_data']['judul_content'] = "Ubah Data Ruangan";
    $data['send_data']['breadcumb1'] = 'Data Master';
    $data['send_data']['breadcumb2'] = 'Ubah Data Ruangan';

    $data['ruangan'] = $this->m_ruangan->getID($id);
    $data['gedung'] = $this->m_gedung->getAll();
    $data['getlantai'] = $this->m_ruangan->getlantai();

    $this->form_validation->set_rules('kode_ruangan', 'Kode ruangan', 'required');
    $this->form_validation->set_rules('nama_ruangan', 'Nama ruangan', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('template/tamplate', $data);
      $this->load->view('ruangan/ruangan_edit', $data);
      $this->load->view('template/footer');
    } else {
      $this->m_ruangan->ubah();
      $this->session->set_flashdata('pesan', 'Data berhasil diubah!');
      redirect('ruangan');
    }
  }

  public function hapusData($id)
  {
    $this->m_ruangan->hapus($id);
    $this->session->set_flashdata('pesan', 'Data Berhasil dihapus!');
    redirect('ruangan');
  }
}
