<?php
class Gedung_model extends CI_Model
{
  private $table = "gedung";

  public function getAll()
  {
    return $this->db->get($this->table)->result_array();
  }

  public function getID($id)
  {
    return $this->db->get_where($this->table, ['kode_gedung' => $id])->row_array();
  }


  public function simpan()
  {
    $data = [
      'kode_gedung' => $this->input->post('kode_gedung', true),
      'nama_gedung' => $this->input->post('nama_gedung', true),
      'jml_ruangan' => $this->input->post('jml_ruangan', true),
      'jml_lantai'  => $this->input->post('jml_lantai', true)
    ];

    return $this->db->insert($this->table, $data);
  }

  public function ubah()
  {
    $data = [
      'kode_gedung'  => $this->input->post('kode_gedung', true),
      'nama_gedung'  => $this->input->post('nama_gedung', true),
      'jml_ruangan'  => $this->input->post('jml_ruangan', true),
      'jml_lantai'   => $this->input->post('jml_lantai', true),
    ];

    $this->db->where('kode_gedung', $this->input->post('kode_gedung'));
    $this->db->update($this->table, $data);
  }

  public function hapus($id)
  {
    $this->db->delete($this->table, ['kode_gedung' => $id]);
  }
}
