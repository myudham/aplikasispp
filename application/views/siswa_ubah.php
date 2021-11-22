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
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0"><?php echo $subtitle; ?></h5>
              </div>
              <?php foreach ($siswa->result() as $value): ?>
              <form class="form-horizontal" method="post" action="<?php echo base_url('siswa/update') ?>">
                <div class="card-body">                
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">ID Spp</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="ID Spp" placeholder="ID Spp" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">ID Kelas</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="ID Kelas" placeholder="ID Kelas" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">NISN</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="NISN" placeholder="NISN" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">NIS</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="NIS" placeholder="NIS" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nama Siswa</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="Nama Siswa" placeholder="Nama Siswa" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Kelas</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="Kelas" placeholder="Kelas" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Alamat</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="Alamat" placeholder="Alamat" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nomor Telepon</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="Nomor Telepon" placeholder="Nomor Telepon" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Level</label>
                      <div class="col-sm-4">
                        <select class="form-control" style="width: 100%;" name="level" required>
                          <option value="0" selected>- Pilih -</option>
                          <option value="1">petugas</option>
                          <option value="2">Siswa</option>
                        </select>
                      </div>
                    </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-sm btn-default">Reset</button>
                </div>
              </form>
              <?php endforeach; ?>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
