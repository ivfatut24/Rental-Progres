<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('guest/header');
?>
<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
	<div class="container">
		<div class="row">
			<!-- Page Title Start -->
			<div class="col-lg-12">
				<div class="section-title  text-center">
					<h2>Sign up</h2>
					<span class="title-line"><i class="fa fa-tree"></i></span>
					<p></p>
				</div>
			</div>
			<!-- Page Title End -->
		</div>
	</div>
</section>
<!--== Page Title Area End ==-->

<!--== Login Page Content Start ==-->
<section id="lgoin-page-wrap" class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-8 m-auto">
				<div class="login-page-content">
					<div class="login-form" >
						<img src="<?php echo base_url('assets/cardoor/img/logologin.png') ?>" alt="Ciliung Camp">
						<form action="<?php echo base_url('').''?>" method="post">
							<?php echo $this->session->flashdata('msg');?>
							<div>
								<input type="text" name="namaLengkap" placeholder="Nama Lengkap">
							</div>
							<div>
								<input type="email" name="email" placeholder="Email">
							</div>
							<div>
								<input type="tel" name="noTelpon" placeholder="No Telpon">
							</div>
							<hr>
							<div>
								<input type="text" name="username" placeholder="Username">
							</div>
							<div>
								<input type="password" name="password" placeholder="Password">
							</div>
							<div>
								<input type="password" name="passwordKonfirmasi" placeholder="Konfirmasi Password">
							</div>
							<div class="log-btn">
								<button type="submit"><i class="fa fa-sign-in"></i> Sign Up</button>
							</div>
						</form>
					</div>

					<div class="login-other">
						<span class="or">or</span>
						<p>Sudah punya akun? <a href='<?php echo base_url("login"); ?>'>Log in</a></p>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<!--== Login Page Content End ==-->
<?php $this->load->view('guest/footer'); ?>
