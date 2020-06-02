<h1>Ini Halaman Dashboard User</h1>


<?php echo $this->session->flashdata('pesan'); ?>


<!-- Small boxes (Stat box) -->
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
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>

        <br>

       

          <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Center Access Form Request</h1>
            <!-- <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Forms</a></div>
              <div class="breadcrumb-item">Data Center Access Form</div>
            </div> -->
          </div>
          <br>

          <div class="section-body">
            <!-- <h2 class="section-title">Data Center Access Form</h2> -->
            <?php foreach ($tbl_ijin as $ij) : ?>

             <form method="post" action="<?php echo base_url('user/adm/approved_aksi') ?>">
            <div class="row">
              <div class="col-6">
                <div class="card">
                  <!-- <div class="card-header">
                    <h4>Input Text</h4>
                  </div> -->
                  <div class="card-body">
                    <div class="form-group">
                      <label required>Lokasi Data Center</label>
                       <input type="hidden" name="id_ijin" value="<?php echo $ij->id_ijin ?>">
                      <select class="form-control" name="lokasi" required>
                        <option value="<?php echo $ij->lokasi ?>"><?php echo $ij->lokasi ?></option>
                        <option value="jakarta" required>Data Center Jakarta</option>
                        <option value="surabaya" required>Data Center Surabaya</option >                   
                        </select>
                        
                      <!-- <input name="lokasi" type="text" class="form-control"> -->
                    </div>

                    <div class="form-group">
                      <label>Name / Department Or Company/Identity (KTP/SIM/Passport)</label><br>
                      
                      <input name="nama_tamu" type="textarea" class="form-control" value="<?php echo $ij->nama_tamu ?>">
                    </div>

                    <div class="form-group">
                      <label>Purpose</label>
                      <input name="purpose" type="text" class="form-control" value="<?php echo $ij->purpose ?>">
                    </div>

                     <div class="form-group">
                      <label>Date</label>
                      <input name="tanggal" type="date" class="form-control datemask" placeholder="YYYY/MM/DD" value="<?php echo $ij->tanggal ?>">
                    </div>


                    <!-- <div class="card-header"> -->
                    
 
                    </div>
                  </div>
                </div>   
                <div class="col-6">
                <div class="card">
                  <div class="card-body">
                <!-- <h6>Plan to Enter Data Center</h6> -->
                     <!-- </div> -->
                     

                     
                    <div class="form-group">
                      <h6>Time</h6>
                      <div class="row">
                        <div class="col">
                             <label>Enter Time</label>
                      <input name="in" type="time" class="form-control datemask" placeholder="YYYY/MM/DD" value="<?php echo $ij->in ?>">
                            </div>
                            <div class="col">
                              <label>Exit Time</label>
                      <input name="out" type="time" class="form-control datemask" placeholder="YYYY/MM/DD" value="<?php echo $ij->out ?>">
                            </div>
                      </div>  
                      
                    </div>

                    <div class="form-group">
                      <label>Belongings</label>
                      <input name="belongings" type="text" class="form-control" value="<?php echo $ij->belongings ?>">
                    </div>

                    <div class="form-group">
                      <label>Remarks</label>
                      <input name="remark" type="text" class="form-control" value="<?php echo $ij->remark ?>">
                    </div>
                    <br>
                   

                    <button type="submit" class="btn btn-sm btn-primary">Approved</button>
                    <button type="reset" class="btn btn-sm btn-danger">Reset</button>

                </div>
                </div>
              </div>     
              </div>

              
                
                
              </div>
            </div>
          </form>
        <?php endforeach ; ?>
          </div>
        </section>
       </div>

          
