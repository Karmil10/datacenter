


<div class="container-fluid">
<!-- <div class="content-wrapper"> -->
    <section class="content-header">
      <h1>
        Laporan Pengunjung
        <!-- <small>Control panel</small> -->
      </h1>
      
    </section>
    <section class="content">


    <br>
    <!-- <h4>Pencarian Data Berdasarkan Tanggal</h4> -->
   
  <!--   <div class="row">

        <div class="navbar-form navbar-right">
                <?php echo form_open('report/search') ?> -->
               <!--  <input type="date" name="tgl_awal" class="form-control" placeholder="">
                <input type="date" name="tgl_akhir" class="form-control" placeholder="">

                <button type="submit" class="btn btn-succes">Cari</button> -->

                <!-- <div class="row">
                        <form>
                      <div class="form-row" method="post">
                        <div class="col">
                          <input type="date" class="form-control" name="tgl_awal">
                        </div>
                        <div class="col" method="post">
                          <input type="date" class="form-control" name="tgl_akhir">
                        </div>
                      </div>
                      <div class="col">
                      <button type="submit" class="btn btn-succes">Cari</button>
                      </div>
                    </form>
                    </div>


                <?php echo form_close(); ?>
            </div>
    </div> -->

 <form action="<?php echo base_url().'report/search'; ?>" method="post">
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

    <table class="table table-bordered table-hover text-center">
        <br>
        <div id="div1">
        <thead>
        <tr>
            <th width="20 px">No</th>
            <th width="150 px">Tanggal</th>
            <!-- <th>Kode</th> -->
            <th>ID</th>
            <th>Nama</th>
            <th>Departemen</th>
            <th>Keperluan</th>
            <!-- <th>Tanggal</th> -->
            <th>Image</th>
            <th>Ttd</th>
        </tr>
        </thead>
        

            <?php 

            $no = 1;

           foreach($dc_access_log as $d) : ?>

            <tbody>
            <tr>
                <td><?php echo $no++ ;?></td>
                <!-- <td><?php echo $tm->tanggal ?></td> -->
                <td><?php echo date('d-m-Y',strtotime($d->tanggal)); ?></td>
                <!-- <td><?php echo $tm->code ?></td> -->
                <td><?php echo $d->id ?></td>
                <td><?php echo $d->nama ?></td>
                <td><?php echo $d->departemen ?></td>
                <td><?php echo $d->keperluan ?></td>

                <td>
                    <img src="<?php echo base_url(); ?>foto_karyawan/<?php echo $d->image; ?>" width="150" height="110" >
                 <td>
                    <img src="<?php echo base_url(); ?>ttd_image/<?php echo $d->image; ?>" width="150" height="110" >
                </td>
               </td>
                
               
            </tr>
            </tbody>



<?php endforeach; ?>
      
    </table>
<!-- </div> -->
</section>
</div>


</div>
<code>
            <a href="<?php echo base_url()."dashboard"; ?>" class="btn btn-outline-danger btn-xs"><< </a>
            <a href="<?php echo base_url()."tamu/view_tamu"; ?>" class="btn btn-outline-danger btn-xs"> >></a>
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
