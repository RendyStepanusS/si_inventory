<?php
class Kategori_model extends CI_Model
{
  private $table = "kategori";

  public $id = "kode_ruangan";

  public function getAll()
  {
    return $this->db->get($this->table)->result_array();
  }

  public function simpan()
  {
    $data = [
      'kode_kategori' => $this->input->post('kode_kategori', true),
      'nama_kategori' => $this->input->post('nama_kategori', true),
      'deskripsi' => $this->input->post('deskripsi', true),
    ];

    return $this->db->insert($this->table, $data);
  }

  public function getID($id)
  {
    return $this->db->get_where($this->table, ['kode_kategori' => $id])->row_array();
  }

  public function ubah()
  {
    $data = [
      'kode_kategori'  => $this->input->post('kode_kategori', true),
      'nama_kategori'  => $this->input->post('nama_kategori', true),
      'deskripsi'  => $this->input->post('deskripsi', true),
    ];

    $this->db->where('kode_kategori', $this->input->post('kode_kategori'));
    $this->db->update($this->table, $data);
  }

  public function hapus($id)
  {
    $this->db->delete($this->table, ['kode_kategori' => $id]);
  }
}
