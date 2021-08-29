<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Page - Ustora Demo</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!--Apple Pay Button Style-->
    <script src="https://applepay.cdn-apple.com/jsapi/v1/apple-pay-sdk.js"></script>

    <style>
        @supports (-webkit-appearance: -apple-pay-button) {
            .apple-pay-button-with-text {
                display: inline-block;
                -webkit-appearance: -apple-pay-button;
                -apple-pay-button-type: buy;
            }

            .apple-pay-button-with-text>* {
                display: none;
            }

            .apple-pay-button-black-with-text {
                -apple-pay-button-style: black;
            }

            .apple-pay-button-white-with-text {
                -apple-pay-button-style: white;
            }

            .apple-pay-button-white-with-line-with-text {
                -apple-pay-button-style: white-outline;
            }
        }

        @supports not (-webkit-appearance: -apple-pay-button) {
            .apple-pay-button-with-text {
                --apple-pay-scale: 1;
                /* (height / 32) */
                display: inline-flex;
                justify-content: center;
                font-size: 12px;
                border-radius: 5px;
                padding: 0px;
                box-sizing: border-box;
                min-width: 200px;
                min-height: 32px;
                max-height: 64px;
            }

            .apple-pay-button-black-with-text {
                background-color: black;
                color: white;
            }

            .apple-pay-button-white-with-text {
                background-color: white;
                color: black;
            }

            .apple-pay-button-white-with-line-with-text {
                background-color: white;
                color: black;
                border: .5px solid black;
            }

            .apple-pay-button-with-text.apple-pay-button-black-with-text>.logo {
                background-image: -webkit-named-image(apple-pay-logo-white);
                background-color: black;
            }

            .apple-pay-button-with-text.apple-pay-button-white-with-text>.logo {
                background-image: -webkit-named-image(apple-pay-logo-black);
                background-color: white;
            }

            .apple-pay-button-with-text.apple-pay-button-white-with-line-with-text>.logo {
                background-image: -webkit-named-image(apple-pay-logo-black);
                background-color: white;
            }

            .apple-pay-button-with-text>.text {
                font-family: -apple-system;
                font-size: calc(1em * var(--apple-pay-scale));
                font-weight: 300;
                align-self: center;
                margin-right: calc(2px * var(--apple-pay-scale));
            }

            .apple-pay-button-with-text>.logo {
                width: calc(35px * var(--scale));
                height: 100%;
                background-size: 100% 60%;
                background-repeat: no-repeat;
                background-position: 0 50%;
                margin-left: calc(2px * var(--apple-pay-scale));
                border: none;
            }
        }
    </style>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="#"><i class="fa fa-user"></i> My Account</a></li>
                            <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                            <li><a href="cart.html"><i class="fa fa-user"></i> My Cart</a></li>
                            <li><a href="checkout.html"><i class="fa fa-user"></i> Checkout</a></li>
                            <li><a href="#"><i class="fa fa-user"></i> Login</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">INR</a></li>
                                    <li><a href="#">GBP</a></li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->

    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="./"><img src="img/logo.png"></a></h1>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.html">Cart - <span class="cart-amunt">$100</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="shop.html">Shop page</a></li>
                        <li class="active"><a href="single-product.html">Single product</a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="#">Category</a></li>
                        <li><a href="#">Others</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- End mainmenu area -->

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div>

                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Products</h2>
                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="">iPhone 6 Plus</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$100.00</del>
                            </div>
                        </div>
                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="">iPhone 6 Plus</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$100.00</del>
                            </div>
                        </div>
                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="">iPhone 6 Plus</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$100.00</del>
                            </div>
                        </div>
                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="">iPhone 6 Plus</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$100.00</del>
                            </div>
                        </div>
                    </div>

                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Recent Posts</h2>
                        <ul>
                            <li><a href="">iPhone 6 Plus</a></li>
                            <li><a href="">iPhone 6 Plus</a></li>
                            <li><a href="">iPhone 6 Plus</a></li>
                            <li><a href="">iPhone 6 Plus</a></li>
                            <li><a href="">iPhone 6 Plus</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="">Home</a>
                            <a href="">Category Name</a>
                            <a href="">iPhone 6 Plus</a>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="img/product-thumb-1.jpg" alt="">
                                    </div>

                                    <div class="product-gallery">
                                        <img src="img/product-thumb-1.jpg" alt="">
                                        <img src="img/product-thumb-2.jpg" alt="">
                                        <img src="img/product-thumb-3.jpg" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name">iPhone 6 Plus</h2>
                                    <div class="product-inner-price">
                                        <ins>$700.00</ins> <del>$100.00</del>
                                    </div>



    <!-- Apple Pay Button -->

    <div id="applePayContainer">
    </div>

    <!--Script Start-->
    <script>
        var debug = true;
        if (window.ApplePaySession) {
            let canMakePayments = ApplePaySession.canMakePayments();
            if (canMakePayments) {
                // Display Apple Pay Button
                let appleTag = document.createElement("div");
                appleTag.id = "applePayButton";
                appleTag.classList.add("apple-pay-button-with-text");
                appleTag.classList.add("apple-pay-button-$backgroundColor-with-text");
                appleTag.setAttribute("lang", "$language");
                document.getElementById("applePayContainer").appendChild(appleTag);

                let appleText = document.createElement("span");
                appleText.innerHTML = "Buy with";
                appleText.classList.add("text");
                appleTag.appendChild(appleText);

                let appleLogo = document.createElement("span");
                appleLogo.classList.add("logo");
                appleTag.appendChild(appleLogo);
            }

        }
        //Start ApplePay 
        window.onload = function() {

            if (document.getElementById("applePayButton")) {

                document.getElementById("applePayButton").onclick = function(evt) {

                    let description = "iPhone 6 Plus";
                    let currency = "ILS";
                    let displayName = "The Big Apple";
                    let amount = "1.00";
                    let domainName = "sagiweizmann.com";
                    let merchantIdentifier = '4500629128'; // your YaadSarig Merchant ID;

                    var runningAmount = "1.00";
                    var runningPP = 0;
                    var runningTotal = function() {
                        var tempTotal = parseFloat(runningAmount) + parseFloat(runningPP);
                        return parseFloat(tempTotal).toFixed(2);
                    }
                    var shippingOption = "";
                    var subTotalDescr = "iPhone 6 Plus";
                    var paymentRequest = {
                        currencyCode: "ILS",
                        countryCode: 'IL',
                        requiredBillingContactFields: ['email', 'name', 'phone'],
                        lineItems: [{
                            label: subTotalDescr,
                            amount: runningAmount
                        }],
                        total: {
                            label: "The Big Apple",
                            amount: runningTotal()
                        },
                        supportedNetworks: ['amex', 'masterCard', 'visa'],
                        merchantCapabilities: ['supports3DS', 'supportsCredit', 'supportsDebit']
                    };

                    var session = new ApplePaySession(1, paymentRequest);
                    session.onvalidatemerchant = function(event) {
                        //event.validationURL
                        var promise = new Promise(function(resolve, reject) {
                            var xhr = new XMLHttpRequest();
                            xhr.onload = function() {
                                var data = JSON.parse(this.responseText);
                                resolve(data);
                            };
                            xhr.onerror = reject;
                            xhr.open("POST", "https://icom.yaad.net/cgi-bin/yaadpay/applepay_main.pl");
                            xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
                            xhr.send(JSON.stringify({
                                'action': 'performValidation',
                                'displayName': displayName,
                                'domainName': domainName,
                                'mid': merchantIdentifier
                            }));
                        });
                        promise.then(function(merchantSession) {
                            session.completeMerchantValidation(merchantSession);
                        });
                    };


                    session.onpaymentauthorized = function(event) {
                        logit('starting session.onpaymentauthorized');
                        // logit('NB: This is the first stage when you get the *full shipping address* of the customer, in the event.payment.shippingContact object');
                        logit(event);
                        logit(event.payment.token);
                        var promise = sendPaymentToken(event.payment.token);
                        promise.then(function(success) {
                            var status;
                            if (success) {
                                status = ApplePaySession.STATUS_SUCCESS;
                                document.getElementById("applePayButton").style.display = "none";
                            } else {
                                status = ApplePaySession.STATUS_FAILURE;
                            }

                            logit("result of sendPaymentToken() function =  " + success);
                            session.completePayment(status);
                        }).catch(function(fail) {
                            console.log(fail);
                            console.log("Promise Rejected");
                        });
                    }

                    function sendPaymentToken(paymentToken) {
                        return new Promise(function(resolve, reject) {
                            logit('starting function sendPaymentToken()');
                            logit(paymentToken);
                            //logit("this is where you would pass the payment token to your third-party payment provider to use 
                            //the token to charge the card. Only if your provider tells you the payment was successful should you 
                            //return a resolve(true) here. Otherwise reject;");

                            var xhr = new XMLHttpRequest();
                            xhr.onload = function() {
                                var jsonResponse = JSON.parse(this.responseText);
                                if (xhr.status === 200 || xhr.status === 0) {
                                    if (jsonResponse.CCode == "0") {
                                        resolve(true);
                                    }
                                } else {
                                    reject;

                                }
                            };
                            xhr.onerror = reject;
                            xhr.open("POST", "https://sagiweizmann.com/UStora/api.php", true);
                            var data = new FormData();

                            data.append('action', 'callsoft');
                            data.append('Masof', merchantIdentifier);
                            data.append('Info', description);
                            data.append('Amount', amount);
                            data.append('PassP', '5555');
                            data.append('UserId', '318194222');
                            data.append('ClientName', 'Sagi');
                            data.append('ClientLName', 'Weizmann');
                            data.append('street', 'Ha Oren');
                            data.append('zip', '12345');
                            data.append('phone', '0522622212');
                            data.append('cell', '0522622212');
                            data.append('email', 'sagi@yaad.net');
                            data.append('Tash', '1');
                            data.append('FixTash', 'True');
                            data.append('Postpone', 'False');
                            data.append('Sign', 'True');
                            data.append('MoreData', 'True');
                            data.append('sendemail', 'True');
                            data.append('SendHesh', 'True');
                            data.append('heshDesc', description);
                            data.append('ApplePay', JSON.stringify(paymentToken));

                            xhr.send(data);
                        });
                    }

                    session.oncancel = function(event) {
                        logit('starting session.cancel');
                        logit(event);
                    }
                    session.begin();
                };
            }
        }

        function logit(data) {
            if (debug == true) {
                console.log(data);
                if (typeof data === 'object' && data !== null) {
                    data = JSON.stringify(data);
                }
            }
        };

        //------------------------------------------------------------------------------------------------------------------------------------//
    </script>



                                    <form action="" class="cart">
                                        <button class="add_to_cart_button" style="padding-top:5px;border-radius:5px;height:30px;width:140px;" type="submit">Add to cart</button>
                                    </form>

                                    <br />
                                    <br />
                                    <br />
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Product Description</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla. Quisque volutpat nulla risus, id maximus ex aliquet ut. Suspendisse potenti. Nulla varius lectus id turpis dignissim porta. Quisque magna arcu, blandit quis felis vehicula, feugiat gravida diam. Nullam nec turpis ligula. Aliquam quis blandit elit, ac sodales nisl. Aliquam eget dolor eget elit malesuada aliquet. In varius lorem lorem, semper bibendum lectus lobortis ac.</p>

                                                <p>Mauris placerat vitae lorem gravida viverra. Mauris in fringilla ex. Nulla facilisi. Etiam scelerisque tincidunt quam facilisis lobortis. In malesuada pulvinar neque a consectetur. Nunc aliquam gravida purus, non malesuada sem accumsan in. Morbi vel sodales libero.</p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Your rating</p>

                                                        <div class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input type="submit" value="Submit"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Related Products</h2>
                            <div class="related-products-carousel">
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-1.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">iPhone 6 Plus</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>₪1.00</ins> <del>$700.00</del>
                                    </div>
                                </div>ד
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-thumb-1.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                                    <div class="product-carousel-price">
                                        <ins>$899.00</ins> <del>$999.00</del>
                                    </div>
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-3.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Apple new i phone 6</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$400.00</ins> <del>$425.00</del>
                                    </div>
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-thumb-1.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Sony playstation microsoft</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$200.00</ins> <del>$225.00</del>
                                    </div>
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-5.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Sony Smart Air Condtion</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$1200.00</ins> <del>$1355.00</del>
                                    </div>
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-6.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Samsung gallaxy note 4</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$400.00</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>u<span>Stora</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="">My account</a></li>
                            <li><a href="">Order history</a></li>
                            <li><a href="">Wishlist</a></li>
                            <li><a href="">Vendor contact</a></li>
                            <li><a href="">Front page</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><a href="">Mobile Phone</a></li>
                            <li><a href="">Home accesseries</a></li>
                            <li><a href="">LED TV</a></li>
                            <li><a href="">Computer</a></li>
                            <li><a href="">Gadets</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <input type="email" placeholder="Type your email">
                            <input type="submit" value="Subscribe">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2015 uCommerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>

    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>

    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>

    <!-- Main Script -->
    <script src="js/main.js"></script>
</body>

</html>