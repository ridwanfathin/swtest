

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
                <h5 class="text-center"> Alternatif Tester Terbaik </h5>
                <h3 class="text-center"><?php echo $result[0]->NAME; ?></h3>
                <h5 class="text-center">Skor: <?php echo $result[0]->score; ?></h5>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <table id="res" class="table table-bordered table-hover col-sm-4">
                <thead>
                <tr>
                  <th>Rank</th>
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
                  // var_dump($result); die();
                  foreach ($result as $s) {
                  ?>
                <tr>
                  <td><?php echo ++$no; ?></td>
                  <td><?php echo $s->NAME;?></td>
                  <td><?php echo $s->score;?></td>
                  <td><?php echo $s->jumlah_bug_ditemukan;?></td>
                  <td><?php echo $s->kesalahan_identifikasi_bug;?></td>
                  <td><?php echo $s->lama_pengerjaan;?></td>
                  <td><?php echo $s->pengalaman_kerja;?></td>
                  <td><?php if($s->training)
                                echo "Pernah";
                            else 
                                echo "Tidak Pernah";
                      ;?></td>
                  <td><?php echo $s->jenjang_pendidikan;?></td>
                  <td><a href="<?php echo $s->REPORT; ?>">Download</a></td>
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

  
