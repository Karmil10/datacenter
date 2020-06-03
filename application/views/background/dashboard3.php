
<!-- <?php include('data-index.php') ?> -->

<style>
.center {
  padding: 70px 0;
  border: 3px solid green;
  text-align: center;
}
</style>

  <h1 class="alert-heading"></h1>
  <!-- <div class="text-info text-center"> -->
  <p><h1 class="text-info text-center"><strong>DATA CENTER ACCESS LOG SYSTEM BANK ICBC INDONESIA</h1></strong></p>
  <hr>
  <br>
  <!-- Small boxes (Stat box) -->
<div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">PENGUNJUNG HARI INI</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$s?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">KARYAWAN ICBC</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$r?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">VENDOR</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?=$z?></div>
                        </div>
                        <div class="col">
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1 ">PENGUNJUNG BULAN INI</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$w?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </h2>
      </p>
      <br></br>
      <br></br>
      <br><h4 class="text-info text-center text-danger" ><strong><?php echo $this->session->flashdata('message');?></h4></strong></p></br>
      <br></br>
      <p><h4 class="text-info text-center"><strong>Tekan Tombol DI Bawah Ini untuk Masuk</h4></strong></p>
      <br>
      <br>

      <div class="row">
<div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase text-center mb-1" >
                        <a href="<?php echo base_url()."tamu2/view_tamu"; ?>"><h1 class="text-danger">ICBC</h1></a>
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                 
                </div>
              </div>
</div>

            <!-- Earnings (Monthly) Card Example -->
<div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase text-center mb-1">
                        <a href="<?php echo base_url()."tamu2/view_tamu1"; ?>"><h1 class="text-success">Non ICBC</h1></a>
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                
                </div>
              </div>
</div>
</div>


