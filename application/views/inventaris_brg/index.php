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

                <a href="<?= base_url(); ?>inventaris_brg/tambahData" class="btn btn-primary btn-sm"><i class="fa fa-plus-square"></i> Tambah Data</a>
              </div>
            </div>
          </div>
          <div class="sparkline13-graph">
            <div class="datatable-dashv1-list custom-datatable-overright">
              <!-- <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
              <?php if ($this->session->flashdata('pesan')) : ?>
              <?php endif; ?> -->

              <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="false" data-show-pagination-switch="true" data-show-refresh="false" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Ruangan</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Keterangan</th>
                    <th>Qty</th>
                    <th>Kondisi</th>
                    <th>Asal Barang</th>
                    <th>Tgl. Pembukuan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($inventaris as $in) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $in['kode_inventaris']; ?></td>
                      <td><?= $in['nama_ruangan']; ?></td>
                      <td><?= $in['nama_brg']; ?></td>
                      <td><?= $in['nama_kategori']; ?></td>
                      <td><?= $in['ket']; ?></td>
                      <td><?= $in['jml_brg']; ?></td>
                      <td><?= $in['kondisi']; ?></td>
                      <td><?= $in['asal_brg']; ?></td>
                      <td><?= $in['tgl_pembukuan']; ?></td>
                      <td>
                        <a href="<?= base_url(); ?>ruangan/detailData/<?= $in['kode_ruangan']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-info-circle"></i></a>
                        <a href="<?= base_url(); ?>ruangan/editData/<?= $in['kode_ruangan']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                        <a href="<?= base_url(); ?>ruangan/hapusData/<?= $in['kode_ruangan']; ?>" id="btn-hapus" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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