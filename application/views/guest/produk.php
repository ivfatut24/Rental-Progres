<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('guest/header');
?>
<div class="width mx-auto mt-64 pt-4">

    <!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <h2 class="text-uppercase">Produk</h2>
    <!--== Page Title Area End ==-->
    

    <!--== Gallery Page Content Start ==-->
    <section id="gallery-page-content" class="section-padding ">
        <div class="container p-0">
					<div class="popular-cars-wrap">
						<!-- Filtering Menu -->
						<div class="popucar-menu text-center">
							<a href="#" data-filter="*" class="active">all</a>
							<a href="#" data-filter=".tenda">Tenda</a>
							<a href="#" data-filter=".equip">Equipment Rent</a>
							
						</div>
						<!-- Filtering Menu -->
       			
						<div class="row popular-car-gird">
							<!-- Single Popular Car Start -->
                            <div class="col-lg-3 col-md-4 tenda sedan">
                                <a class="product-item" href="<?php echo base_url("detail") ?>">
                                    <img src="<?php echo base_url() ?>assets/uploads/Folder baru/IMG-20191216-WA0035.jpg">
                                    <div class="product-title">Bestway Monodome Pavilio X2</div>
                                    <div class="product-price">Rp100.000/per day</div>
                                </a>
                            </div>
                            <!-- Single Popular Car End -->
                            <!-- Single Popular Car Start -->
                            <div class="col-lg-3 col-md-4 tenda sedan">
                                <a class="product-item">
                                    <img src="<?php echo base_url() ?>assets/uploads/Folder baru/IMG-20191216-WA0036.jpg">
                                    <div class="product-title">Great Outdoor Flyair</div>
                                    <div class="product-price">Rp100.000/per day</div>
                                </a>
                            </div>
                            <!-- Single Popular Car End -->
                            <!-- Single Popular Car Start -->
                            <div class="col-lg-3 col-md-4 tenda sedan">
                                <a class="product-item">
                                    <img src="<?php echo base_url() ?>assets/uploads/Folder baru/IMG-20191216-WA0037.jpg">
                                    <div class="product-title">Great Outdoor Explorer 2</div>
                                    <div class="product-price">Rp125.000/per day</div>
                                </a>
                            </div>
                            <!-- Single Popular Car End -->
                            <!-- Single Popular Car Start -->
                            <div class="col-lg-3 col-md-4 equip sedan">
                                <a class="product-item">
                                    <img src="<?php echo base_url() ?>assets/uploads/Folder baru/IMG-20191216-WA0038.jpg">
                                    <div class="product-title">LCD Proyektor, HT Digital</div>
                                    <div class="product-price">Rp200.000/per day</div>
                                </a>
                            </div>
							<!-- Single Popular Car End -->

							

						</div>
        			</div>
        </div>
    </section>
    <!--== Gallery Page Content End ==-->
</div>   
<?php $this->load->view('guest/footer'); ?>