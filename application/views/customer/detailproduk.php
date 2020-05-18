<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('customer/header');
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
        <span alt="nama produk"><?= $barang->nama_barang ?></span>
    </div>
    <!--== Page Title Area End ==-->
	<?php
		// dd($barang);
	?>
    <!--== Gallery Page Content Start ==-->
    <section id="gallery-page-content" class="section-padding ">
        <div class="container">
			<div class="row">
                <div class="col-lg-4">
                    <img src="<?php echo base_url() ?>assets/uploads/produk/<?= $barang->gambar_barang ?>">
                </div>
                <div class="offset-lg-1 col-lg-7">
                    <h2 class="text-bold text-uppercase mb-2"><?= $barang->nama_barang ?></h2>
                    <h4 class="text-black-100 font-weight-normal font-secondary">Rp <?= number_format($barang->harga_sewa, 0, ',', '.') ?> /per day</h4>
                    <div class="py-64">
                        <h5 class="font-secondary text-black-200 font-weight-normal mb-2"> Description</h5>
                        <p class="text-black-200">
                        <?= $barang->deskripsi ?><br>
						Ukuran : <?= $barang->ukuran ?><br>
						Stok : <?= $barang->stok ?>
                        </p>
                    </div>
                    <div class="row">
						<form action="" method="post">
							<input type="hidden" name="id_barang" value="<?= $barang->id_barang ?>">
							<div class="col-3">
								<input type="number" class="form-control" name="jumlah_barang" required>
							</div>
							<div class="col-9">
								<input type="submit" class="btn btn-brand btn-lg" value="Tambah Ke Keranjang">
							</div>
						</form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Gallery Page Content End ==-->
</div>   
<?php $this->load->view('customer/footer'); ?>
