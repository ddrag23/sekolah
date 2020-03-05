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
  						<div class="alert alert-success" role="alert"><?php echo $this->session->flashdata('sukses'); ?></div>
  			        <?php endif; ?>
  			        <!-- end pesan validasi -->
                <input type="hidden" name="id" value="<?= $query->id; ?>">
                  <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?= $this->input->post('nama') ?? $query->nama; ?>">
                    <?= form_error('nama'); ?>
                  </div>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username" value="<?= $this->input->post('username') ?? $query->username; ?>">
                    <?= form_error('username'); ?>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label><small>(Biarkan kosong jika tidak diganti)</small>
                    <input type="password" class="form-control" name="password" placeholder="Password" value="<?= $this->input->post('password'); ?>">
                    <?= form_error('password'); ?>
                  </div>
                  <div class="form-group">
                    <label for="passconf">Konfirmasi password</label>
                    <input type="password" class="form-control" name="passconf" placeholder="Password" value="<?= $this->input->post('passconf'); ?>">
                    <?= form_error('passconf'); ?>
                  </div>
                  <div class="form-group">
                    <label for="nikp">Nip</label>
                    <input type="text" class="form-control" name="nmr_induk" placeholder="Nik" value="<?= $this->input->post('nmr_induk') ?? $query->nmr_induk; ?>">
                    <?= form_error('nik'); ?>
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
                  	<label for="level">Level User</label>
                  	<select name="level" class="form-control">
                      <?php $level = $this->input->post('level') ? $this->input->post('level') : $query->level; ?>
                  		<option value="admin " <?= $level == 'admin' ? "selected" : null; ?>>Admin</option>
                  		<option value="guru" <?= $level == 'guru' ? "selected" : null; ?>>Guru</option>
                  	</select>
                    <?= form_error('level'); ?>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
      	</div>
      </div>
      </div>