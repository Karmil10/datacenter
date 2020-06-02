<div class="main-content">
        <section class="section">
        	<br>
        	<div class="text-center">
  				<img src="<?= base_url() ?>assets/assets_dc/img/logo_kiri.png" width=400px class="rounded float-right"  alt="...">
			</div>
        	<br>
        	<br>
        	<br>
        	<br>
        	<div class="text-center">
        	<H1 > <b>DATA CENTER ACCESS FORM </b></H1>
        	</div>
        	<br><br><br><br>

        	<?php foreach($detail as $dt) : ?>

        <!-- 	<div class="card-body">
                <table class="table ">
                  <thead>                  
                    <tr>
                      <th style="width: 30px"></th>
                      
                      <th style="width: 140px"></th>
                      
                    </tr>
                  </thead>
                  <tbody class="text-capitalize font-weight-bold">
                    <tr>
                      <td>Data Center Location</td>
                      <td><?php echo $dt->lokasi ?></td>
                      
                    </tr>
                    <tr>
                      <td>Name / Department Or Company/Identity (KTP/SIM/Passport)</td>
                      <td><?php echo $dt->nama_tamu ?></td>
                      
                    </tr>
                    <tr>
                      <td>Purpose</td>
                      <td><?php echo $dt->purpose ?></td>
                      
                    </tr>
                    <tr>
                      <td>Date</td>
                      <td><?php echo $dt->tanggal ?></td>
                      
                    </tr>

                 

                    <tr>
                      <td>Enter Time</td>
                      <td><?php echo $dt->in ?></td>
                      
                    </tr>

                    <tr>
                      <td>Exit Time</td>
                      <td><?php echo $dt->out ?></td>
                      
                    </tr>

                    <tr>
                      <td>Belongings</td>
                      <td><?php echo $dt->belongings ?></td>
                      
                    </tr>

                    <tr>
                      <td>Remarks</td>
                      <td><?php echo $dt->remark ?></td>
                      
                    </tr>

                	</tbody>
            	</table>
        	</div> -->

        	<div class="card-body font-weight-bold">
	        	
				<div class="row ">
				   <div class="col-5"><h3>Data Center Location</h3></div>
				   <div class="col-7 "><h3>:  <?php echo $dt->lokasi ?></h3></div>
				</div>

				<br>

				<div class="row">
				   <div class="col-5"><h3>Name / Department Or Company/Identity (KTP/SIM/Passport)</h3></div>
				   <div class="col-7"><h3><h3>:  <?php echo $dt->nama_tamu ?></h3></div>
				</div>

				<br>

				<div class="row">
				 <div class="col-5"><h3>Purpose</h3></div>
				 <div class="col-7"><h3><h3>:  <?php echo $dt->purpose ?></h3></div>
				</div>

				<br>
				<h3><b>Plan Enter Data Center</b></h3>
				<br>
				<div class="row">
				 <div class="col-5"><h3>Date</h3></div>
				 <div class="col-7"><h3><h3>:  <?php echo $dt->tanggal ?></h3></div>
				</div>

				<br>

				<div class="row">
				  <div class="col-5"><h3>Enter Time</h3></div>
				  <div class="col-7"><h3><h3>:  <?php echo $dt->in ?></h3></div>
				</div>

				<br>

				<div class="row">
				   <div class="col-5"><h3>Exit Time</h3></div>		  
	 	           <div class="col-7"><h3><h3>:  <?php echo $dt->out ?></h3></div>
				</div>

				<br>
				<div class="row">
				    <div class="col-5"><h3>Belongings</h3></div>			  
	                <div class="col-7"><h3><h3>:  <?php echo $dt->belongings ?></h3></div>
				</div>
				<br>
				<div class="row">
				  <div class="col-5"><h3>Remarks</h3></div>
				  

				  <div class="col-7"><h3><h3>:  <?php echo $dt->remark ?></h3></div>
				</div>

				
				</div>
				<br>
				<br>
				<br>
				<br>


				<div class="row">
				  <div class="col"></div>
				  <div class="col"><h3>Requestor</h3></div>
				  <div class="col"></div>
				  <div class="col"></div>  
				  <div class="col"><h3>IT Ops Team Leader</h3></div>
				  <div class="col"></div>
				</div>

				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				
				<div class="row">
				  <div class="col"></div>
				  <div class="col"><h3>( Dony J Limbong )</h3></div>
				  <div class="col"></div>
				  <div class="col"></div>  
				  <div class="col"><h3>( Andrianto )</h3></div>
				  <div class="col"></div>
				</div>
				<br>
				<div class="row">
				  <div class="col"></div>
				  <div class="col"><h5>Date :</h5></div>
				  <div class="col"></div>
				  <div class="col"></div>  
				  <div class="col"><h5>Date :</h5></div>
				  <div class="col"></div>
				</div>



			</div>
        	
         <h3><?php endforeach; ?>
        </section>	
    </div>