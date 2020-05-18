
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
                    <h2>penghantaran</h2>
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
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="product-col">
                                <img src="img/product/cart.jpg" alt="">
                                <div class="pc-title">
                                    <h4>Black Shoulder Bag</h4>
                                    <a href="#">Edit Product</a>
                                </div>
                            </td>
                            <td class="price-col">$59.90</td>
                            <td class="quy-col">
                                <div class="quy-input">
                                    <span>Qty</span>
                                    <input type="number" value="01">
                                </div>
                            </td>
                            <td class="total-col">$59.90</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row cart-buttons">
                <div class="col-lg-5 col-md-5">
                    <div class="site-btn btn-continue">Continue shooping</div>
                </div>
                <div class="col-lg-7 col-md-7 text-lg-right text-left">
                    <div class="site-btn btn-clear">Clear cart</div>
                    <div class="site-btn btn-line btn-update">Update Cart</div>
                </div>
            </div>
        </div>
        <div class="card-warp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="shipping-info">
                            <h4>Pilihan Penghantaran</h4>
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
                                <li>Subtotal<span>$59.90</span></li>
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

<?php $this->load->view("guest/footer.php") ?>

