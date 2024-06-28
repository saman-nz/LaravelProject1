<nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="col-4">
                <a class="navbar-brand d-flex align-items-center" href="/">
                    <img src="{{ asset('images/logo.png') }}" class="img-fluid logo-image">
                </a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-center ms-lg-5">
                        <li class="nav-item">
                            <a class="nav-link active" href="/">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                        	
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item"  href="{{ route('category.single') }}">Accessories</a></li>
                                <li><a class="dropdown-item" href="#">Department Stores</a></li>
                                <li><a class="dropdown-item" href="#">Electronics</a></li>
                                <li><a class="dropdown-item" href="#">Clothing</a></li>
                                <li><a class="dropdown-item" href="#">Beauty</a></li>
                                <li><a class="dropdown-item" href="#">Home &amp; Garden</a></li>
                                <li><a class="dropdown-item" href="#"><strong>View All</strong></a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Stores</a>
                        	
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Adidas</a></li>
                                <li><a class="dropdown-item" href="#">AliExpress</a></li>
                                <li><a class="dropdown-item" href="#">Amazon</a></li>
                                <li><a class="dropdown-item" href="#">Costco</a></li>
                                <li><a class="dropdown-item" href="#">Best Buy</a></li>
                                <li><a class="dropdown-item" href="#">ebay</a></li>
                                <li><a class="dropdown-item" href="{{ route('store.all') }}"><strong>View All</strong></a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}" >Contact Us</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>