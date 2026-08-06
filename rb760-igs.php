<?php
include 'header.php'; // Includes the header file
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container-fluid">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li class="active">Mikrotik RB760iGS hEX S 5x Gigabit Ethernet SFP Dual Core 880MHz CPU</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- content-wraper start -->
<div class="content-wraper">
    <div class="container-fluid">
        <div class="row single-product-area">
            <div class="col-lg-5 col-md-6">
                <!-- Product Details Left -->
                <div class="product-details-left">
                    <div class="product-details-images slider-navigation-1">
                        <div class="lg-image">
                            <a class="popup-img venobox vbox-item" href="images/product/small-size/rb760igs 1.webp"
                                data-gall="myGallery">
                                <img src="images/product/small-size/rb760igs 1.webp" alt="product image" />
                            </a>
                        </div>
                        <div class="lg-image">
                            <a class="popup-img venobox vbox-item" href="images/product/small-size/rb760igs 2.jpg"
                                data-gall="myGallery">
                                <img src="images/product/small-size/rb760igs 2.jpg" alt="product image" />
                            </a>
                        </div>
                        <div class="lg-image">
                            <a class="popup-img venobox vbox-item" href="images/product/small-size/rb760igs 3.webp"
                                data-gall="myGallery">
                                <img src="images/product/small-size/rb760igs 3.webp" alt="product image" />
                            </a>
                        </div>
                        <div class="lg-image">
                            <a class="popup-img venobox vbox-item" href="images/product/small-size/rb760igs 1.webp"
                                data-gall="myGallery">
                                <img src="images/product/small-size/rb760igs 1.webp" alt="product image" />
                            </a>
                        </div>
                    </div>
                    <div class="product-details-thumbs slider-thumbs-1">
                        <div class="sm-image">
                            <img src="images/product/small-size/rb760igs 1.webp" alt="product image thumb" />
                        </div>
                        <div class="sm-image">
                            <img src="images/product/small-size/rb760igs 2.jpg" alt="product image thumb" />
                        </div>
                        <div class="sm-image">
                            <img src="images/product/small-size/rb760igs 3.webp" alt="product image thumb" />
                        </div>
                        <div class="sm-image">
                            <img src="images/product/small-size/rb760igs 2.jpg" alt="product image thumb" />
                        </div>
                        <div class="sm-image">
                            <img src="images/product/small-size/rb760igs 3.webp" alt="product image thumb" />
                        </div>
                    </div>
                </div>
                <!--// Product Details Left -->
            </div>

            <div class="col-lg-7 col-md-6">
                <div class="product-details-view-content pt-60">
                    <div class="product-info">
                        <h4>
                            <a class="product_name">Mikrotik RB760iGS hEX S 5x</a>
                        </h4>
                        <span class="product-details-ref">Reference: Mik</span>
                        <div class="rating-box pt-20">
                            <ul class="rating rating-with-review-item">
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                <li class="review-item"><a href="#">Read Review</a></li>
                                <li class="review-item"><a href="#">Write Review</a></li>
                            </ul>
                        </div>
                        <div class="price-box pt-20">
                            <span class="new-price new-price-2">Ksh. 11,500</span>
                        </div>
                        <div class="product-desc">
                            <p>
                                <span>
                                    <ul>
                                        <li><b>600 MHz CPU:</b>Efficient processing power for smooth network
                                            performance.</li>
                                        <li><b>5 Gigabit Ethernet Ports:</b>Provides high-speed, stable wired
                                            connections for multiple devices.</li>
                                        <li><b>Robust Security:</b>Includes strong encryption and access control for a
                                            secure network.</li>
                                        <li><b>RouterOS Support:</b>Advanced network management with firewall, VPN, and
                                            traffic control features.)</li>

                                    </ul>
                                </span>
                            </p>
                        </div>
                        <!-- ✅ Add to Cart Button -->
                        <div class="add-to-cart-area pt-30">
                            <button class="single-product-add-to-cart">
                                <a href="#" class="add-to-cart-link">
                                    <i class="fa fa-shopping-cart"></i> Add to Cart
                            </button>
                        </div>
                    </div>
                    <div class="single-add-to-cart">

                        <div class="product-additional-info pt-25">
                            <a href="#" id="whatsapp-link" target="_blank"
                                style="background-color:#25D366;color:#fff;padding:10px 15px;text-decoration:none;border-radius:5px;display:inline-block;">
                                Click to Order on WhatsApp
                            </a>
                            </a> <br><br>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {

                                    const whatsappBtn = document.getElementById("whatsapp-link");

                                    if (!whatsappBtn) {
                                        console.log("WhatsApp button not found.");
                                        return;
                                    }

                                    whatsappBtn.addEventListener("click", async function(e) {

                                        e.preventDefault();

                                        const currentPageURL = window.location.href;

                                        const productName =
                                            document.querySelector(".product_name")?.textContent
                                            .trim() ||
                                            "this product";

                                        const productPrice =
                                            document.querySelector(".new-price")?.textContent.trim() ||
                                            "";

                                        try {

                                            const response = await fetch("whatsapp.php");

                                            if (!response.ok) {
                                                throw new Error("Failed to load whatsapp.php");
                                            }

                                            const phoneNumber = (await response.text()).trim();

                                            console.log("Using Number:", phoneNumber);

                                            const message = encodeURIComponent(
                                                `Hello CORE LTD
I'm interested in buying:

Product: ${productName}
Price: ${productPrice}

Link: ${currentPageURL}`
                                            );

                                            window.open(
                                                `https://wa.me/${phoneNumber}?text=${message}`,
                                                "_blank"
                                            );

                                        } catch (error) {

                                            console.error(error);
                                            alert("Error: " + error.message);

                                        }

                                    });

                                });
                            </script>

                        </div>
                        <a class="wishlist-btn" href="#"><i class="fa fa-heart-o"></i>Add to wishlist</a>
                        <div class="product-social-sharing pt-25">
                            <ul>
                                <li class="facebook">
                                    <a href="#"><i class="fab fa-facebook"></i>Facebook</a>
                                </li>
                                <li class="twitter">
                                    <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                                </li>
                                <li class="google-plus">
                                    <a href="#"><i class="fab fa-tiktok"></i>TikTok</a>
                                </li>
                                <li class="instagram">
                                    <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- content-wraper end -->

