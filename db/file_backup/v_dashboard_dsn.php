<?php
  error_reporting(0);
  function limit_words($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
    }

?>
<!-- Status Kemahasiswaan -->
<?php 
if($this->session->userdata('status')=='kmhs'){?>
<div class="row">
	<!-- Info Jumlah Beasiswa -->
	<div class="col-xl-3 col-sm-6 mb-3">
		<div class="card text-white bg-primary o-hidden h-100">
			<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-archive"></i>
				</div>
				<div class="mr-5"><?php echo $total_bea_lokal ?> Beasiswa Lokal</div>
			</div>
			<a class="card-footer text-white clearfix small z-1" href="admin/kemahasiswaan/kategori/beasiswa">
				<span class="float-left">Kelola Beasiswa Lokal </span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
			</a>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 mb-3">
		<div class="card text-white bg-danger o-hidden h-100">
			<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-archive"></i>
				</div>
				<div class="mr-5"><?php echo $total_bea_wilayah ?> Beasiswa Wilayah </div>
			</div>
			<a class="card-footer text-white clearfix small z-1" href="admin/kemahasiswaan/kategori/beasiswa">
				<span class="float-left">Kelola Beasiswa Wilayah </span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
			</a>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 mb-3">
		<div class="card text-white bg-success o-hidden h-100">
			<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-archive"></i>
				</div>
				<div class="mr-5"><?php echo $total_bea_nasional ?> Beasiswa Nasional </div>
			</div>
			<a class="card-footer text-white clearfix small z-1" href="admin/kemahasiswaan/kategori/beasiswa">
				<span class="float-left">Kelola Beasiswa Nasional </span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
			</a>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 mb-3">
		<div class="card text-white bg-warning o-hidden h-100">
			<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-archive"></i>
				</div>
				<div class="mr-5"><?php echo $total_bea_internasional ?> Beasiswa Internasional</div>
			</div>
			<a class="card-footer text-white clearfix small z-1" href="admin/kemahasiswaan/kategori/beasiswa">
				<span class="float-left">Kelola Beasiswa Internasional </span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
			</a>
		</div>
	</div><!-- End Info Jumlah Beasiswa -->
	
	<!-- Info Status Beasiswa -->
	<div class="col-xl-4 col-sm-6 mb-3">
		<div class="card text-white bg bg-secondary o-hidden h-100">
			<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-archive"></i>
				</div>
				<div class="mr-5"><?php echo $total_bea_buka ?> Beasiswa Sedang Dibuka </div>
			</div>
			<a class="card-footer text-white clearfix small z-1" href="admin/kemahasiswaan/kategori/beasiswa">
				<span class="float-left">Kelola Beasiswa Sedang Dibuka </span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
			</a>
		</div>
	</div>
	<div class="col-xl-4 col-sm-6 mb-3">
		<div class="card text-white bg-info o-hidden h-100">
			<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-archive"></i>
				</div>
				<div class="mr-5"><?php echo $total_bea_tersimpan ?> Beasiswa Tersimpan </div>
			</div>
			<a class="card-footer text-white clearfix small z-1" href="admin/kemahasiswaan/kategori/beasiswa">
				<span class="float-left">Kelola Beasiswa Tersimpan </span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
			</a>
		</div>
	</div>
	<div class="col-xl-4 col-sm-6 mb-3">
		<div class="card text-white bg-dark o-hidden h-100">
			<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-archive"></i>
				</div>
				<div class="mr-5"><?php echo $total_bea_nostatus ?> Beasiswa Tanpa Status Upload </div>
			</div>
			<a class="card-footer text-white clearfix small z-1" href="admin/kemahasiswaan/kategori/beasiswa">
				<span class="float-left">Kelola Beasiswa Tanpa Status Upload </span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
			</a>
		</div>
	</div><!-- End Info Status Beasiswa  -->

<!-- Data Beasiswa Buka -->
<div class="col-xl-12 col-sm-12 mb-3">
  <div class="card">
  	
    <div class="card-header">
		<center><strong>Data Beasiswa Sedang Dibuka</strong></center>
    </div>
      <div class="card-body">
        <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
             <tr>
              <th scope="col">No</th>
              <th scope="col">Gambar</th>
			  <th scope="col">Beasiswa</th>
			  <th scope="col">Deskripsi</th>
			  <th scope="col">Kategori</th>
			  <th scope="col">Tanggal Unggah</th>
             </tr>
            </thead>
        <tbody>
        	<?php $no=1;
					foreach($data_bea_buka as $row){ ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><img src="<?php echo base_url().'theme/assets/img/beasiswa/'.$row->gambar;?>" style="width:50px;"></td>
				<td><?php echo $row->nama ?></td>
				<td><?php echo limit_words($row->deskripsi,10).'...';?></td>
				<td><?php
					if ($row->kategori=='') {
						echo '<span class="badge badge-danger">Perlu diinput Kategori Beasiswa</span>';
					}else if ($row->kategori=='lokal') {
						echo 'Beasiswa Lokal';
					}elseif ($row->kategori=='wilayah') {
						echo 'Beasiswa Wilayah';
					}elseif ($row->kategori=='nasional') {
						echo 'Beasiswa Nasional';
					}elseif ($row->kategori=='internasional') {
						echo 'Beasiswa Internasional';
					}
				?>
				</td>
				<td><?php echo $row->tanggal ?></td>
			</tr>
			<?php } ?>
		</tbody>
	  </table>
	</div>
   </div>
  </div>
 </div><!-- End Data Beasiswa Buka -->

 <!-- Data Pendaftar Beasiswa -->
 <div class="col-xl-12 col-sm-12 mb-3">
  <div class="card">
  	
    <div class="card-header">
		<center><strong>Data Pendaftar Beasiswa</strong></center>
    </div>
      <div class="card-body">
        <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
             <tr>
              <th scope="col">No</th>
			  <th scope="col">Nama</th>
			  <th scope="col">NIM</th>
			  <th scope="col">Beasiswa</th>
			  <th scope="col">Status</th>
             </tr>
            </thead>
        <tbody>
        	<?php $no=1;
					foreach($data_pendaftar_kmhs as $row){ ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $row->nama_mhs ?></td>
				<td><?php echo $row->nim ?></td>
				<td><?php echo $row->nama_bea ?></td>
				<td><?php
					if ($row->status=='0') {
						echo '<span class="badge badge-secondary">Menunggu Persetujuan<br/> Kaprodi</span>';
					}elseif ($row->status=='1') {
						echo '<span class="badge badge-warning">Proses Seleksi</span>';
					}elseif ($row->status=='2') {
						echo '<span class="badge badge-success">Pengajuan Diterima</span>';
					}elseif ($row->status=='3') {
						echo '<span class="badge badge-danger">Pengajuan Ditolak</span>';
					}
				?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	  </table>
	</div>
   </div>
  </div>
 </div><!-- End Data Pendaftar -->

 	<!-- Data Pengajuan Sedang Diproses -->
	<div class="col-xl-6 col-sm-12 mb-3">
	  <div class="card">

		<div class="card-header">
			<center><strong>Data Pengajuan Sedang Diproses</strong></center>
    	</div>
      	<div class="card-body">
        	<div class="table-responsive">
         	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            	<thead>
             		<tr>
					 <th scope="col">No</th>
			  		 <th scope="col">Nama</th>
			  		 <th scope="col">NIM</th>
			  		 <th scope="col">Beasiswa</th>
			  		 <th scope="col">Status</th>
					</tr>
            	</thead>
        	<tbody>
				<?php $no=1;
					foreach($data_daftar_proses_kmhs as $row){ ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row->nama_mhs ?></td>
						<td><?php echo $row->nim ?></td>
						<td><?php echo $row->nama_bea ?></td>
						<td><?php
							if ($row->status_baca=='1') {
								echo '<span class="badge badge-warning">Proses Seleksi</span>';
							}else
							if ($row->status=='0') {
								echo '<span class="badge badge-primary">Pengajuan Berhasil</span>';
							}elseif ($row->status=='1') {
								echo '<span class="badge badge-warning">Proses Seleksi</span>';
							}elseif ($row->status=='2') {
								echo '<span class="badge badge-success">Pengajuan Diterima</span>';
							}elseif ($row->status=='3') {
							echo '<span class="badge badge-danger">Pengajuan Ditolak</span>';
							}
							?>
				</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	  </div>
	 </div>
	</div><!-- End Data Pengajuan Sedang Diproses -->

	<!-- Data Pengajuan Diterima -->
	<div class="col-xl-6 col-sm-12 mb-3">
	  <div class="card">

		<div class="card-header">
			<center><strong>Data Pengajuan Diterima</strong></center>
    	</div>
      		<div class="card-body">
        		<div class="table-responsive">
         		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            	<thead>
             		<tr>
					 <th scope="col">No</th>
			  		 <th scope="col">Nama</th>
			  		 <th scope="col">NIM</th>
			  		 <th scope="col">Beasiswa</th>
			  		 <th scope="col">Status</th>
					</tr>
				</thead>
				<tbody>
				<?php $no=1;
					foreach($data_daftar_terima_kmhs as $row){ ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row->nama_mhs ?></td>
						<td><?php echo $row->nim ?></td>
						<td><?php echo $row->nama_bea ?></td>
						<td><?php
							if ($row->status=='0') {
								echo '<span class="badge badge-primary">Pengajuan Berhasil</span>';
							}elseif ($row->status=='1') {
								echo '<span class="badge badge-warning">Proses Seleksi</span>';
							}elseif ($row->status=='2') {
								echo '<span class="badge badge-success">Pengajuan Diterima</span>';
							}elseif ($row->status=='3') {
							echo '<span class="badge badge-danger">Pengajuan Ditolak</span>';
							}
							?>
				</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	  </div>
	 </div>
	</div><!-- End Data Pengajuan Diterima -->	

	<!-- Data Pengajuan Ditolak -->
	<div class="col-xl-12 col-sm-12 mb-3">
	  <div class="card">

		<div class="card-header">
			<center><strong>Data Pengajuan Ditolak</strong></center>
    	</div>
      		<div class="card-body">
        		<div class="table-responsive">
         		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            	<thead>
             		<tr>
						<th scope="col">No</th>
			  			<th scope="col">Nama</th>
			  			<th scope="col">NIM</th>
			  			<th scope="col">Beasiswa</th>
			  			<th scope="col">Status</th>
					</tr>
				</thead>
				<tbody>
				<?php $no=1;
					foreach($data_daftar_tolak_kmhs as $row){ ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row->nama_mhs ?></td>
						<td><?php echo $row->nim ?></td>
						<td><?php echo $row->nama_bea ?></td>
						<td><?php
							if ($row->status=='0') {
								echo '<span class="badge badge-primary">Pengajuan Berhasil</span>';
							}elseif ($row->status=='1') {
								echo '<span class="badge badge-warning">Proses Seleksi</span>';
							}elseif ($row->status=='2') {
								echo '<span class="badge badge-success">Pengajuan Diterima</span>';
							}elseif ($row->status=='3') {
							echo '<span class="badge badge-danger">Pengajuan Ditolak</span>';
							}
							?>
				</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	  </div>
	 </div>
	</div><!-- End Data Pengajuan Ditolak -->

<!-- Status Kaprodi -->
<?PHP } 
elseif($this->session->userdata('status')=='if'||'tm'||'ti'||'mi'||'teks'){?>

	<div class="row">
	<!-- Info Jumlah Pendaftar Beasiswa -->
	<div class="col-xl-6 col-sm-6 mb-3">
		<div class="card text-white bg-info o-hidden h-100">
			<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-archive"></i>
				</div>
				<div class="mr-5"><?php echo $total_pendaftar ?> Pendaftar Beasiswa </div>
			</div>
			<a class="card-footer text-white clearfix small z-1" href="admin/kemahasiswaan/beasiswa/pendaftar">
				<span class="float-left">Kelola Data Pendaftar Beasiswa </span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
			</a>
		</div>
	</div><!-- End Info Jumlah Pendaftar Beasiswa -->

	<!-- Info Jumlah Pendaftar Beasiswa Menunggu Persetujuan Kaprodi -->
	<div class="col-xl-6 col-sm-6 mb-3">
		<div class="card text-white bg-secondary o-hidden h-100">
			<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-archive"></i>
				</div>
				<div class="mr-5"><?php echo $total_daftar_menunggu ?> Menunggu Persetujuan Kaprodi </div>
			</div>
			<a class="card-footer text-white clearfix small z-1" href="admin/kemahasiswaan/beasiswa/pendaftar">
				<span class="float-left">Kelola Data Pendaftar Beasiswa Menunggu Persetujuan Kaprodi</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
			</a>
		</div>
	</div><!-- End Info Jumlah Pendaftar Beasiswa Menunggu Persetujuan Kaprodi -->

	<!-- Info Jumlah Status Penerimaan Beasiswa -->
	<div class="col-xl-4 col-sm-6 mb-3">
		<div class="card text-white bg-warning o-hidden h-100">
			<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-archive"></i>
				</div>
				<div class="mr-5"><?php echo $total_daftar_proses ?> Pengajuan Sedang Diproses </div>
			</div>
			<a class="card-footer text-white clearfix small z-1" href="admin/kemahasiswaan/beasiswa/pendaftar">
				<span class="float-left">Kelola Data Pengajuan Diproses </span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
			</a>
		</div>
	</div>
	<div class="col-xl-4 col-sm-6 mb-3">
		<div class="card text-white bg-success o-hidden h-100">
			<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-archive"></i>
				</div>
				<div class="mr-5"><?php echo $total_daftar_terima ?> Pengajuan Diterima </div>
			</div>
			<a class="card-footer text-white clearfix small z-1" href="admin/kemahasiswaan/beasiswa/pendaftar">
				<span class="float-left">Kelola Data Pengajuan Diterima </span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
			</a>
		</div>
	</div>
	<div class="col-xl-4 col-sm-6 mb-3">
		<div class="card text-white bg-danger o-hidden h-100">
			<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-archive"></i>
				</div>
				<div class="mr-5"><?php echo $total_daftar_tolak ?> Pengajuan Ditolak</div>
			</div>
			<a class="card-footer text-white clearfix small z-1" href="admin/kemahasiswaan/beasiswa/pendaftar">
				<span class="float-left">Kelola Data Pengajuan Ditolak </span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
			</a>
		</div>
	</div><!-- End Info Jumlah Status Penerimaan Beasiswa -->

 <!-- Data Pendaftar Beasiswa -->
 <div class="col-xl-12 col-sm-12 mb-3">
  <div class="card">
  	
    <div class="card-header">
		<center><strong>Data Pendaftar Beasiswa</strong></center>
    </div>
      <div class="card-body">
        <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
             <tr>
              <th scope="col">No</th>
			  <th scope="col">Nama</th>
			  <th scope="col">NIM</th>
			  <th scope="col">Beasiswa</th>
			  <th scope="col">Status</th>
             </tr>
            </thead>
        <tbody>
        	<?php $no=1;
					foreach($data_pendaftar as $row){ ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $row->nama_mhs ?></td>
				<td><?php echo $row->nim ?></td>
				<td><?php echo $row->nama_bea ?></td>
				<td><?php
					if ($row->status=='0') {
						echo '<span class="badge badge-secondary">Menunggu Persetujuan<br/> Kaprodi</span>';
					}elseif ($row->status=='1') {
						echo '<span class="badge badge-warning">Proses Seleksi</span>';
					}elseif ($row->status=='2') {
						echo '<span class="badge badge-success">Pengajuan Diterima</span>';
					}elseif ($row->status=='3') {
						echo '<span class="badge badge-danger">Pengajuan Ditolak</span>';
					}
				?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	  </table>
	</div>
   </div>
  </div>
 </div><!-- End Data Pendaftar -->

 	<!-- Data Pengajuan Sedang Diproses -->
	<div class="col-xl-6 col-sm-12 mb-3">
	  <div class="card">

		<div class="card-header">
			<center><strong>Data Pengajuan Sedang Diproses</strong></center>
    	</div>
      	<div class="card-body">
        	<div class="table-responsive">
         	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            	<thead>
             		<tr>
					 <th scope="col">No</th>
			  		 <th scope="col">Nama</th>
			  		 <th scope="col">NIM</th>
			  		 <th scope="col">Beasiswa</th>
			  		 <th scope="col">Status</th>
					</tr>
            	</thead>
        	<tbody>
				<?php $no=1;
					foreach($data_daftar_proses as $row){ ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row->nama_mhs ?></td>
						<td><?php echo $row->nim ?></td>
						<td><?php echo $row->nama_bea ?></td>
						<td><?php
							if ($row->status_baca=='1') {
								echo '<span class="badge badge-warning">Proses Seleksi</span>';
							}else
							if ($row->status=='0') {
								echo '<span class="badge badge-primary">Pengajuan Berhasil</span>';
							}elseif ($row->status=='1') {
								echo '<span class="badge badge-warning">Proses Seleksi</span>';
							}elseif ($row->status=='2') {
								echo '<span class="badge badge-success">Pengajuan Diterima</span>';
							}elseif ($row->status=='3') {
							echo '<span class="badge badge-danger">Pengajuan Ditolak</span>';
							}
							?>
				</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	  </div>
	 </div>
	</div><!-- End Data Pengajuan Sedang Diproses -->

	<!-- Data Pengajuan Diterima -->
	<div class="col-xl-6 col-sm-12 mb-3">
	  <div class="card">

		<div class="card-header">
			<center><strong>Data Pengajuan Diterima</strong></center>
    	</div>
      		<div class="card-body">
        		<div class="table-responsive">
         		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            	<thead>
             		<tr>
					 <th scope="col">No</th>
			  		 <th scope="col">Nama</th>
			  		 <th scope="col">NIM</th>
			  		 <th scope="col">Beasiswa</th>
			  		 <th scope="col">Status</th>
					</tr>
				</thead>
				<tbody>
				<?php $no=1;
					foreach($data_daftar_terima as $row){ ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row->nama_mhs ?></td>
						<td><?php echo $row->nim ?></td>
						<td><?php echo $row->nama_bea ?></td>
						<td><?php
							if ($row->status=='0') {
								echo '<span class="badge badge-primary">Pengajuan Berhasil</span>';
							}elseif ($row->status=='1') {
								echo '<span class="badge badge-warning">Proses Seleksi</span>';
							}elseif ($row->status=='2') {
								echo '<span class="badge badge-success">Pengajuan Diterima</span>';
							}elseif ($row->status=='3') {
							echo '<span class="badge badge-danger">Pengajuan Ditolak</span>';
							}
							?>
				</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	  </div>
	 </div>
	</div><!-- End Data Pengajuan Diterima -->	

	<!-- Data Pengajuan Ditolak -->
	<div class="col-xl-12 col-sm-12 mb-3">
	  <div class="card">

		<div class="card-header">
			<center><strong>Data Pengajuan Ditolak</strong></center>
    	</div>
      		<div class="card-body">
        		<div class="table-responsive">
         		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            	<thead>
             		<tr>
						<th scope="col">No</th>
			  			<th scope="col">Nama</th>
			  			<th scope="col">NIM</th>
			  			<th scope="col">Beasiswa</th>
			  			<th scope="col">Status</th>
					</tr>
				</thead>
				<tbody>
				<?php $no=1;
					foreach($data_daftar_tolak as $row){ ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row->nama_mhs ?></td>
						<td><?php echo $row->nim ?></td>
						<td><?php echo $row->nama_bea ?></td>
						<td><?php
							if ($row->status=='0') {
								echo '<span class="badge badge-primary">Pengajuan Berhasil</span>';
							}elseif ($row->status=='1') {
								echo '<span class="badge badge-warning">Proses Seleksi</span>';
							}elseif ($row->status=='2') {
								echo '<span class="badge badge-success">Pengajuan Diterima</span>';
							}elseif ($row->status=='3') {
							echo '<span class="badge badge-danger">Pengajuan Ditolak</span>';
							}
							?>
				</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	  </div>
	 </div>
	</div><!-- End Data Pengajuan Ditolak -->

<?PHP } ?><!-- End Status Kaprodi -->

</div>