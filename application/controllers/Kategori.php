<?php
class Kategori extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Kategori_model', 'm_kategori');
  }

  public function index()
  {
    $data['send_data']['title_web'] = "SI.Inventarisasi";
    $data['send_data']['judul_content'] = "Data Kategori Barang";
    $data['send_data']['breadcumb1'] = 'Data Master';
    $data['send_data']['breadcumb2'] = 'Data Kategori Barang';

    $data['kategori'] = $this->m_kategori->getAll();

    $this->load->view('template/tamplate', $data);
    $this->load->view('kategori/index', $data);
    $this->load->view('template/footer');
  }

  public function tambahData()
  {
    $data['send_data']['title_web'] = "SI.Inventarisasi";
    $data['send_data']['judul_content'] = "Tambah Kategori Barang";
    $data['send_data']['breadcumb1'] = 'Data Master';
    $data['send_data']['breadcumb2'] = 'Tambah Kategori Barang';

    $this->form_validation->set_rules('kode_kategori', 'Kode Kategori', 'required');
    $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('template/tamplate', $data);
      $this->load->view('kategori/kategori_tambah', $data);
      $this->load->view('template/footer');
    } else {
      $this->m_kategori->simpan();
      $this->session->set_flashdata('pesan', 'Data berhasil ditambahkan!');
      redirect('kategori');
    }
  }

  public function editData($id)
  {
    $data['send_data']['title_web'] = "SI.Inventarisasi";
    $data['send_data']['judul_content'] = "Ubah Data Kategori";
    $data['send_data']['breadcumb1'] = 'Data Master';
    $data['send_data']['breadcumb2'] = 'Ubah Data Kategori';

    $data['kategori'] = $this->m_kategori->getID($id);

    $this->form_validation->set_rules('kode_kategori', 'Kode Kategori', 'required');
    $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('template/tamplate', $data);
      $this->load->view('kategori/kategori_edit', $data);
      $this->load->view('template/footer');
    } else {
      $this->m_kategori->ubah();
      $this->session->set_flashdata('pesan', 'Data berhasil diubah!');
      redirect('kategori');
    }
  }

  public function hapusData($id)
  {
    $this->m_kategori->hapus($id);
    $this->session->set_flashdata('pesan', 'Data Berhasil dihapus!');
    redirect('kategori');
  }
}
