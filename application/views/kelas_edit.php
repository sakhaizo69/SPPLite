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

                <?php foreach ($kelas->result() as $value): ?>

                  <form class="form-horizontal" method="post" action="<?php echo base_url('kelas/update') ?>">
                  <div class="card-body">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Id Kelas</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="id_kelas" value="<?php echo $value->id_kelas; ?>" placeholder="id kelas" required>
                            </div>

                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Kelas</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama_kelas" value="<?php echo $value->nama_kelas; ?>" placeholder="nama kelas" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Kompetensi Keahlian</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="kompetensi_keahlian" value="<?php echo $value->kompetensi_keahlian; ?>" placeholder="kompetensi keahlian" required>
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