<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row"> 
          <div class="col-lg-12">
            <div class="card card-yellow card-outline">
              <div class="card-header">
                <h5 class="m-0"><?php echo $subtitle; ?></h5>
              </div>

                <?php foreach ($pembayaran->result() as $value): ?>

                  <form class="form-horizontal" method="post" action="<?php echo base_url('pembayaran/update') ?>">
                  <div class="card-body">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Id Pembayaran</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" value="<?php echo $value->id_pembayaran; ?>" disabled>
                            </div>

                            <input type="hidden" class="from-control" name="id_pembayaran" value="<?php echo $value->id_pembayaran; ?>">

                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Id Petugas</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="id_petugas" value="<?php echo $value->id_petugas; ?>" placeholder="id petugas" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">NISN</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nisn" value="<?php echo $value->nisn; ?>" placeholder="nisn" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tanggal Bayar</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="tgl_bayar" value="<?php echo $value->tgl_bayar; ?>" placeholder="tanggal bayar" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Bulan Bayar</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="bulan_bayar" value="<?php echo $value->bulan_bayar; ?>" placeholder="bulan bayar" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tahun Bayar</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="tahun_bayar" value="<?php echo $value->tahun_bayar; ?>" placeholder="tahun bayar" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Id SPP</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="id_spp" value="<?php echo $value->id_spp; ?>" placeholder="id_spp" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jumlah Bayar</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="jumlah_bayar" value="<?php echo $value->jumlah_bayar; ?>" placeholder="jumlah bayar" required>
                            </div>
                        </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-sm btn-default">Reset</button>
                    </div>
                </form>
              <?php endforeach; ?>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>