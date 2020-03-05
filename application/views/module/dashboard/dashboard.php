<?php if($this->session->flashdata('sukses')): ?>
    <div class="alert alert-success" role="alert"><?php echo $this->session->flashdata('sukses');; ?></div>
<?php endif; ?>
<div class="row">
    <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>

                  <p>New Orders</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
</div>  