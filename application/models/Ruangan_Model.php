<?php
class Ruangan_model extends CI_Model
{
  private $table = "ruangan";
  private $tabeljoin = "gedung";

  public $id = "kode_ruangan";

  public function getAll()
  {
    $this->db->join($this->tabeljoin, $this->table . '.kode_gedung=' . $this->tabeljoin . '.kode_gedung');
    return $this->db->get($this->table)->result_array();
  }

  public function getlantai()
  {
    $this->db->select_max('jml_lantai');
    return $this->db->get($this->tabeljoin)->result_array();
  }

  public function getID($id)
  {
    $this->db->join($this->tabeljoin, $this->table . '.kode_gedung=' . $this->tabeljoin . '.kode_gedung');
    return $this->db->get_where($this->table, [$this->id => $id])->row_array();
  }

  public function simpan()
  {
    $data = [
      'kode_ruangan'  => $this->input->post('kode_ruangan', true),
      'nama_ruangan'  => $this->input->post('nama_ruangan', true),
      'kode_gedung'   => $this->input->post('kode_gedung', true),
      'lantai'        => $this->input->post('lantai', true),
      'status'        => $this->input->post('status', true),
      'keterangan'    => $this->input->post('keterangan', true)
    ];

    $this->db->insert($this->table, $data);
  }

  public function ubah()
  {
    $data = [
      'kode_ruangan'  => $this->input->post('kode_ruangan', true),
      'nama_ruangan'  => $this->input->post('nama_ruangan', true),
      'kode_gedung'   => $this->input->post('kode_gedung', true),
      'lantai'        => $this->input->post('lantai', true),
      'status'        => $this->input->post('status', true),
      'keterangan'    => $this->input->post('keterangan', true),
    ];

    $this->db->where($this->id, $this->input->post('kode_ruangan'));
    $this->db->update($this->table, $data);
  }

  public function hapus($id)
  {
    $this->db->delete($this->table, [$this->id => $id]);
  }
}
