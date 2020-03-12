 <div class="card">
      <div class="card-header">
        <h3 class="card-title">Tambah User</h3>
        <a href="<?=site_url('siswa'); ?>" class="btn btn-primary float-right"><i class="fa fa-user-plus"></i> Kembali</a>
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
                <input type="hidden" name="id">
                  <div class="form-group">
                    <label for="ayah">Nama Ayah Lengkap</label>
                    <input type="text" class="form-control" name="ayah" placeholder="Nama Ayah Lengkap" value="<?= set_value('ayah'); ?>">
                    <?= form_error('ayah'); ?>
                  </div>
                  <div class="form-group">
                    <label for="ibu">Nama ibu Lengkap</label>
                    <input type="text" class="form-control" name="ibu" placeholder="Nama ibu Lengkap" value="<?= set_value('ibu'); ?>">
                    <?= form_error('ibu'); ?>
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                </div>
              </form>
      	</div>
      </div>
      </div>