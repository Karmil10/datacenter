<div class="container-fluid">
<section class="content-header text-center col-8 ">
      <h1>
        MOHON ISI FORM DI BAWAH INI
        
      </h1>
      
    </section>

<div class="box box-warning col-6">
            <!-- <div class="box-header with-border">
              <h3 class="box-title">MOHON ISI FORM DI BAWAH INI</h3>
            </div> -->

       		<br>


            <!-- /.box-header -->
            <div class="box-body" >
              <form role="form" class="form-horizontal" method="POST" action="<?php echo base_url()."tamu2/add_tamu2"; ?>">
                <!-- text input -->
                <div class="form-group font-weight-bold font-weight-bold">
                  <label>No. Visitor / NIK</label>
                  <input type="text" class="form-control"  id="id" name="id" placeholder="" required="">
                </div>

                <div class="form-group font-weight-bold">
                  <label>Nama</label>
                  <input type="text" class="form-control"  id="nama" name="nama" placeholder="" required="">
                </div>

                <div class="form-group font-weight-bold">
                  <label>PT / Dept / Institusi</label>
                  <input type="text" class="form-control"  id="departemen" name="departemen" placeholder="" required="">
                </div>

               

                <div class="form-group font-weight-bold">
                  <label>Keperluan</label>
                  <select class="form-control" id="keperluan" name="keperluan" required>
                    <option value="replace">Replace</option>
          					<option value="maintenance">Maintenance</option>
          					<option value="audit">Audit</option>
          					<option value="Barang Masuk">Barang Masuk</option>
          					<option value="Barang Keluar">Barang Keluar</option>
                  </select>
                  
                </div>

                 <div class="form-group font-weight-bold">
                  <label>Remarks</label>
                  <textarea id="remaks" name="remaks" class="form-control" rows="8" placeholder="" ></textarea>
                </div>

                

                <!-- textarea -->
                 <div class="form-group font-weight-bold">
                  <label>Tanggal</label>
                  <input type="text" class="form-control"  id="tanggal" name="tanggal" placeholder="" required="" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date("Y-m-d"); ?>"  readonly="">
                </div>
               
               <div class="form-group font-weight-bold">
                  <label>Jam</label>
                  <input type="text" class="form-control"  id="id" name="id" placeholder="" required="" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date("H:i:s"); ?>"  readonly="" >
                </div>

                

                <div class="form-group font-weight-bold">
                  <label>Term &amp; Kondition</label>
                  <textarea class="form-control" rows="8" placeholder="1. Silahkan membawa tanda pengenal yang sudah ter-validasi 
      (KTP, SIM, Passport atau ID Card kantor)
   2. Melapor ke security Data Center untuk mendapatkan akses pintu masuk.
   3. Mengisi ceklis tanda tangan di tim security Data Center untuk keperluan reporting.
   4. Login melalui Intranet dengan Login User yang sudah ada." disabled></textarea>
                </div>
                
                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                 <button type="submit" class="btn btn-danger">Kembali</button>
              	</div>

              </form>
            </div>
        </div>
    </div>

            
