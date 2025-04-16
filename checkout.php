<?php
include 'header.php'; // Includes the header file
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!--Checkout Area Strat-->
            <div class="checkout-area pt-60 pb-30">
                <div class="container">
                   
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <form action="#">
                                <div class="checkbox-form">
                                    <h3>Billing Details</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="country-select clearfix">
                                                <label>Country <span class="required">*</span></label>
                                                <select class="nice-select wide">
                                                  <option data-display="Bangladesh">Bangladesh</option>
                                                  <option value="uk">London</option>
                                                  <option value="rou">Romania</option>
                                                  <option value="fr">French</option>
                                                  <option value="de">Germany</option>
                                                  <option value="aus">Australia</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>First Name <span class="required">*</span></label>
                                                <input placeholder="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Last Name <span class="required">*</span></label>
                                                <input placeholder="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Company Name</label>
                                                <input placeholder="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Address <span class="required">*</span></label>
                                                <input placeholder="Street address" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Town / City <span class="required">*</span></label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>State / County <span class="required">*</span></label>
                                                <input placeholder="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Postcode / Zip <span class="required">*</span></label>
                                                <input placeholder="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Email Address <span class="required">*</span></label>
                                                <input placeholder="" type="email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Phone  <span class="required">*</span></label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list create-acc">
                                                <input id="cbox" type="checkbox">
                                                <label>Create an account?</label>
                                            </div>
                                            <div id="cbox-info" class="checkout-form-list create-account">
                                                <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                                <label>Account password  <span class="required">*</span></label>
                                                <input placeholder="password" type="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="different-address">
                                        <div class="ship-different-title">
                                            <h3>
                                                <label>Ship to a different address?</label>
                                                <input id="ship-box" type="checkbox">
                                            </h3>
                                        </div>
                                        <div id="ship-box-info" class="row">
                                            <div class="col-md-12">
                                                <div class="country-select clearfix">
                                                    <label>Country <span class="required">*</span></label>
                                                    <select class="nice-select wide">
                                                      <option data-display="Bangladesh">Bangladesh</option>
                                                      <option value="uk">London</option>
                                                      <option value="rou">Romania</option>
                                                      <option value="fr">French</option>
                                                      <option value="de">Germany</option>
                                                      <option value="aus">Australia</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>First Name <span class="required">*</span></label>
                                                    <input placeholder="" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Last Name <span class="required">*</span></label>
                                                    <input placeholder="" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Company Name</label>
                                                    <input placeholder="" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Address <span class="required">*</span></label>
                                                    <input placeholder="Street address" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Town / City <span class="required">*</span></label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>State / County <span class="required">*</span></label>
                                                    <input placeholder="" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Postcode / Zip <span class="required">*</span></label>
                                                    <input placeholder="" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Email Address <span class="required">*</span></label>
                                                    <input placeholder="" type="email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Phone  <span class="required">*</span></label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order-notes">
                                            <div class="checkout-form-list">
                                                <label>Order Notes</label>
                                                <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6 col-12">
    <div class="your-order card p-4 shadow rounded-3 border-0" style="border: 2px solid #00fefe;">
        <h3 class="mb-4" style="color:rgb(47, 194, 252);">🛒 Your Order</h3>
        <div class="your-order-table table-responsive">
            <table class="table align-middle">
                <thead >
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody id="full-cart-body">
                    <!-- Cart items will be injected here -->
                </tbody>
                <tfoot>
                    <tr class="cart-subtotal">
                        <th colspan="2" class="text-end">Subtotal</th>
                        <td>Ksh. <span class="fw-semibold"  id="full-cart-subtotal">Ksh.0</span></td>
                    </tr>
                    <tr class="order-total">
                        <th colspan="2" class="text-end">Grand Total</th>
                        <td><strong> <span>Ksh.  </span><span class="fw-bold fs-5" id="full-cart-total">Ksh. 0</span></strong></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <a href="checkout.php" class="btn w-100 mt-3 shadow-sm"> 
</div>
    </div>
</div>
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        <div id="accordion">
                                          <div class="card">
                                            <div class="card-header" id="#payment-1">
                                              <h5 class="panel-title">
                                                <a class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                  Direct Bank Transfer.
                                                </a>
                                              </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                              <div class="card-body">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="card">
                                            <div class="card-header" id="#payment-2">
                                              <h5 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                  Cheque Payment
                                                </a>
                                              </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                              <div class="card-body">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="card">
                                            <div class="card-header" id="#payment-3">
                                              <h5 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                  PayPal
                                                </a>
                                              </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                              <div class="card-body">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="order-button-payment">
                                            <input value="Place order" type="submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Checkout Area End-->


            
