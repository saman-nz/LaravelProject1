<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Free Coupons, Free Deals and Free Shopping | Sold Coupon</title>

    </head>
    
    <body id="top">

    @include('partials.navbar')

        <main>

            <section class="hero-section d-flex justify-content-center align-items-center mb-5">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 mb-5 mb-lg-0">
                            <div class="hero-section-text mt-5">
                                <!--<h6 class="text-white">SoldCoupon</h6>-->

                                <h1 class="hero-title text-white mt-4 mb-4">Contact Us</h1>

                                <!--<a href="#categories-section" class="custom-btn custom-border-btn btn">Browse Stores</a>-->
                            </div>
                        </div>

                        

                    </div>
                </div>
            </section>

            <section class="about-section">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12">
                            <div class="custom-text-block">
                                <h2 class="text-white mb-2">Need any help or assistance?</h2>

<form class="custom-form contact-form" action="#" method="post" role="form">

<div class="row">
    <div class="col-lg-6 col-md-6 col-12">
        <label for="first-name">Full Name</label>

        <input type="text" name="full-name" id="full-name" class="form-control" placeholder="Jack Doe" required>
    </div>

    <div class="col-lg-6 col-md-6 col-12">
        <label for="email">Email Address</label>

         <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jackdoe@gmail.com" required>
    </div>

    <div class="col-lg-12 col-12">
        <label for="message">Message</label>

        <textarea name="message" rows="6" class="form-control" id="message" placeholder="What can we help you?"></textarea>
    </div>

    <div class="col-lg-4 col-md-4 col-6 mx-auto">
        <button type="submit" class="form-control">Send Message</button>
    </div>
</div>
</form>
                
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="instagram-block">
                                <img src="{{ asset('images/free-shopping.jpg') }}" class="about-image custom-border-radius-end img-fluid" alt="free shopping">

                                
                            </div>
                        </div>

                    </div>
                </div>
            </section>
 </main>

 @include('partials.footer')
		

		
    </body>
</html>