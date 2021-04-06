 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $title; ?></h1>
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
            <div class="card card-primary card-yellow">
              <div class="card-header">
                <h5 class="m-1"><?php echo $title; ?></h5>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id Kelas</th>
                            <th>Nama Kelas</th>
                            <th>Kompetensi Keahlian</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=0;
                        foreach ($kelas->result() as $value):
                            $no++;
                        ?> 
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $value->id_kelas; ?></td>
                            <td><?php echo $value->nama_kelas; ?></td>
                            <td><?php echo $value->kompetensi_keahlian; ?></td>
                            <td>
                            <a href="<?php echo base_url('kelas/edit/').$value->id_kelas ?>"class="btn btn-xs btn-info">Edit</a>
                            <a href="<?php echo base_url('kelas/hapus/').$value->id_kelas ?>"class="btn btn-xs btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php
                        endforeach;
                        ?>
                        </tbody>
                        <tfoot>
                    <tr>
                            <th>No</th>
                            <th>Id Kelas</th>
                            <th>Nama Kelas</th>
                            <th>Kompetensi Keahlian</th>
                            <th>Opsi</th>
                    </tr>
                  </tfoot>
                  </table> 
        </div>

         <div class="card-footer clearfix">
                <a href="<?php echo base_url('kelas/tambah') ?>" class="btn btn-xs btn-secondary">Tambah Data</a><ol class="float-sm-right"><a href="<?php echo base_url('kelas_laporan') ?>" class="btn btn-xs btn-light"><i class="fa fa-flag" aria-hidden="true"></i>&nbsp;&nbsp;Cetak Laporan</a>
              </ol>
              </div>
            <!-- /.row -->
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>