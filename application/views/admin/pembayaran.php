<div class="card mb-3">
          <div class="card-header">
            <table style="width : 100%">
      <tr>
        <td style="width : 50%">
          <i class="fas fa-table"></i>
          List Pembayaran
        
      </tr>
      </table>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama User</th>
					<th>Nama Materi</th>
					<th>Bukti Pembayaran</th>
					<th>Status Pembayaran</th>
					<th>Tanggal Pembayaran</th>
					<th>Batas Pembayaran</th>
					<th>Action</th>
           
                  </tr>
                </thead>
                
                <tbody>

                  <?php 
                  $no = 1;
                  foreach($pembayaran->result() as $key) {?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->user_name;?></td>
					  <td><?php echo $key->materi_nama;?></td>
					   
					    <td>
		  <img style="width:300px; height=300px" src="<?php echo base_url();?>bukti_pembayaran/<?php echo $key->pmby_bukti;?>" alt="gambar">
		  </td>
					    <td><?php echo $key->pmby_status;?></td>
						 <td><?php echo $key->pmby_tanggal;?></td>
					  <td><?php echo $key->pmby_batas;?></td>
					 
					  <td>
                            <a href="<?php echo base_url('index.php/admin/c_pembayaran/updatePembayaran/'). $key->pmby_id;?>"data-toggle="modal" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>

                            <a href="<?php echo base_url('index.php/admin/c_pembayaran/deletePembayaran/'). $key->pmby_id;?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
                          </td>
						  
						  </tr>
                 
                 
                 <?php $no++; } ?>
                  
                </tbody>
              </table>

             
          </div>
          
        </div>


      </div>
      <!-- /.container-fluid -->

    </div>
