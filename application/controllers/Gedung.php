<?php
class Gedung extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Gedung_model', 'm_gedung');
  }

  public function index()
  {
    $data['send_data']['title_web'] = "SI.Inventarisasi";
    $data['send_data']['judul_content'] = "Data Gedung";
    $data['send_data']['breadcumb1'] = 'Data Master';
    $data['send_data']['breadcumb2'] = 'Data Gedung';

    $data['gedung'] = $this->m_gedung->getAll();

    $this->load->view('template/tamplate', $data);
    $this->load->view('gedung/index', $data);
    $this->load->view('template/footer');
  }

  public function tambahData()
  {
    $data['send_data']['title_web'] = "SI.Inventarisasi";
    $data['send_data']['judul_content'] = "Tambah Data Gedung";
    $data['send_data']['breadcumb1'] = 'Data Master';
    $data['send_data']['breadcumb2'] = 'Tambah Data Gedung';

    $this->form_validation->set_rules('kode_gedung', 'Kode Gedung', 'required');
    $this->form_validation->set_rules('nama_gedung', 'Nama Gedung', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('template/tamplate', $data);
      $this->load->view('gedung/gedung_tambah', $data);
      $this->load->view('template/footer');
    } else {
      $this->m_gedung->simpan();
      $this->session->set_flashdata('pesan', 'Data berhasil ditambahkan!');
      redirect('gedung');
    }
  }

  public function editData($id)
  {
    $data['send_data']['title_web'] = "SI.Inventarisasi";
    $data['send_data']['judul_content'] = "Ubah Data Gedung";
    $data['send_data']['breadcumb1'] = 'Data Master';
    $data['send_data']['breadcumb2'] = 'Ubah Data Gedung';

    $data['gedung'] = $this->m_gedung->getID($id);

    $this->form_validation->set_rules('kode_gedung', 'Kode Gedung', 'required');
    $this->form_validation->set_rules('nama_gedung', 'Nama Gedung', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('template/tamplate', $data);
      $this->load->view('gedung/gedung_edit', $data);
      $this->load->view('template/footer');
    } else {
      $this->m_gedung->ubah();
      $this->session->set_flashdata('pesan', 'Data berhasil diubah!');
      redirect('gedung');
    }
  }

  public function hapusData($id)
  {
    $this->m_gedung->hapus($id);
    $this->session->set_flashdata('pesan', 'Data Berhasil dihapus!');
    redirect('gedung');
  }
}
