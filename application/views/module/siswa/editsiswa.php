 <div class="card">
      <div class="card-header">
        <h3 class="card-title">Tambah User</h3>
        <a href="<?=site_url('user'); ?>" class="btn btn-primary float-right"><i class="fa fa-user-plus"></i> Kembali</a>
      </div>
      <div class="row">
      	<div class="col-md-12">
      		<form role="form" method="post" action="">
                <div class="card-body">
                	<!-- pesan validasi -->
  					<?php if($this->session->flashdata('sukses')): ?>
  						<div class="alert alert-success" role="alert"><?php echo $this->session->flashdata('sukses');; ?></div>
  			        <?php endif; ?>
  			        <!-- end pesan validasi -->
                <input type="hidden" name="id" value="<?= $query->id; ?>">
                  <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?= $this->input->post('nama') ?? $query->nama; ?>">
                    <?= form_error('nama'); ?>
                  </div>
                  <div class="form-group">
                    <label for="nama">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username" value="<?= $this->input->post('username') ?? $query->username; ?>">
                    <?= form_error('username'); ?>
                  </div>
                  <div class="form-group">
                    <label for="nis">Nis</label>
                    <input type="text" class="form-control" name="nmr_induk" placeholder="Nis" value="<?= $this->input->post('nmr_induk') ?? $query->nmr_induk; ?>">
                    <?= form_error('nmr_induk'); ?>
                  </div>
                  <div class="form-group">
                    <label for="pass">Paswword</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" value="">
                    <?= form_error('password'); ?>
                  </div>
                  <div class="form-group">
                    <label for="nis">Nis</label>
                    <input type="password" class="form-control" name="passconf" placeholder="Konfirmasi Password" value="">
                    <?= form_error('password'); ?>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" class="form-control" cols="30" rows="5"><?= $this->input->post('username') ?? $query->alamat;  ?></textarea>
                    <?= form_error('alamat'); ?>
                  </div>
                  <div class="form-group">
                    <label for="nomor">Nomor Telepon</label>
                    <input type="text" class="form-control" name="nomor" placeholder="Nomor Telepon" value="<?= $this->input->post('nomor') ?? $query->nmr_telp; ?>">
                    <?= form_error('nomor'); ?>
                  </div>
                  <div class="form-group">
                  	<label for="gender">Jenis Kelamin</label>
                  	<select name="gender" class="form-control">
                      <?php $gender = $this->input->post('gender') ? $this->input->post('gender') : $query->gender; ?>
                  		<option value="L" <?= $gender == 'L' ? "selected" : null; ?>>Laki-laki</option>
                  		<option value="P" <?= $gender == 'P' ? "selected" : null; ?>>Perempuan</option>
                  	</select>
                    <?= form_error('gender'); ?>
                  </div>
                  <div class="form-group">
                    <label for="gender">Kelas</label>
                    <select name="kelas" class="form-control">
                      <?php $kelas = $this->input->post('kelas') ? $this->input->post('kelas') : $query->kelas_id; ?>
                      <option value="1 " <?= $kelas == '1' ? "selected" : null; ?>>1A</option>
                      <option value="2" <?= $kelas == '2' ? "selected" : null; ?>>1B</option>
                      <option value="3 " <?= $kelas == '3' ? "selected" : null; ?>>2A</option>
                      <option value="4" <?= $kelas == '4' ? "selected" : null; ?>>2B</option>
                    </select>
                    <?= form_error('kelas'); ?>
                  </div>
                  <div class="form-group">
                    <label for="status">Status Siswa</label>
                    <select name="status" class="form-control">
                      <?php $status = $this->input->post('status') ? $this->input->post('status') : $query->status_id; ?>
                      <option value="1 " <?= $status == '1' ? "selected" : null; ?>>Aktif</option>
                      <option value="2" <?= $status == '2' ? "selected" : null; ?>>Mutasi</option>
                      <option value="3" <?= $status == '3' ? "selected" : null; ?>>Alumni</option>
                    </select>
                    <?= form_error('status'); ?>
                  </div>
<!--                    <div class="form-group">
                    <label for="nama_ayah">Nama Ayah</label>
                    <input type="text" class="form-control" name="ayah" placeholder="Nama Ayah" value="<?= $this->input->post('ayah') ?? $query->nama_ayah; ?>">
                    <?= form_error('ayah'); ?>
                  </div>
                   <div class="form-group">
                    <label for="nama_ibu">Nama Ibu</label>
                    <input type="text" class="form-control" name="ibu" placeholder="Nama Ibu" value="<?= $this->input->post('ibu') ?? $query->nama_ibu; ?>">
                    <?= form_error('ibu'); ?>
                  </div>
                   <div class="form-group">
                    <label for="pekerjaan_ayah">pekerjaan Ayah</label>
                    <input type="text" class="form-control" name="kerja_ayah" placeholder="pekerjaan Ayah" value="<?= $this->input->post('kerja_ayah') ?? $query->pekerjaan_ayah; ?>">
                    <?= form_error('kerja_ayah'); ?>
                  </div>
                   <div class="form-group">
                    <label for="pekerjaan_ibu">pekerjaan Ibu</label>
                    <input type="text" class="form-control" name="kerja_ibu" placeholder="pekerjaan Ibu" value="<?= $this->input->post('kerja_ibu') ?? $query->pekerjaan_ibu; ?>">
                    <?= form_error('kerja_ibu'); ?>
                  </div> -->
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
      	</div>
      </div>
      </div>