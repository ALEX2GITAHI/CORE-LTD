<!DOCTYPE html>
<html class="no-js" lang="zxx">
<!-- index-231:32-->

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>CORE LTD</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/core.png" />
  <!-- Material Design Iconic Font-V2.2.0 -->
  <link rel="stylesheet" href="css/material-design-iconic-font.min.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <!-- Font Awesome Stars-->
  <link rel="stylesheet" href="css/fontawesome-stars.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <!-- Meanmenu CSS -->
  <link rel="stylesheet" href="css/meanmenu.css" />
  <!-- owl carousel CSS -->
  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <!-- Slick Carousel CSS -->
  <link rel="stylesheet" href="css/slick.css" />
  <!-- Animate CSS -->
  <link rel="stylesheet" href="css/animate.css" />
  <!-- Jquery-ui CSS -->
  <link rel="stylesheet" href="css/jquery-ui.min.css" />
  <!-- Venobox CSS -->
  <link rel="stylesheet" href="css/venobox.css" />
  <!-- Nice Select CSS -->
  <link rel="stylesheet" href="css/nice-select.css" />
  <!-- Magnific Popup CSS -->
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <!-- Bootstrap V4.1.3 Fremwork CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- Helper CSS -->
  <link rel="stylesheet" href="css/helper.css" />
  <!-- Main Style CSS -->
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="css/responsive.css" />
  <!-- Modernizr js -->
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
  <!--[if lt IE 8]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve
        your experience.
      </p>
    <![endif]-->
  <!-- Begin Body Wrapper -->
  <div class="body-wrapper">
    <!-- Begin Header Area -->
    <header>
      <!-- Begin Header Top Area -->
      <div class="header-top">
        <div class="container">
          <div class="row">
            <!-- Begin Header Top Left Area -->
            <div class="col-lg-3 col-md-4">
              <div class="header-top-left">
                <ul class="phone-wrap">
                  <li>
                    <span>Telephone Enquiry:</span>
                    <a href="tel:+254792570000">
                      <i class="fas fa-phone-alt"></i>
                      <b>(+254) 792 570 000</b>
                    </a>
                    &nbsp;
                    <a href="https://wa.me/254792570000" target="_blank">
                      <i class="fab fa-whatsapp" style="color: green; font-size: 18px"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Header Top Left Area End Here -->
            <!-- Begin Header Top Right Area -->
            <div class="col-lg-9 col-md-8">
              <div class="header-top-right">
                <ul class="ht-menu">
                  <!-- Begin Setting Area -->
                  <li>
                    <div class="ht-setting-trigger"><span>Setting</span></div>
                    <div class="setting ht-setting">
                      <ul class="ht-setting-list">
                        <li><a href="login-register.html">My Account</a></li>
                        <li><a href="checkout.php">Checkout</a></li>
                        <li><a href="login-register.html">Sign In</a></li>
                      </ul>
                    </div>
                  </li>
                  <!-- Setting Area End Here -->
                  <!-- Begin Currency Area -->
                  <!-- Currency Area End Here -->
                  <!-- Begin Language Area -->
                  <!-- Language Area End Here -->
                </ul>
              </div>
            </div>
            <!-- Header Top Right Area End Here -->
          </div>
        </div>
      </div>
      <!-- Header Top Area End Here -->
      <!-- Begin Header Middle Area -->
      <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
        <div class="container">
          <div class="row">
            <!-- Begin Header Logo Area -->
            <div class="col-lg-3">
              <div class="logo pb-sm-30 pb-xs-30">
                <a href="index.php">
                  <img src="images/core_logo.png" alt="Core Logo" width="100" height="50" />
                </a>
              </div>
            </div>
            <!-- Header Logo Area End Here -->
            <!-- Begin Header Middle Right Area -->
            <di class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
              <!-- Begin Header Middle Searchbox Area -->
              <form action="#" class="hm-searchbox" onsubmit="return false;">

                <input type="text" id="search-box" placeholder="Enter your search key ..." autocomplete="off" />
                <button class="li-btn" type="submit">
                  <i class="fa fa-search"></i>
                </button>
                <ul id="search-results"></ul>
              </form>

              <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


              <!-- Header Middle Searchbox Area End Here -->
              <!-- Begin Header Middle Right Area -->
              <div class="header-middle-right">
                <ul class="hm-menu">
                  <!-- Begin Header Middle Wishlist Area -->
                  <li class="hm-wishlist">
                    <a href="wishlist.html">
                      <span class="cart-item-count wishlist-item-count">0</span>
                      <i class="fa fa-heart-o"></i>
                    </a>
                  </li>
                  <!-- Header Middle Wishlist Area End Here -->
                  <!-- Begin Header Mini Cart Area -->
                  <li class="hm-minicart">
                    <div class="hm-minicart-trigger">
                      <span class="item-icon"></span>
                      <span class="item-text">
                        Ksh. <span id="cart-total">0</span>
                        <span class="cart-item-count">0</span>
                      </span>
                    </div>
                    <div class="minicart">
                      <ul class="minicart-product-list" id="cart-items">
                        <!-- Items will be dynamically added here -->
                      </ul>
                      <p class="minicart-total">
                        SUBTOTAL: <span>Ksh. <span id="cart-subtotal">0</span></span>
                      </p>
                      <div class="minicart-button">
                        <a href="shopping-cart.php" id="view-full-cart" class="li-button li-button-dark li-button-fullwidth li-button-sm">
                          <span>View Full Cart</span>
                        </a>
                        <a href="checkout.php" id="view-full-cart" class="li-button li-button-fullwidth li-button-sm">
                          <span>Checkout</span>
                        </a>
                      </div>
                    </div>
                  </li>
                  <!-- Header Mini Cart Area End Here -->
                </ul>
              </div>
              <!-- Header Middle Right Area End Here -->
          </div>
          <!-- Header Middle Right Area End Here -->
        </div>
      </div>
  </div>
  <!-- Header Middle Area End Here -->
  <!-- Begin Header Bottom Area -->
  <div class="header-bottom header-sticky d-none d-lg-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- Begin Header Bottom Menu Area -->
          <div class="hb-menu hb-menu-2 d-xl-block">
            <nav>
              <ul>
                <li class="">
                  <a href="index.php">Home</a>
                </li>
                <li class="megamenu-holder">
                  <a href="shop-left-sidebar.html">Shop</a>
                  <ul class="megamenu hb-megamenu">
                    <li>
                      <a href="shop-left-sidebar.html">Networking</a>
                      <ul>
                        <li>
                          <a href="routers.php">Routers</a>
                        </li>
                        <li>
                          <a href="switch.php">Switches</a>
                        </li>
                        <li>
                          <a href="access-points.php">Access Points</a>
                        </li>
                        <li>
                          <a href="miktrotik.php">Mikrotik</a>
                        </li>
                        <li><a href="shop-list.html">Climbers</a></li>
                        <li>
                          <a href="shop-list-left-sidebar.html">Patch-Codes</a>
                        </li>
                        <li>
                          <a href="shop-list-right-sidebar.html">Safety Tools</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="single-product-gallery-left.html">Accessories</a>
                      <ul>
                        <li>
                          <a href="single-product-carousel.html">Mobile Accessories</a>
                        </li>
                        <li>
                          <a href="single-product-gallery-left.html">Computer Accessories</a>
                        </li>
                        <li>
                          <a href="single-product-gallery-right.html">CCTV Devices</a>
                        </li>
                        <li>
                          <a href="single-product-gallery-right.html">Tools</a>
                        </li>
                        <li>
                          <a href="single-product-gallery-right.html">Gaming</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="single-product.html">Stationery</a>
                      <ul>
                        <li>
                          <a href="single-product.html">Envelops</a>
                        </li>
                        <li>
                          <a href="single-product-sale.html">Exercise Books</a>
                        </li>
                        <li>
                          <a href="single-product-group.html">Rim Papers</a>
                        </li>
                        <li>
                          <a href="single-product-normal.html">Sticker Papers</a>
                        </li>
                        <li>
                          <a href="single-product-affiliate.html">PVC Papers</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class=""><a href="blog-left-sidebar.html">Blog</a></li>
                <li class="megamenu-static-holder">
                  <a href="index.html">Pages</a>
                  <ul class="megamenu hb-megamenu">
                    <li>
                      <a href="blog-left-sidebar.html">Networking</a>
                      <ul>
                        <li>
                          <a href="blog-2-column.html">Mikrotik</a>
                        </li>
                        <li>
                          <a href="access-points.php">Access Points</a>
                        </li>
                        <li>
                          <a href="blog-left-sidebar.html">Routers</a>
                        </li>
                        <li>
                          <a href="cat6-cables.php">CAT-6 Cables</a>
                        </li>
                        <li><a href="blog-list.html">Climbers</a></li>
                        <li>
                          <a href="blog-list-left-sidebar.html">Closures</a>
                        </li>
                        <li>
                          <a href="blog-list-right-sidebar.html">Switches</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="blog-details-left-sidebar.html">Stationaries</a>
                      <ul>
                        <li>
                          <a href="blog-details-left-sidebar.html">Mobile Accessories</a>
                        </li>
                        <li>
                          <a href="blog-details-right-sidebar.html">Computer Accessories </a>
                        </li>
                        <li>
                          <a href="blog-audio-format.html">Rim Papers</a>
                        </li>
                        <li>
                          <a href="blog-video-format.html">Envelops</a>
                        </li>
                        <li>
                          <a href="blog-gallery-format.html">Gaming</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="index.php">Account</a>
                      <ul>
                        <li>
                          <a href="login-register.html">My Account</a>
                        </li>
                        <li><a href="checkout.html">Blog</a></li>
                        <li><a href="checkout.php">Checkout</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                        <li>
                          <a href="shopping-cart.html">Shopping Cart</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="index.php">Profile</a>
                      <ul>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="404.php">404 Error</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="about-us.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <!-- Begin Header Bottom Menu Information Area -->
                <!-- Header Bottom Menu Information Area End Here -->
              </ul>
            </nav>
          </div>
          <!-- Header Bottom Menu Area End Here -->
        </div>
      </div>
    </div>
  </div>
  <!-- Header Bottom Area End Here -->
  <!-- Begin Mobile Menu Area -->
  <div class="mobile-menu-area d-lg-none d-xl-none col-12">
    <div class="container">
      <div class="row">
        <div class="mobile-menu"></div>
      </div>
    </div>
  </div>
  <!-- Mobile Menu Area End Here -->
  </header>
  <!-- Header Area End Here -->
  <!-- Begin Slider With Category Menu Area -->
  <script>
    $(document).ready(function() {
      let items = [{
          name: "Routers",
          url: "routers.php"
        },
        {
          name: "Easenet Cat 6 Indoor Cable",
          url: "easenet.php"
        },
        {
          name: "RDCOM Cat 6 Indoor Cable",
          url: "rdcom.php"
        },
        {
          name: "CP Cat 6 Indoor Cable",
          url: "cp-cable.php"
        },
        {
          name: "RDCOM Cat 6 Outdoor Cable",
          url: "rdcom-oudoor.php"
        },
        {
          name: "TP-Link EAP-255 outdoor",
          url: "tp-link-eap255-outdoor.php"
        },
        {
          name: "SHK Cat 6 Indoor Cable",
          url: "shk-cable.php"
        },
        {
          name: "Gigalan Cat 6 Indoor Cable",
          url: "gigalan-cable.php"
        },
        {
          name: "Tenda OAP-1200",
          url: "tenda-oap1200.php"
        },
        {
          name: "Scoop Cat 6 Indoor Cable",
          url: "scoop-cable.php"
        },
        {
          name: "Tenda-F3",
          url: "tenda-f3.php"
        },
        {
          name: "Tenda-F6",
          url: "tenda-f6.php"
        },
        {
          name: "Ruijie RG-EW300N Router",
          url: "ruijie-router.php"
        },
        {
          name: "Tenda-AC5",
          url: "tenda-ac5.php"
        },
        {
          name: "Tenda-AC8",
          url: "tenda-ac8.php"
        },
        {
          name: "Lite Beam",
          url: "lite-beam-m5.php"
        },
        {
          name: "Ruijie-RAP6262(G)",
          url: "ruijie-6262g.php"
        },
        {
          name: "Power Beam",
          url: "power-beam.php"
        },
        {
          name: "Tenda-AC10",
          url: "tenda-ac10.php"
        },
        {
          name: "Access Points",
          url: "access-points.php"
        },
        {
          name: "Tenda-4G Lite",
          url: "tenda-4g.php"
        },
        {
          name: "D-Link Router",
          url: "d-link.php"
        },
        {
          name: "Tp-Link 844N",
          url: "tp-link-844.php"
        },
        {
          name: "Tp-Link 840N",
          url: "tp-link-840.php"
        },
        {
          name: "Huawei-Gpon",
          url: "huawei-expon.php"
        },
        {
          name: "Huawei EPon",
          url: "huawei-expon.php"
        },
        {
          name: "Mikrotik RB951",
          url: "rb951.php"
        },
        {
          name: "Mikrotik RB941-Hap-Lite",
          url: "rb941.php"
        },
        {
          name: "Mikrotik RB760-IGS",
          url: "rb760-igs.php"
        },
        {
          name: "Mikrotik RB4011",
          url: "rb4011.php"
        },
        {
          name: "Crimping Tools",
          url: "crimping-tools.php"
        },
        {
          name: "Jakemy Crimping Tool",
          url: "jakemy-crimping-tool.php"
        },
        {
          name: "Dual-Modular Crimping Tool",
          url: "dual-modular-crimping-tool.php"
        },
        {
          name: "Mikrotik RB260GS",
          url: "rbs60gs.php"
        },
        {
          name: "Mikrotik SXTSQ Series",
          url: "ssxtsq-series.php"
        },
        {
          name: "Mikrotiks",
          url: "mikrotik.php"
        },
        {
          name: "Mikrotik L009",
          url: "mikrotik-l009.php"
        }
      ];

      function showResults(query = "") {
        let resultsContainer = $("#search-results");
        resultsContainer.empty();

        // Always sort alphabetically before displaying
        let sortedItems = [...items].sort((a, b) => a.name.localeCompare(b.name));
        let filteredItems = sortedItems.filter(item => item.name.toLowerCase().includes(query));

        if (filteredItems.length > 0) {
          filteredItems.forEach(item => {
            resultsContainer.append(`<li class="search-item" data-url="${item.url}">${item.name}</li>`);
          });
          resultsContainer.show();
        } else {
          resultsContainer.hide();
        }
      }

      // Show all items in alphabetical order when clicking inside search box
      $("#search-box").on("focus", function() {
        showResults();
      });

      // Filter results while typing, still in alphabetical order
      $("#search-box").on("input", function() {
        let query = $(this).val().toLowerCase();
        showResults(query);
      });

      // Navigate when clicking a search result
      $(document).on("click", ".search-item", function() {
        window.location.href = $(this).data("url");
      });

      // Hide search results when clicking outside
      $(document).click(function(event) {
        if (!$(event.target).closest("#search-box, #search-results").length) {
          $("#search-results").hide();
        }
      });
    });
  </script>
  <style>
    .hm-searchbox {
      position: relative;
      width: 60%;
      max-width: 400px;
    }

    #search-results {
      position: absolute;
      top: 100%;
      left: 0;
      width: 100%;
      background: white;
      border: 1px solid #ccc;
      display: none;
      max-height: 200px;
      overflow-y: auto;
      z-index: 1000;
      border-radius: 5px;
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .search-item {
      padding: 10px;
      cursor: pointer;
      border-bottom: 1px solid #eee;
      transition: background 0.3s, color 0.3s;
    }

    .search-item:hover {
      background: #5ccdf0;
      color: white;
    }
  </style>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      let cart = JSON.parse(localStorage.getItem("cart")) || [];

      function saveCart() {
        localStorage.setItem("cart", JSON.stringify(cart));
      }

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

          // ✅ Use fallback image if undefined
          let imageUrl = item.image || 'assets/images/default.png';

          cartContainer.append(`
            <li style="display: flex; align-items: center; gap: 10px;">
                <img src="${imageUrl}" alt="${item.name}" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;">
                <div class="minicart-product-details" style="flex-grow: 1;">
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

      function updateFullCart() {
        let cartBody = $("#cart-body");
        let fullSubtotal = $("#cart-subtotal");
        let fullTotal = $("#full-cart-total");

        cartBody.empty();

        if (cart.length === 0) {
          cartBody.append('<tr><td colspan="6" class="text-center">Your cart is empty.</td></tr>');
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
                    <td>${index + 1}</td>
                    <td class="li-product-thumbnail">
                        <img src="${item.image || 'assets/images/default.png'}" alt="" style="width:50px; height:50px; object-fit:cover; border-radius:5px;">
                    </td>
                    <td class="cart-product-name">${item.name}</td>
                    <td class="li-product-price">Ksh. ${item.price.toLocaleString()}</td>
                    <td class="quantity">
                        <input type="number" min="1" value="${item.quantity}" data-index="${index}" class="form-control quantity-input" />
                    </td>
                    <td class="product-subtotal">Ksh. ${(itemTotal).toLocaleString()}</td>
                    <td class="li-product-remove">
                        <button class="remove-item btn btn-sm btn-danger" data-index="${index}">
                            <i class="fa fa-times"></i>
                        </button>
                    </td>
                </tr>
            `);
        });

        fullSubtotal.text(totalCost.toLocaleString());
        fullTotal.text(totalCost.toLocaleString());
      }

      function updateAllCarts() {
        updateMiniCart();
        updateFullCart();
        saveCart();
      }

      // ✅ Add to cart from product list
      $(".add-to-cart").on("click", function(e) {
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
          cart.push({
            name: itemName,
            price: itemPrice,
            quantity: 1,
            image: itemImage
          });
        }

        updateAllCarts();
        $("html, body").animate({
          scrollTop: 0
        }, 800);
      });

      $(".single-product-add-to-cart").on("click", function(e) {
        e.preventDefault();

        let productContainer = $(this).closest(".product-details-view-content");
        let itemName = productContainer.find(".product_name").text().trim();
        let itemPriceText = productContainer.find(".new-price").text().replace("Ksh.", "").replace(",", "").trim();
        let itemPrice = parseInt(itemPriceText);

        let itemImage = $(".product-details-left .lg-image img").attr("src") || 'assets/images/default.png';

        console.log("💥 Add to Cart Debug →", {
          itemName,
          itemPrice,
          itemImage
        });

        if (!itemName || isNaN(itemPrice)) {
          alert("Error: Unable to add item to cart.");
          return;
        }

        let existingItem = cart.find(item => item.name === itemName);
        if (existingItem) {
          existingItem.quantity += 1;
        } else {
          cart.push({
            name: itemName,
            price: itemPrice,
            quantity: 1,
            image: itemImage
          });
        }

        updateAllCarts();
        $("html, body").animate({
          scrollTop: 0
        }, 800);
      });

      // ✅ Remove item
      $(document).on("click", ".remove-item", function() {
        let index = $(this).data("index");
        cart.splice(index, 1);
        updateAllCarts();
      });

      // ✅ Update quantity
      $(document).on("change", ".quantity-input", function() {
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

      // ✅ Load cart on page load
      updateAllCarts();
    });
  </script>