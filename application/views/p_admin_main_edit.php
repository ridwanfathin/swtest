

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Rank Utama
        <small>Edit Bobot kriteria utama</small>
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
              <form action="<?php echo base_url()."index.php/user/main_edit_action" ?>" method="post">
                        
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
                    <td><input type="number" class="form-control" placeholder="rank" name="<?php echo "c".$c['ID_CRITERIA']; ?>" value="<?php echo $c['RANK']; ?>"></td>
                  </tr>
                  <?php
                  } ?>
                  </tbody>
                </table>
                <button type="submit" class="btn btn-primary btn-flat pull-right" >Save</button>
               </form> 
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

  