<!-- Begin Li's Laptop Product Area -->
<section class="product-area li-laptop-product pt-30 pb-50">
    <div class="container-fluid">
        <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
                <div class="li-section-title">
                    <h2>
                        <span>Other Products in the same Category:</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="product-active owl-carousel">
                        <div class="col-lg-12">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="tenda-f3.php">
                                        <img src="images/product/small-size/Tenda F3.jpg" alt="Li's Product Image" />
                                    </a>

                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="routers.php">Router</a>
                                            </h5>
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star">
                                                        <i class="fa fa-star-o"></i>
                                                    </li>
                                                    <li class="no-star">
                                                        <i class="fa fa-star-o"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h4>
                                            <a class="product_name" href="tenda-f3.php">Tenda-F3</a>
                                        </h4>
                                        <div class="price-box">
                                            <span class="new-price">Ksh. 1,350</span>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul class="add-actions-link">
                                            <li class="add-to-cart">
                                                <a href="#" class="add-to-cart-link">
                                                    <i class="fa fa-shopping-cart"></i> <!-- Cart Icon -->

                                            <li>
                                                <a class="links-details" href="#"><i
                                                        class="fa fa-heart-o"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>
                        <div class="col-lg-12">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="tenda-f6.php">
                                        <img src="images/product/small-size/tenda-f6 front.jpg"
                                            alt="Li's Product Image" />
                                    </a>

                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="routers.php">Router</a>
                                            </h5>
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star">
                                                        <i class="fa fa-star-o"></i>
                                                    </li>
                                                    <li class="no-star">
                                                        <i class="fa fa-star-o"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h4>
                                            <a class="product_name" href="tenda-f6.php">Tenda-F6</a>
                                        </h4>
                                        <div class="price-box">
                                            <span class="new-price">Ksh. 1,550</span>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul class="add-actions-link">
                                            <li class="add-to-cart">
                                                <a href="#" class="add-to-cart-link">
                                                    <i class="fa fa-shopping-cart"></i> <!-- Cart Icon -->

                                            <li>
                                                <a class="links-details" href="#"><i
                                                        class="fa fa-heart-o"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>
                        <div class="col-lg-12">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="tenda-ac5.php">
                                        <img src="images/product/small-size/Tenda-AC5-front.jpg"
                                            alt="Li's Product Image" />
                                    </a>

                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="routers.php">Router</a>
                                            </h5>
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star">
                                                        <i class="fa fa-star-o"></i>
                                                    </li>
                                                    <li class="no-star">
                                                        <i class="fa fa-star-o"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h4>
                                            <a class="product_name" href="tenda-ac5.php">Tenda AC5</a>
                                        </h4>
                                        <div class="price-box">
                                            <span class="new-price new-price-2">Ksh. 3,500</span>
                                            <span class="old-price">Ksh. 4,000</span>
                                            <span class="discount-percentage">-7%</span>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul class="add-actions-link">
                                            <li class="add-to-cart">
                                                <a href="#" class="add-to-cart-link">
                                                    <i class="fa fa-shopping-cart"></i> <!-- Cart Icon -->

                                            <li>
                                                <a class="links-details" href="#"><i
                                                        class="fa fa-heart-o"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>
                        <div class="col-lg-12">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="tenda-ac10.php">
                                        <img src="images/product/small-size/tenda ac10 all.jpg"
                                            alt="Li's Product Image" />
                                    </a>

                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="routers.php">Router</a>
                                            </h5>
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star">
                                                        <i class="fa fa-star-o"></i>
                                                    </li>
                                                    <li class="no-star">
                                                        <i class="fa fa-star-o"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h4>
                                            <a class="product_name" href="tenda-ac10.php">Tenda-AC10</a>
                                        </h4>
                                        <div class="price-box">
                                            <span class="new-price new-price-2">Ksh. 4,500</span>
                                            <span class="old-price">Ksh. 5,000</span>
                                            <span class="discount-percentage">-8%</span>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul class="add-actions-link">
                                            <li class="add-to-cart">
                                                <a href="#" class="add-to-cart-link">
                                                    <i class="fa fa-shopping-cart"></i> <!-- Cart Icon -->

                                            <li>
                                                <a class="links-details" href="#"><i
                                                        class="fa fa-heart-o"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>
                        <div class="col-lg-12">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="tp-link-840.php">
                                        <img src="images/product/small-size/tplink front.webp"
                                            alt="Li's Product Image" />
                                    </a>

                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="routers.php">Router</a>
                                            </h5>
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star">
                                                        <i class="fa fa-star-o"></i>
                                                    </li>
                                                    <li class="no-star">
                                                        <i class="fa fa-star-o"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h4>
                                            <a class="product_name" href="tp-link-840.php">TP-Link 840N</a>
                                        </h4>
                                        <div class="price-box">
                                            <span class="new-price">Ksh. 1,750</span>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul class="add-actions-link">
                                            <li class="add-to-cart">
                                                <a href="#" class="add-to-cart-link">
                                                    <i class="fa fa-shopping-cart"></i> <!-- Cart Icon -->

                                            <li>
                                                <a class="links-details" href="#"><i
                                                        class="fa fa-heart-o"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>
                        <div class="col-lg-12">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="tp-link-844.php">
                                        <img src="images/product/small-size/tp link844 front.jpg"
                                            alt="Li's Product Image" />
                                    </a>

                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="routers.php">Router</a>
                                            </h5>
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star">
                                                        <i class="fa fa-star-o"></i>
                                                    </li>
                                                    <li class="no-star">
                                                        <i class="fa fa-star-o"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h4>
                                            <a class="product_name" href="tp-link-844.php">TP-Link 844N</a>
                                        </h4>
                                        <div class="price-box">
                                            <span class="new-price new-price-2">Ksh. 1,450</span>
                                            <span class="old-price">Ksh. 1,550</span>
                                            <span class="discount-percentage">-5%</span>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul class="add-actions-link">
                                            <li class="add-to-cart">
                                                <a href="#" class="add-to-cart-link">
                                                    <i class="fa fa-shopping-cart"></i> <!-- Cart Icon -->

                                            <li>
                                                <a class="links-details" href="#"><i
                                                        class="fa fa-heart-o"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Li's Section Area End Here -->
        </div>
    </div>
</section>
<!-- Li's Laptop Product Area End Here -->
<?php
include 'footer.php'; // Includes the footer file
?>