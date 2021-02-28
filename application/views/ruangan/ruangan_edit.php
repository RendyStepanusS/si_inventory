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
                      <input type="hidden" name="kode_ruangan" value="<?= $ruangan['kode_ruangan']; ?>">
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="login2 pull-right pull-right-pro">Kode Ruangan</label>
                          </div>
                          <div class="col-lg-2">
                            <input value="<?= $ruangan['kode_ruangan']; ?>" name="kode_ruangan" type="text" autofocus class="form-control" />
                            <small class="form-text text-danger pull-left"> <?= form_error('kode_ruangan'); ?></small>
                          </div>
                        </div>
                      </div>
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="login2 pull-right pull-right-pro">Nama Ruangan</label>
                          </div>
                          <div class="col-lg-4">
                            <input value="<?= $ruangan['nama_ruangan']; ?>" name="nama_ruangan" type="text" class="form-control" />
                            <small class="form-text text-danger pull-left"> <?= form_error('nama_ruangan'); ?></small>
                          </div>
                        </div>
                      </div>

                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="login2 pull-right pull-right-pro">Gedung</label>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-select-list">
                              <select class="form-control custom-select-value" name="kode_gedung">
                                <option><?= $ruangan['kode_gedung']; ?></option>
                                <option>-- Pilih Gedung --</option>
                                <?php foreach ($gedung as $g) : ?>
                                  <option value="<?= $g['kode_gedung']; ?>"><?= $g['nama_gedung']; ?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="login2 pull-right pull-right-pro">Lantai</label>
                          </div>
                          <div class="col-lg-4">

                            <select class="form-control custom-select-value" name="lantai">
                              <option>Lantai <?= $g['jml_lantai']; ?></option>
                              <option>-- Pilih Lantai --</option>
                              <?php foreach ($getlantai as $g) : ?>
                                <?php $lantai = $g['jml_lantai']; ?>

                                <?php for ($i = 1; $i <= $lantai; $i++) {
                                  echo "<option value='$i'> Lantai
                                    $i
                                </option>";
                                } ?>

                              <?php endforeach; ?>
                            </select>

                          </div>
                        </div>
                      </div>
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="login2 pull-right pull-right-pro">Status</label>
                          </div>
                          <div class="col-lg-4">
                            <select class="form-control custom-select-value" name="status">
                              <option value="<?= $ruangan['status']; ?>">
                                <?php if ($ruangan['status'] == 1) {
                                  echo 'Digunakan';
                                } else {
                                  echo 'Tidak Digunakan';
                                } ?>
                              </option>
                              <option>-- Pilih Status --</option>
                              <option value="1"> Digunakan</option>
                              <option value="0"> Tidak Digunakan</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="login2 pull-right pull-right-pro">Keterangan</label>
                          </div>
                          <div class="col-lg-4">
                            <input value="<?= $ruangan['keterangan']; ?>" name="keterangan" type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3">
                      </div>
                      <div class="col-lg-4">
                        <button type="submit" class="btn btn-custon-three btn-primary ">Simpan</button>
                        <a href="<?= base_url(); ?>ruangan" type="button" class="btn btn-custon-three btn-danger ">Batal</a>
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