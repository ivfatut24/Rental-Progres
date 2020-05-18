<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('guest/header');
?>
<div class="width mx-auto mt-64 pt-4">

    <!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <div class="text-black-200">
        <span>Home</span>
        <span>/</span>
        <span>Produk</span>
        <span>/</span>
        <span>Tenda</span>
        <span>/</span>
        <span alt="nama produk">Bestway Monodome Pavillo x2</span>
    </div>
    <!--== Page Title Area End ==-->
    

    <!--== Gallery Page Content Start ==-->
    <section id="gallery-page-content" class="section-padding ">
        <div class="container">
			<div class="row">
                <div class="col-lg-4">
                    <img src="<?php echo base_url() ?>assets/uploads/Folder baru/IMG-20191216-WA0035.jpg">
                </div>
                <div class="offset-lg-1 col-lg-7">
                    <h2 class="text-bold text-uppercase mb-2">Bestway Monodome Pavilio X2</h2>
                    <h4 class="text-black-100 font-weight-normal font-secondary">Rp100.000/per day</h4>
                    <div class="py-64">
                        <h5 class="font-secondary text-black-200 font-weight-normal mb-2"> Description</h5>
                        <p class="text-black-200">
                        Tend Size: 205 x 140 x100cm <br/>
                        Pack Size: 58 x 12 x 12 cm <br/>
                        Weight: 1.5 Kg <br/>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-9">
                            <button class="btn btn-brand btn-lg">Tambah ke keranjang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Gallery Page Content End ==-->
</div>   
<?php $this->load->view('guest/footer'); ?>