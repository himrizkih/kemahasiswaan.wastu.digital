<div class="row">
	<!-- Icon Cards-->
	<div class="col-xl-3 col-sm-6 mb-3">
		<div class="card text-white bg-primary o-hidden h-100">
			<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-archive"></i>
				</div>
				<div class="mr-5"><?php echo $total_kegiatan ?> Total Kegiatan</div>
			</div>
			<a class="card-footer text-white clearfix small z-1" href="kegiatan">
				<span class="float-left">Kelola Kegiatan </span>
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
				<div class="mr-5"><?php echo $total_keg_pendidikan ?> Kegiatan Pendidikan </div>
			</div>
			<a class="card-footer text-white clearfix small z-1" href="kegiatan">
				<span class="float-left">Kelola Kegiatan Pendidikan </span>
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
				<div class="mr-5"><?php echo $total_keg_penelitian ?> Kegiatan Penelitian </div>
			</div>
			<a class="card-footer text-white clearfix small z-1" href="kegiatan">
				<span class="float-left">Kelola Kegiatan Penelitian </span>
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
				<div class="mr-5"><?php echo $total_keg_pkm ?> Kegiatan PKM</div>
			</div>
			<a class="card-footer text-white clearfix small z-1" href="kegiatan">
				<span class="float-left">Kelola Kegiatan PKM </span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
			</a>
		</div>
	</div><!-- End Icon Cards-->
	
	<!-- Info Status Kegiatan -->
	<div class="col-xl-4 col-sm-6 mb-3">
		<div class="card text-white bg bg-secondary o-hidden h-100">
			<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-archive"></i>
				</div>
				<div class="mr-5"><?php echo $total_keg_nokategori ?> Tanpa Kategori Kegiatan </div>
			</div>
			<a class="card-footer text-white clearfix small z-1" href="kegiatan">
				<span class="float-left">Kelola Kegiatan Tanpa Kategori </span>
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
				<div class="mr-5"><?php echo $total_keg_tersimpan ?> Kegiatan Tersimpan </div>
			</div>
			<a class="card-footer text-white clearfix small z-1" href="kegiatan">
				<span class="float-left">Kelola Kegiatan Tersimpan </span>
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
				<div class="mr-5"><?php echo $total_keg_terpublikasi ?> Kegiatan Terpublikasi </div>
			</div>
			<a class="card-footer text-white clearfix small z-1" href="kegiatan">
				<span class="float-left">Kelola Kegiatan Terpublikasi </span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
			</a>
		</div>
	</div><!-- End Info Status Kegiatan  -->


