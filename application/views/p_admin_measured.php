

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Rank Terukur
        <small>Bobot kriteria terukur</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#bug" data-toggle="tab">Bug Ditemukan</a></li>
              <li><a href="#fault" data-toggle="tab">Kesalahan Identifikasi Bug</a></li>
              <li><a href="#time" data-toggle="tab">Lama Pengerjaan</a></li>
              <li><a href="#work" data-toggle="tab">Pengalaman Kerja</a></li>
              <li><a href="#training" data-toggle="tab">Training</a></li>
              <li><a href="#education" data-toggle="tab">Jenjang Pendidikan</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="bug">
                <table id="bug" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Bug Ditemukan</th>
                      <th>Rank</th>
                      <th>Bobot</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>16 - 20</td>
                      <td>1</td>
                      <td>0.52</td>
                    </tr>
                    <tr>
                      <td>11 - 15</td>
                      <td>2</td>
                      <td>0.27</td>
                    </tr>
                    <tr>
                      <td>6 - 10</td>
                      <td>3</td>
                      <td>0.15</td>
                    </tr>
                    <tr>
                      <td>0 - 5</td>
                      <td>4</td>
                      <td>0.06</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="fault">
              <table id="bug" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Kesalahan Identifikasi Bug</th>
                      <th>Rank</th>
                      <th>Bobot</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>0 - 5</td>
                      <td>1</td>
                      <td>0.52</td>
                    </tr>
                    <tr>
                      <td>6 - 10</td>
                      <td>2</td>
                      <td>0.27</td>
                    </tr>
                    <tr>
                      <td>11 - 15</td>
                      <td>3</td>
                      <td>0.15</td>
                    </tr>
                    <tr>
                      <td>16 - 20</td>
                      <td>4</td>
                      <td>0.06</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="time">
              <table id="bug" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Lama Pengerjaan(menit)</th>
                      <th>Rank</th>
                      <th>Bobot</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>< 30</td>
                      <td>1</td>
                      <td>0.52</td>
                    </tr>
                    <tr>
                      <td>31-60</td>
                      <td>2</td>
                      <td>0.27</td>
                    </tr>
                    <tr>
                      <td>61 - 120</td>
                      <td>3</td>
                      <td>0.15</td>
                    </tr>
                    <tr>
                      <td>> 120</td>
                      <td>4</td>
                      <td>0.06</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="work">
              <table id="bug" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Pengalaman Kerja(Tahun)</th>
                      <th>Rank</th>
                      <th>Bobot</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>> 3</td>
                      <td>1</td>
                      <td>0.61</td>
                    </tr>
                    <tr>
                      <td>2 - 3</td>
                      <td>2</td>
                      <td>0.28</td>
                    </tr>
                    <tr>
                      <td>0 - 1</td>
                      <td>3</td>
                      <td>0.11</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="training">
              <table id="bug" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Training</th>
                      <th>Rank</th>
                      <th>Bobot</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Pernah</td>
                      <td>1</td>
                      <td>0.75</td>
                    </tr>
                    <tr>
                      <td>Tidak Pernah</td>
                      <td>2</td>
                      <td>0.25</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="education">
              <table id="bug" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Jenjang Pendidikan</th>
                      <th>Rank</th>
                      <th>Bobot</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>S2</td>
                      <td>1</td>
                      <td>0.61</td>
                    </tr>
                    <tr>
                      <td>D4/S1</td>
                      <td>2</td>
                      <td>0.28</td>
                    </tr>
                    <tr>
                      <td>D3</td>
                      <td>3</td>
                      <td>0.11</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
