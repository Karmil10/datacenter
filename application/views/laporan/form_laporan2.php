<div class="page-header">
  <h3 class="page-title">
    <span class="page-title-icon bg-gradient-primary text-white mr-2">
      <i class="mdi mdi-account-multiple"></i>                 
    </span>
  </h3>
  <div class="col-lg-3">
    <h4></h4>
     <h4></h4>

<!-- <form action="<?php echo base_url().'laporan2/hasil'; ?>" method="post">
    <div class="row">
                        <form>
                      <div class="form-row">
                        <div class="col">
                          <input type="date" class="form-control" name="tgl_awal">
                        </div>
                        <div class="col" method="post">
                          <input type="date" class="form-control" name="tgl_akhir">
                        </div>
                      </div>
                      <div class="col">
                      <button type="submit" class="btn btn-success">Cari</button>
                      </div>
                    </form>
                    </div>
                  
 </form> -->
  
  <!--  <form method="GET" action="<?php echo base_url('laporan/hasil')?>">
          <div id="form-bulan">
            <label>Bulan</label><br>
            <select name="bulan" class="form-control">
                <option value="">Pilih</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select>
            <br /><br />
        </div>
        <input class="btn btn-primary" type="submit" value="Cari">
    </form>
  </div> -->

  <!-- <nav aria-label="breadcrumb"> -->
   <!--  <ul class=""> -->
      <!-- <li class="breadcrumb-item active" aria-current="page"> -->
        <!-- <span> Acces Log Data Center</span> -->
        <!-- <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i> -->
      </li>
    </ul>
  </nav>
</div>
<div class="breadcrumb">
  <div class="col-lg-12">
    <!-- <div class="card">
      <div class="card-body"> -->
        <p class="card-description">
          <!-- <code>
            <a href="<?php echo base_url()."dashboard"; ?>" class="btn btn-outline-danger btn-xs"><< Kembali</a>
            <input type="button" class="btn btn-outline-primary btn-xs" onClick="printContent('div1')" value="Print Data">
          </code> -->
        </p>
        <div id="div1">
          <h4 class="text-center"><b> REPORT ACCESS LOG DC TCT & DRC COKLAT</b> </h4>
          <br>
          <br>
          <span></span>
          
        <table class="table table-hover">
          <thead>
        <tr> 
         <th class="text-center">No</th> 
        <th class="text-center">Tanggal</th>
        <th class="text-center">Jam</th>
        <th class="text-center">No. Visitor / Nik</th>
        <th class="text-center">Nama</th>
        <th class="text-center">Departemen</th>
        <th class="text-center">Keperluan</th>
        <th class="text-center">Foto</th>
        <th class="text-center">Ttd</th>
        </tr>
        </thead>
        <tbody >
       <?php  
       $no=1;
foreach($dc_access_log as $d){ ?>
        <td><?php echo $no++ ;?></td>
        <!-- <td class="text-center"><?php echo $d->tanggal ?></td> -->
        <td class="text-center"><?php echo date('d-m-Y',strtotime($d->tanggal)); ?></td>
        <td class="text-center"><?php echo $d->jam1 ?></td>
        <td class="text-center"><?php echo $d->id ?></td>
        <td class="text-center"><?php echo $d->nama ?></td>
        <td class="text-center"><?php echo $d->departemen?></td>
        <td class="text-center"><?php echo $d->keperluan ?></td>
        <td class="text-center"><img src="<?php echo base_url()."foto_karyawan/"; ?><?php echo $d->code ?>.png" width="88" height="72"></img></td>
        <td class="text-center"><img src="<?php echo base_url()."ttd_image/"; ?><?php echo $d->code ?>.png" width="88" height="72"></img></td>
          <tbody> 
          <?php } ?>
          </tbody> 
        </table>
         <!-- Tanggal Buat : <?= date('d-m-Y') ?> -->
        </div>
      </div>
    </div>
    <br>
    <code>
            <!-- <a href="<?php echo base_url()."laporan/view_laporan"; ?>" class="btn btn-outline-danger btn-xs"><< </a>
            <a href="<?php echo base_url()."tamu/view_tamu"; ?>" class="btn btn-outline-danger btn-xs"> >></a> -->
            <input type="button" class="btn btn-outline-primary btn-xs" onClick="printContent('div1')" value="Print Data">
            <code>
            <a href="<?php echo base_url()."report"; ?>" class="btn btn-outline-danger btn-xs">Kembali</a>
            <!-- <a href="<?php echo base_url()."tamu/view_tamu"; ?>" class="btn btn-outline-danger btn-xs"> >></a>
            <a href="<?php echo base_url()."laporan/hasil"; ?>" class="btn btn-outline-danger btn-xs"> >></a> -->
           <!--  <input type="button" class="btn btn-outline-primary btn-xs" onClick="printContent('div1')" value="Print Data"> -->
            
            <!--  <button type="submit" class="btn btn-outline-primary btn-xs">Rekap Data</button> -->
          </code>
            
            <!--  <button type="submit" class="btn btn-outline-primary btn-xs">Rekap Data</button> -->
          </code>
        </br>
  </div>
</div>
</div>
<script>
function printContent(el){
  var restorepage = document.body.innerHTML;
  var printcontent = document.getElementById(el).innerHTML;
  document.body.innerHTML = printcontent;
  window.print();
  document.body.innerHTML = restorepage;
}
</script>
