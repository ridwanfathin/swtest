

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Rank Utama
        <small>Bobot kriteria utama</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title">Hasil</h3> -->
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover col-sm-4">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Kriteria</th>
                  <th>Rank</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($criteria as $c) {
              		?>
                <tr>
                  <td><?php echo $c['ID_CRITERIA']; ?></td>
                  <td><?php echo $c['DESCRIPTION']; ?></td>
                  <td><?php echo $c['RANK']; ?></td>
                </tr>
                <?php
                } ?>
                </tbody>
              </table>
              <a href="<?php echo base_url()."index.php/User/main_edit" ?>" class="btn btn-warning btn-flat pull-right">Edit Rank</a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
