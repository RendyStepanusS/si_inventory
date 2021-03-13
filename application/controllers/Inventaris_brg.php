<?php
class Inventaris_brg extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Inventarisbrg_model', 'm_brg');
    $this->load->model('Ruangan_model', 'm_ruangan');
  }

  public function index()
  {
    $data['send_data']['title_web'] = "SI.Inventarisasi";
    $data['send_data']['judul_content'] = "Data Inventaris Barang";
    $data['send_data']['breadcumb1'] = 'Inventaris';
    $data['send_data']['breadcumb2'] = 'Data Inventaris Barang';

    $data['inventaris'] = $this->m_brg->getAll();

    $this->load->view('template/tamplate', $data);
    $this->load->view('inventaris_brg/index', $data);
    $this->load->view('template/footer');
  }

  public function tambahData()
  {
    $data['send_data']['title_web'] = "SI.Inventarisasi";
    $data['send_data']['judul_content'] = "Tambah Data Inventaris";
    $data['send_data']['breadcumb1'] = 'Data Master';
    $data['send_data']['breadcumb2'] = 'Tambah Data Inventaris';

    $data['ruangan'] = $this->m_ruangan->getAll();

    $this->form_validation->set_rules('kode_ruangan', 'Kode Ruangan', 'required');
    $this->form_validation->set_rules('nama_ruangan', 'Nama Ruangan', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('template/tamplate', $data);
      $this->load->view('inventaris_brg/inventaris_tambah', $data);
      $this->load->view('template/footer');
    } else {
      $this->m_brg->simpan();
      $this->session->set_flashdata('pesan', 'Data berhasil ditambahkan!');
      redirect('invetaris/index');
    }
  }
}
