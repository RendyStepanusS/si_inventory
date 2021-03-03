<!-- Static Table Start -->
<div id="flash" data-flash="<?= $this->session->flashdata('pesan'); ?>"></div>
<div class="data-table-area mg-b-15">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="sparkline13-list shadow-reset">
          <div class="sparkline13-hd">
            <div class="main-sparkline13-hd">
              <h1><?= $judul_content; ?></h1>
              <div class="sparkline13-outline-icon">

                <a href="<?= base_url('kategori/tambahData'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus-square"></i> Tambah Kategori Barang</a>
              </div>
            </div>
          </div>
          <div class="sparkline13-graph">
            <div class="datatable-dashv1-list custom-datatable-overright">
              <?php if ($this->session->flashdata('pesan')) : ?>
              <?php endif; ?>

              <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="false" data-show-pagination-switch="true" data-show-refresh="false" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Kategori Barang</th>
                    <th>Nama Kategori Barang</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($kategori as $k) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $k['kode_kategori']; ?></td>
                      <td><?= $k['nama_kategori']; ?></td>
                      <td><?= $k['deskripsi']; ?></td>
                      <td>
                        <a href="<?= base_url('kategori/editData/'); ?><?= $k['kode_kategori']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                        <a href="<?= base_url('kategori/hapusData/'); ?><?= $k['kode_kategori']; ?>" id="btn-hapus" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Static Table End -->