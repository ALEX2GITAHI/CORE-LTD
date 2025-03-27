<?php
include 'header.php'; // Includes the header file
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<!-- Shopping Cart Area End --><!-- Shopping Cart Area Start -->
<div class="Shopping-cart-area pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="li-product-remove">No</th>                                    
                                    <th class="li-product-thumbnail">Image</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="li-product-price">Unit Price</th>
                                    <th class="li-product-quantity">Quantity</th>
                                    <th class="li-product-subtotal">Total</th>
                                    <th class="li-product-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody id="cart-body">
                                <!-- Injected via JS -->
                            </tbody>
                        </table>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Cart Totals</h2>
                                <ul>                 
                                    <li>Total: <span id="full-cart-total">0</span></li>
                                </ul>
                                <a href="checkout.php" class="btn btn-primary btn-block mt-3">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- Shopping Cart Area End -->

<?php
include 'footer.php'; // Includes the footer file
?>