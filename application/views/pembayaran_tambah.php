<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-10">TRANSAKSI PEMBAYARAN</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title; ?></li>
            </ol>
          </div><!-- /.col -->
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
                  <form class="form-horizontal" method="post" action="<?php echo base_url('pembayaran/simpan') ?>">
                  <div class="card-body">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Id Pembayaran</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="id_pembayaran" placeholder="id pembayaran" required>
                            </div>
                          </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Id Petugas</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="id_petugas" placeholder="id petugas" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Nisn</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="nisn" placeholder="nisn" required>
                            </div>
                          </div>
                          <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Tanggal Bayar</label>
                            <div class="col-sm-8">
                              <input type="date" class="form-control" name="tgl_bayar" placeholder="tanggal bayar" required>
                            </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Bulan Bayar</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="bulan_bayar" placeholder="bulan bayar" required>
                            </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Tahun Bayar</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="tahun_bayar" placeholder="tahun bayar" required>
                            </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Id SPP</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="id_spp" placeholder="id spp" required>
                            </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Jumlah Bayar</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="jumlah_bayar" placeholder="jumlah bayar" required>
                            </div>
                        </div>                      
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-sm btn-default">Reset</button>
                    </div>
                     </div>
                </form>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>