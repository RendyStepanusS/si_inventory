<?php
class Inventarisbrg_model extends CI_Model
{
  private $table = "inventaris_barang";
  private $tabeljoin1 = "ruangan";
  private $tabeljoin2 = "kategori";

  public $id = "kode_inventaris";

  public function getAll()
  {
    $this->db->join($this->tabeljoin1, $this->table . '.kode_ruangan=' . $this->tabeljoin1 . '.kode_ruangan');
    $this->db->join($this->tabeljoin2, $this->table . '.kode_kategori=' . $this->tabeljoin2 . '.kode_kategori');
    return $this->db->get($this->table)->result_array();
  }
}
