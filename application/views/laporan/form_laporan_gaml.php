<div class="page-header">
  <h3 class="page-title">
    <span class="page-title-icon bg-gradient-primary text-white mr-2">
      <i class="mdi mdi-account-multiple"></i>                 
    </span>
  </h3>
  <div class="col-lg-3">
    <h4></h4>
    <!-- <form action="index.php?action=rekapbulan" method="post">
      <div class="form-group">
        <select name="bulan" class="form-control">
          <option>Pilih Bulan</option>
          <option value="01">Januari</option>
          <option value="02">Februari</option>
          <option value="03">Maret</option>
          <option value="04">April</option>
          <option value="05">Mei</option>
          <option value="06">Juni</option>
          <option value="07">Juli</option>
          <option value="08">Agustus</option>
          <option value="09">September</option>
          <option value="10">Oktober</option>
          <option value="11">November</option>
          <option value="12">Desember</option>
        </select>
      </div>
      
      <div class="form-group">
        <select name="tahun" class="form-control">
          <?php
          $mulai= date('Y') - 5;
          for($i = $mulai;$i<$mulai + 100;$i++){
              $sel = $i == date('Y') ? ' selected="selected"' : '';
              echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
          }
          ?> -->
        </select>
      </div>

     <!--  <button type="submit" class="btn btn-outline-primary btn-xs">Rekap Data</button> -->

    </form>
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
          <h4 class="text-center"><b> REPORT GAML</b> </h4>
          <br>
          <br>
          <!-- <span></span>
          <form method="get" action="<?php echo base_url()."laporan/view_laporan2"; ?>">
          <div id="form-bulan">
            <label>Bulan</label><br>
            <select name="bulan">
                <option value="">Pilih</option>
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            <br /><br />
        </div>
        <button type="submit">Tampilkan</button>
    </form> -->
        <table class="table table-hover">
          <thead>
        tr>
        <th class="text-center">NIK</th>
        <th class="text-center">Nama</th>
        <th class="text-center">Tanggal</th>
        <th class="text-center">Start_Time</th>
        <th class="text-center">End_Time</th>
        <th class="text-center">Remaks</th>
      </tr>
        </thead>
<?php foreach($data as $d){ ?>
        <?php foreach($data as $d){ ?>
      <tr>
        <td class="text-center"><?php echo $d['nik']; ?></td>
        <td class="text-center"><?php echo $d['nama']; ?></td>
        <td class="text-center"><?php echo $d['tanggal']; ?></td>
        <td class="text-center"><?php echo $d['start_time']; ?></td>
        <td class="text-center"><?php echo $d['end_time']; ?></td>
        <td class="text-center"><?php echo $d['remaks']; ?></td>
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
            <a href="<?php echo base_url()."dashboard"; ?>" class="btn btn-outline-danger btn-xs"><< </a>
            <a href="<?php echo base_url().""; ?>" class="btn btn-outline-danger btn-xs"> >></a>
            <input type="button" class="btn btn-outline-primary btn-xs" onClick="printContent('div1')" value="Print Data">
            
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
