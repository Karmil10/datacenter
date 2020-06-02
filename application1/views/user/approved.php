<!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Approved</h1>
            <!-- <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Forms</a></div>
              <div class="breadcrumb-item">Data Center Access Form</div>
            </div> -->
          </div>
          <br>

          <div class="section-body">
            <!-- <h2 class="section-title">Data Center Access Form</h2> -->
            
             <form method="post" action="<?php echo base_url('user/user/input_data') ?>">
            <div class="row">
              <div class="col-6">
                <div class="card">
                  <!-- <div class="card-header">
                    <h4>Input Text</h4>
                  </div> -->
                  <div class="card-body">
                    <div class="form-group">
                      <label>Lokasi Data Center</label>
                      <select class="form-control" name="lokasi">
                        <option>--Pilih Lokasi--</option>
                        <option value="jakarta">Data Center Jakarta</option>
                        <option value="surabaya">Data Center Surabaya</option>                   </select>
                        
                      <!-- <input name="lokasi" type="text" class="form-control"> -->
                    </div>

                    <div class="form-group">
                      <label>Name / Department Or Company/Identity (KTP/SIM/Passport)</label><br>
                      
                      <input name="nama_tamu" type="textarea" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Purpose</label>
                      <input name="purpose" type="text" class="form-control">
                    </div>

                     <div class="form-group">
                      <label>Date</label>
                      <input name="tanggal" type="date" class="form-control datemask" placeholder="YYYY/MM/DD">
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
                      <input name="in" type="time" class="form-control datemask" placeholder="YYYY/MM/DD">
                            </div>
                            <div class="col">
                              <label>Exit Time</label>
                      <input name="out" type="time" class="form-control datemask" placeholder="YYYY/MM/DD">
                            </div>
                      </div>  
                      
                    </div>

                    <div class="form-group">
                      <label>Belongings</label>
                      <input name="belongings" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Remarks</label>
                      <input name="remark" type="text" class="form-control">
                    </div>
                    <br>
                   

                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    <button type="reset" class="btn btn-sm btn-danger">Reset</button>

                </div>
                </div>
              </div>     
              </div>

              
                
                
              </div>
            </div>
          </form>
          </div>
        </section>
       </div>