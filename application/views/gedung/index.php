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

                <a href="<?= base_url(); ?>gedung/tambahData" class="btn btn-primary btn-sm"><i class="fa fa-plus-square"></i> Tambah Data Gedung</a>
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
                    <th>Kode Gedung</th>
                    <th>Nama Gedung</th>
                    <th>Jumlah Ruangan</th>
                    <th>Jumlah Lantai</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($gedung as $g) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $g['kode_gedung']; ?></td>
                      <td><?= $g['nama_gedung']; ?></td>
                      <td><?= $g['jml_ruangan']; ?></td>
                      <td><?= $g['jml_lantai']; ?></td>
                      <td>
                        <a href="<?= base_url(); ?>gedung/editData/<?= $g['kode_gedung']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                        <a href="<?= base_url(); ?>gedung/hapusData/<?= $g['kode_gedung']; ?>" id="btn-hapus" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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