<?php
include 'footer.php'; // Includes the footer file
?>
<script>
document.addEventListener("DOMContentLoaded", function () {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    // ===== Save Cart to localStorage =====
    function saveCart() {
        localStorage.setItem("cart", JSON.stringify(cart));
    }

    // ===== Update Mini Cart =====
    function updateMiniCart() {
        let cartContainer = $("#cart-items");
        let cartTotal = $("#cart-total");
        let cartSubtotal = $("#cart-subtotal");
        let cartCount = $(".cart-item-count");

        cartContainer.empty();
        if (cart.length === 0) {
            cartContainer.append('<li><p>Your cart is empty.</p></li>');
            cartTotal.text("0");
            cartSubtotal.text("0");
            cartCount.text("0");
            return;
        }

        let totalCost = 0;
        let totalItems = 0;
        cart.forEach((item, index) => {
            let itemTotal = item.price * item.quantity;
            totalCost += itemTotal;
            totalItems += item.quantity;

            cartContainer.append(`
                <li>
                    <div class="minicart-product-details">
                        <h6>${item.name}</h6>
                        <span>Ksh. ${item.price.toLocaleString()} x ${item.quantity}</span>
                    </div>
                    <button class="close remove-item" data-index="${index}">
                        <i class="fa fa-close"></i>
                    </button>
                </li>
            `);
        });

        cartTotal.text(totalCost.toLocaleString());
        cartSubtotal.text(totalCost.toLocaleString());
        cartCount.text(totalItems);
    }

    // ===== Update Full Cart =====
    function updateFullCart() {
        let cartBody = $("#full-cart-body"); // adjusted to match your table
        let fullSubtotal = $("#full-cart-subtotal");
        let fullTotal = $("#full-cart-total");

        cartBody.empty();

        if (cart.length === 0) {
            cartBody.append('<tr><td colspan="5" class="text-center">Your cart is empty.</td></tr>');
            fullSubtotal.text("0");
            fullTotal.text("0");
            return;
        }

        let totalCost = 0;
        cart.forEach((item, index) => {
            let itemTotal = item.price * item.quantity;
            totalCost += itemTotal;

            cartBody.append(`
                <tr>
                    <td>${item.name}</td>                    
                    <td>Ksh. ${item.price.toLocaleString()}</td>
                    <td>Ksh. ${itemTotal.toLocaleString()}</td>                    
                </tr>
            `);
        });

        fullSubtotal.text(totalCost.toLocaleString());
        fullTotal.text(totalCost.toLocaleString());
    }

    // ===== Combined update =====
    function updateAllCarts() {
        updateMiniCart();
        updateFullCart();
        saveCart();
    }

    // ===== Add to Cart =====
    $(".add-to-cart").on("click", function (e) {
        e.preventDefault();

        let itemContainer = $(this).closest(".single-product-wrap");
        let itemName = itemContainer.find(".product_name").first().text().trim();
        let itemPriceText = itemContainer.find(".new-price").first().text().replace("Ksh.", "").replace(",", "").trim();
        let itemImage = itemContainer.find("img").attr("src") || 'assets/images/default.png';
        let itemPrice = parseInt(itemPriceText);

        if (!itemName || isNaN(itemPrice)) {
            alert("Error: Unable to add item to cart.");
            return;
        }

        let existingItem = cart.find(item => item.name === itemName);
        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            cart.push({ name: itemName, price: itemPrice, quantity: 1, image: itemImage });
        }

        updateAllCarts();
        $("html, body").animate({ scrollTop: 0 }, 800);
    });

    // ===== Remove Item from Cart (Both Mini & Full) =====
    $(document).on("click", ".remove-item", function () {
        let index = $(this).data("index");
        cart.splice(index, 1);
        updateAllCarts();
    });

    // ===== Quantity Change =====
    $(document).on("change", ".quantity-input", function () {
        let index = $(this).data("index");
        let newQuantity = parseInt($(this).val());

        if (newQuantity <= 0 || isNaN(newQuantity)) {
            alert("Invalid quantity! Minimum is 1.");
            $(this).val(cart[index].quantity);
            return;
        }

        cart[index].quantity = newQuantity;
        updateAllCarts();
    });

    // ===== Initial Load =====
    updateAllCarts();
});
</script>