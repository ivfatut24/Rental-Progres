<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	$this->load->view('customer/header');
?>   
  	<!--== Page Title Area Start ==-->
	<section id="page-title-area" class="section-padding overlay">
		<div class="container">
			<div class="row">
				<!-- Page Title Start -->
				<div class="col-lg-12">
					<div class="section-title  text-center">
						<h2>Keranjang</h2>
						<span class="title-line"><i class="fa fa-tree"></i></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</div>
				<!-- Page Title End -->
			</div>
		</div>
	</section>
	<!--== Page Title Area End ==-->

    <!-- Page -->
    <div class="page-area cart-page spad">
        <div class="container">
            <div class="cart-table">
                <table>
                    <thead>
                        <tr>
                            <th class="product-th">Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th class="total-th">Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php
						// dd($keranjang);
						if ($keranjang['status']) {
							foreach ($keranjang['result'] as $key => $value) {
					?>
							<tr>
								<td class="product-col">
									<img src="img/product/cart.jpg" alt="">
									<div class="pc-title">
										<h4><?= $value->nama_barang ?></h4>
									</div>
								</td>
								<td class="price-col">Rp <?= $value->harga_sewa ?></td>
								<td class="quy-col">
									<div class="quy-input text-center">
										<span><?= $value->jumlah_barang ?></span>
									</div>
								</td>
								<td class="total-col">Rp <?= $value->jumlah_harga_sewa ?></td>
								<td class="text-center">
									<form action="<?= base_url('customer/keranjang/delete') ?>" method="post">
										<input type="hidden" name="id_temp_detail_transaksi" value="<?= $value->id_temp_detail_transaksi ?>">
										<button type="submit" class="btn btn-outline-light text-danger">
											<span class="fa fa-times-circle"></span>
										</button>
									</form>
								</td>
							</tr>
					<?php
							}
						} else {
					?>
						<tr>
							<td colspan="5" class="text-center text-danger">
								Tidak Ada Produk di Keranjang anda
							</td>
						</tr>
					<?php
						}
					?>
                    </tbody>
                </table>
            </div>
            <div class="row cart-buttons">
                <div class="col-lg-5 col-md-5">
						<a href="<?= base_url('customer/produk') ?>">
							<div class="site-btn btn-continue">Continue shooping</div>
						</a>
                </div>
            </div>
        </div>
        <div class="card-warp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="shipping-info">
                            <h4>Pilihan Pengiriman</h4>
                            <p>Select the one you want</p>
                            <div class="shipping-chooes">
                                <div class="sc-item">
                                    <input type="radio" name="sc" id="one">
                                    <label for="one">Next day delivery<span>$4.99</span></label>
                                </div>
                                <div class="sc-item">
                                    <input type="radio" name="sc" id="two">
                                    <label for="two">Standard delivery<span>$1.99</span></label>
                                </div>
                                <div class="sc-item">
                                    <input type="radio" name="sc" id="three">
                                    <label for="three">Personal Pickup<span>Free</span></label>
                                </div>
                            </div>
                            <h4>Alamat</h4>
                            <p>Enter your cupone code</p>
                            <div class="cupon-input">
                                <input type="text">
                                <button class="site-btn">Apply</button>
                            </div>
                        </div>
                    </div>
                    <div class="offset-lg-2 col-lg-6">
                        <div class="cart-total-details" >
                            <h4>Cart total</h4>
                            <p>Final Info</p>
                            <ul class="cart-total-card">
                                <li>Subtotal<span>Rp <?= isset($keranjang['total_sewa']) ? $keranjang['total_sewa'] : 0 ?></span></li>
                                <li>Shipping<span>Free</span></li>
                                <li class="total">Total<span>$59.90</span></li>
                            </ul>
                            <a class="site-btn btn-full" href='<?php echo base_url("index.php/checkout/checkout"); ?>'>Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page end -->


</div>
</div>
<!-- Sidebar Area End -->
</div>
</div>
</section>
<!--== Car List Area End ==-->

<?php $this->load->view("customer/footer.php") ?>

