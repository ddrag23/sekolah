<?php
include "header.php";
include "navbar.php";
?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark"><?= $page;?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= site_url('dashboard');?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><?= $page?></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      
            <section class="content">
            <div class="container-fluid">
                <?php
                if (!empty($src)) {
                    include "application/views/" . $src . ".php";
                }
                ?>
                </div>
            </section>
              </div>
<?php
include "footer.php";
?>