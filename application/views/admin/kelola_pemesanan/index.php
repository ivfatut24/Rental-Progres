<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('admin/header');
?>
<!-- Right side column. Contains the navbar and content of the page -->
	<aside class="right-side">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Pemesanan
				<small>Administrator</small>
			</h1>
			
			<ol class="breadcrumb">

				<li><a href="#"><i class="fa fa-dashboard"></i> Kelola</a></li>
				<li class="active">Pemesanan</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<br/>
			<!-- Main row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-user"></i> Data Pemesanan </h3> 

						</div>
						<div class="panel-body col-12">
						 <div class="table-responsive">

						  <table id="table" class="table table-hover table-bordered">
							  <thead>
								  <tr>
									<th><center>No </center></th>
									<th><center>No Boking</i></center></th>
									<th><center>Nama Pemesan</center></th>
									<th><center>Nama Barang</center></th>
									<th><center>Tgl Pemesanan</center></th>
									<th><center>Tgl Pengembalian</center></th>
									<th><center>Jumlah Barang</center></th>
									<th><center>Total Sewa</center></th>
									<th><center>Status</center></th>
									<th><center>Tools</center></th>

								</tr>
							</thead>

						</tbody>
						<?php $no=1; ?>
						<!-- <?php foreach ($data as $key) {
							?>
							<tr><td><?php echo $no++; ?></td>
								<td><?php echo $key->nama ?></td>
									<td><?php echo $key->alamat ?></td>
									<td><center><?php echo $key->no_telp ?></center></td>
									<td><center><?php echo $key->username ?></center></td>
									<td><center><div id="thanks"><a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit" href="<?php echo base_url('admin/customer/update/'.$key->id_user)?>"><span class="glyphicon glyphicon-edit"></span></a>  

										<a onclick="return confirm ('Yakin hapus <?php echo $key->nama ?>');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus" href="<?php echo base_url('admin/customer/delete/'.$key->id_user)?>"><span class="glyphicon glyphicon-trash"></a></center>
										</td></tr>

										<?php $no++ ?>
									<?php } ?> -->

								</tbody>
							</table>
						  
					  </div> 
				  </div>
			  </div><!-- col-lg-12--> 
		  </div><!-- /.row (main row) -->

	  </section><!-- /.content -->
  </aside><!-- /.right-side -->
</div><!-- ./wrapper -->
<?php $this->load->view('admin/footer'); ?>