<!-- Data Kegiatan Kemahasiswaan -->
<div class="col-xl-12 col-sm-12 mb-3">
  <div class="card">
  	
    <div class="card-header">
		<center><strong>Data Kegiatan Kemahasiswaan</strong></center>
    </div>
      <div class="card-body">
        <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
             <tr>
              <th scope="col">No</th>
			  <th scope="col">Nama Kegiatan</th>
			  <th scope="col">Organisasi</th>
			  <th scope="col">Kategori</th>
			  <th scope="col">Status</th>
             </tr>
            </thead>
        <tbody>
        	<?php $no=1;
					foreach($data_status_kegiatan as $row){ ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $row->nama ?></td>
				<td><?php echo $row->ormawa ?></td>
				<td><?php
					if ($row->kategori=='') {
						echo '<span class="badge badge-danger">Perlu diinput Kategori Kegiatan</span>';
					}else if ($row->kategori=='pendpenga') {
						echo 'Pendidikan dan Pengajaran';
					}elseif ($row->kategori=='penlpenge') {
						echo 'Penelitian dan Pengembangan';
					}elseif ($row->kategori=='pkm') {
						echo 'Pengabdian Kepada Masyarakat';
					}
				?>
				</td>
				<td><?php
					if ($row->status=='') {
						echo '<span class="badge badge-danger">Perlu diinput Status</span>';
					}else if ($row->status=='terpublikasi') {
						echo '<span class="badge badge-success">Terpublikasi</span>';
					}elseif ($row->status=='tersimpan') {
						echo '<span class="badge badge-warning">Tersimpan</span>';
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
 </div><!-- End Data Kegiatan Kemahasiswaan -->

 	<!-- Data Kegiatan Pendidikan dan Pengajaran -->
	<div class="col-xl-6 col-sm-12 mb-3">
	  <div class="card">
		<P>
			<center><strong>Data Kegiatan Pendidikan dan Pengajaran</strong></center>
		</P>
		<div class="card-body">
			<table class="table">
				<thead class="table table-striped">
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama Kegiatan</th>
						<th scope="col">Organisasi</th>
						<th scope="col">Status</th>
					</tr>
				</thead>
				<tbody>
				<?php $no=1;
					foreach($data_status_keg_pendidikan as $row){ ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row->nama ?></td>
						<td><?php echo $row->ormawa ?></td>
						<td><?php
							if ($row->status=='') {
								echo '<span class="badge badge-danger">Perlu diinput Status</span>';
							}else if ($row->status=='terpublikasi') {
								echo '<span class="badge badge-success">Terpublikasi</span>';
							}elseif ($row->status=='tersimpan') {
								echo '<span class="badge badge-warning">Tersimpan</span>';
							}
						?>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	  </div>
	</div><!-- End Data Kegiatan Pendidikan dan Pengajaran -->

	<!-- Data Kegiatan Penelitian dan Pengembangan -->
	<div class="col-xl-6 col-sm-12 mb-3">
	  <div class="card">
		<P>
			<center><strong>Data Kegiatan Penelitian dan Pengembangan</strong></center>
		</P>
		<div class="card-body">
			<table class="table">
				<thead class="table table-striped">
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama Kegiatan</th>
						<th scope="col">Organisasi</th>
						<th scope="col">Status</th>
					</tr>
				</thead>
				<tbody>
				<?php $no=1;
					foreach($data_status_keg_penelitian as $row){ ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row->nama ?></td>
						<td><?php echo $row->ormawa ?></td>
						<td><?php
							if ($row->status=='') {
								echo '<span class="badge badge-danger">Perlu diinput Status</span>';
							}else if ($row->status=='terpublikasi') {
								echo '<span class="badge badge-success">Terpublikasi</span>';
							}elseif ($row->status=='tersimpan') {
								echo '<span class="badge badge-warning">Tersimpan</span>';
							}
						?>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	  </div>
	</div><!-- End Data Kegiatan Penelitian dan Pengembangan -->

	<!-- Data Kegiatan Pengabdian Kepada Masyarakat -->
	<div class="col-xl-6 col-sm-12 mb-3">
	  <div class="card">
		<P>
			<center><strong>Data Kegiatan Pengabdian Kepada Masyarakat</strong></center>
		</P>
		<div class="card-body">
			<table class="table">
				<thead class="table table-striped">
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama Kegiatan</th>
						<th scope="col">Organisasi</th>
						<th scope="col">Status</th>
					</tr>
				</thead>
				<tbody>
				<?php $no=1;
					foreach($data_status_keg_pkm as $row){ ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row->nama ?></td>
						<td><?php echo $row->ormawa ?></td>
						<td><?php
							if ($row->status=='') {
								echo '<span class="badge badge-danger">Perlu diinput Status</span>';
							}else if ($row->status=='terpublikasi') {
								echo '<span class="badge badge-success">Terpublikasi</span>';
							}elseif ($row->status=='tersimpan') {
								echo '<span class="badge badge-warning">Tersimpan</span>';
							}
						?>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	  </div>
	</div><!-- End Data Kegiatan Pengabdian Kepada Masyarakat -->

	<!-- Data Kegiatan yang Belum diinput Kategori Kegiatan -->
	<div class="col-xl-6 col-sm-12 mb-3">
	  <div class="card">
		<P>
			<center><strong>Data Kegiatan yang Belum diinput Kategori Kegiatan</strong></center>
		</P>
		<div class="card-body">
			<table class="table">
				<thead class="table table-striped">
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama Kegiatan</th>
						<th scope="col">Organisasi</th>
						<th scope="col">Status</th>
					</tr>
				</thead>
				<tbody>
				<?php $no=1;
					foreach($data_kategori_blank as $row){ ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row->nama ?></td>
						<td><?php echo $row->ormawa ?></td>
						<td><?php
							if ($row->status=='') {
								echo '<span class="badge badge-danger">Perlu diinput Status</span>';
							}else if ($row->status=='terpublikasi') {
								echo '<span class="badge badge-success">Terpublikasi</span>';
							}elseif ($row->status=='tersimpan') {
								echo '<span class="badge badge-warning">Tersimpan</span>';
							}
						?>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	  </div>
	</div><!-- End Data Kegiatan yang Belum diinput Kategori Kegiatan -->

</div>