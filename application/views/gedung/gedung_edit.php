<!-- Basic Form Start -->
<div class="basic-form-area mg-b-30">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="sparkline12-list shadow-reset mg-t-5">
          <div class="sparkline12-hd">
            <div class="main-sparkline12-hd">
              <h1><?= $judul_content; ?></h1>
              <div class="sparkline12-outline-icon">
                <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
              </div>
            </div>
          </div>
          <div class="sparkline12-graph">
            <div class="basic-login-form-ad">
              <div class="row">
                <div class="col-lg-12">
                  <div class="all-form-element-inner">
                    <form action="" method="POST">
                      <input type="hidden" name="kode_gedung" value="<?= $gedung['kode_gedung']; ?>">
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="login2 pull-right pull-right-pro">Kode Gedung</label>
                          </div>
                          <div class="col-lg-2">
                            <input name="kode_gedung" type="text" autofocus class="form-control" value="<?= $gedung['kode_gedung']; ?>" />
                            <small class="form-text text-danger pull-left"> <?= form_error('kode_gedung'); ?></small>
                          </div>
                        </div>
                      </div>
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="login2 pull-right pull-right-pro">Nama Gedung</label>
                          </div>
                          <div class="col-lg-4">
                            <input name="nama_gedung" type="text" class="form-control" value="<?= $gedung['nama_gedung']; ?>" />
                            <small class="form-text text-danger pull-left"> <?= form_error('nama_gedung'); ?></small>
                          </div>
                        </div>
                      </div>
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="login2 pull-right pull-right-pro">Jumlah Ruangan</label>
                          </div>
                          <div class="col-lg-4">
                            <input name="jml_ruangan" type="number" class="form-control" value="<?= $gedung['jml_ruangan']; ?>" />
                          </div>
                        </div>
                      </div>
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="login2 pull-right pull-right-pro">Jumlah Lantai</label>
                          </div>
                          <div class="col-lg-4">
                            <input name="jml_lantai" type="number" class="form-control" value="<?= $gedung['jml_lantai']; ?>" />
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3">
                      </div>
                      <div class="col-lg-4">
                        <button type="submit" class="btn btn-custon-three btn-primary ">Simpan</button>
                        <a href="<?= base_url(); ?>gedung" type="button" class="btn btn-custon-three btn-danger ">Batal</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Basic Form End-->