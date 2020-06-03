<div class="page-header">
  <h3 class="page-title">
    <span class="page-title-icon bg-gradient-primary text-white mr-2">
      <i class="mdi mdi-account-multiple"></i>                 
    </span>
  </h3>
  <div class="col-lg-3">
    <h4></h4>
  <h4>Laporan Berdasarkan Tanggal</h4>
       <form action="<?php echo base_url().'laporan/hasil'; ?>" method="post">
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
                  
 </form>
  
   <!-- <form method="GET" action="<?php echo base_url('laporan/hasil')?>">
          <div id="form-bulan">
            <label></label><br>
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
            <br />
        </div>
        <div class="col"> </div>
        <button type="submit" class="btn btn-success">Cari</button>
        <input class="btn btn-primary" type="submit" value="Cari"> -->
   <!--  </form> --> 
    <br />
  </div>

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
          
        <table class="table table-hover text-center">
          <thead>
        <tr> 
           <th>No</th>
        <th>Tanggal</th>
        <th>No. Visitor / Nik</th>
        <th>Nama</th>
        <th>Departemen</th>
        <th>Keperluan</th>
        <th>Foto</th>
        <th>Ttd</th>
        </tr>
        </thead>
         <?php 

            $no = 1;
foreach($data as $d) : ?>
         <td><?php echo $no++ ;?></td>
        <!-- <td><?php echo $d['tanggal']; ?></td> -->
        <td><?php echo date('d-m-Y G:i:s',strtotime($d['tanggal'])); ?></td>
        <td><?php echo $d['id']; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['departemen']; ?></td>
        <td><?php echo $d['keperluan']; ?></td>
        <td><img src="<?php echo base_url()."foto_karyawan/"; ?><?php echo $d['image']; ?>" width="88" height="72"></img></td>
        <td><img src="<?php echo base_url()."ttd_image/"; ?><?php echo $d['code'];?>.png" width="88" height="72"></img></td>
          <tbody> 
          <?php endforeach; ?>
          </tbody> 
        </table>
         <!-- Tanggal Buat : <?= date('d-m-Y') ?> -->
          <div class="row"><?php echo $this->pagination->create_links(); ?></div> 
        </div>
      </div>
    </div>
    <br>

    <!-- Bungkus dalam div class custom-pagination -->
<!-- <div class="custom-pagination">
 <?php echo $d;?>
</div> -->
    <!-- <code>
            <a href="<?php echo base_url()."dashboard"; ?>" class="btn btn-outline-danger btn-xs"><< </a>
            <a href="<?php echo base_url()."tamu/view_tamu"; ?>" class="btn btn-outline-danger btn-xs"> >></a>
            <input type="button" class="btn btn-outline-primary btn-xs" onClick="printContent('div1')" value="Print Data"> -->
            
            <!--  <button type="submit" class="btn btn-outline-primary btn-xs">Rekap Data</button> -->
          <!-- </code> -->

        </br>
  </div>
</div>
</div>
<!-- <div class="row">
              <div class="col-md-12"> -->
     
    <!--  </div> -->
<!-- <script>
function printContent(el){
  var restorepage = document.body.innerHTML;
  var printcontent = document.getElementById(el).innerHTML;
  document.body.innerHTML = printcontent;
  window.print();
  document.body.innerHTML = restorepage;
}
</script>
 -->
 
 <!-- <div id="container">
  <h1></h1>
  <div id="body">
<?php
foreach($results as $data) {
    echo $data->Name . " - " . $data->Continent . "<br>";
}
?>
   <p><?php echo $links; ?></p>
  </div>
  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
 </div> -->

                       