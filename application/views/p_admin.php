

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Hasil
        <small>Hasil perhitungan nilai tester</small>
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
              <table id="res" class="table table-bordered table-hover col-sm-4">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Skor</th>
                  <th>Bug Ditemukan</th>
                  <th>Kesalahan Identifikasi Bug</th>
                  <th>Lama Pengerjaan(menit)</th>
                  <th>Pengalaman Kerja(tahun)</th>
                  <th>Training</th>
                  <th>Jenjang Pendidikan</th>
                  <th>File Test</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $no=0;
                  // var_dump($scores); die();
                  foreach ($score as $s) {
                  ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $tester[$no-1]["NAME"]; ?></td>
                  <td><?php echo $score[(int)$tester[$no-1]["ID_TESTER"]]; ?></td>
                  <td><?php echo $scores[(int)$tester[$no-1]["ID_TESTER"]][0]['VALUE']; ?></td>
                  <td><?php echo $scores[(int)$tester[$no-1]["ID_TESTER"]][5]['VALUE']; ?></td>
                  <td><?php echo $scores[(int)$tester[$no-1]["ID_TESTER"]][1]['VALUE']; ?></td>
                  <td><?php echo $scores[(int)$tester[$no-1]["ID_TESTER"]][2]['VALUE']; ?></td>
                  <td><?php echo $scores[(int)$tester[$no-1]["ID_TESTER"]][3]['VALUE']; ?></td>
                  <td><?php echo $scores[(int)$tester[$no-1]["ID_TESTER"]][4]['VALUE']; ?></td>
                  <td><a href="<?php echo $tester[$no-1]["REPORT"]; ?>">Download</a></td>
                </tr>
                <?php
                } ?>
                </tbody>
              </table>
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

  
