<?php
// Include header file
include 'includes/header.php';
?>

<!-- Hero Carousel -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
        <!-- Slide 1 - Men's Collection -->
        <div class="carousel-item active">
            <div class="container-fluid hero-section py-5 bg-light">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6 hero-text">
                            <h1 class="display-4 fw-bold mb-3">Men Collection</h1>
                            <p class="lead mb-4">Enchanting Styles for Dreamy Souls.</p>
                            <a href="shop.php" class="btn btn-primary px-4 py-2">Shop Now</a>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <img src="assets/images/men-collection.png" alt="Men's Collection" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide 2 - Women's Collection -->
        <div class="carousel-item">
            <div class="container-fluid hero-section py-5 bg-light">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6 hero-text">
                            <h1 class="display-4 fw-bold mb-3">Women Collection</h1>
                            <p class="lead mb-4">Elegant Designs for Modern Women.</p>
                            <a href="category.php?type=women" class="btn btn-primary px-4 py-2">Shop Now</a>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <img src="assets/images/women-collection.png" alt="Women's Collection" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide 3 - Accessories Collection -->
        <div class="carousel-item">
            <div class="container-fluid hero-section py-5 bg-light">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6 hero-text">
                            <h1 class="display-4 fw-bold mb-3">Accessories</h1>
                            <p class="lead mb-4">Complete Your Look with Premium Accessories.</p>
                            <a href="category.php?type=accessories" class="btn btn-primary px-4 py-2">Shop Now</a>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <img src="assets/images/kids-collection.png" alt="Accessories Collection" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide 4 - Summer Collection -->
        <div class="carousel-item">
            <div class="container-fluid hero-section py-5" style="background-color: #f0f8ff;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6 hero-text">
                            <h1 class="display-4 fw-bold mb-3">Summer Sale</h1>
                            <p class="lead mb-4">Up to 50% Off on Summer Essentials.</p>
                            <a href="category.php?type=sale" class="btn btn-danger px-4 py-2">Shop Sale</a>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <img src="assets/images/summer-collection.png" alt="Summer Collection" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Best Offer Section -->
<div class="container-fluid bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="display-4 mb-3">Best Offer - Up to <span class="text-primary">50%</span></h2>
                <p class="lead mb-4">Explore our latest New Arrivals & unlock discounts of up to 50% off!</p>
                
                <!-- Countdown Timer -->
                <div class="d-flex gap-4 mb-4">
                    <div class="text-center">
                        <div class="h3 mb-0" id="days">297</div>
                        <small class="text-muted">Days</small>
                    </div>
                    <div class="text-center">
                        <div class="h3 mb-0" id="hours">07</div>
                        <small class="text-muted">Hrs</small>
                    </div>
                    <div class="text-center">
                        <div class="h3 mb-0" id="minutes">50</div>
                        <small class="text-muted">Min</small>
                    </div>
                    <div class="text-center">
                        <div class="h3 mb-0" id="seconds">56</div>
                        <small class="text-muted">Sec</small>
                    </div>
                </div>
                
                <a href="shop.php" class="btn btn-primary px-4 py-2">Shop Now</a>
            </div>
            <div class="col-lg-6">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-9nT79UZKozdnphDulxTjFNeKzaterh.png" alt="Best Offer" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<!-- Why Choose Us Section -->
<div class="container my-5 py-4">
    <h2 class="text-center mb-5">Why Choose Minimalin</h2>
    <div class="row g-4">
        <div class="col-md-3">
            <div class="text-center">
                <div class="feature-icon bg-primary bg-gradient text-white rounded-circle mb-3">
                    <i class="fas fa-truck fa-2x p-3"></i>
                </div>
                <h5>Free Shipping</h5>
                <p class="text-muted">On all orders over $50</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="text-center">
                <div class="feature-icon bg-primary bg-gradient text-white rounded-circle mb-3">
                    <i class="fas fa-undo fa-2x p-3"></i>
                </div>
                <h5>Easy Returns</h5>
                <p class="text-muted">30-day return policy</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="text-center">
                <div class="feature-icon bg-primary bg-gradient text-white rounded-circle mb-3">
                    <i class="fas fa-lock fa-2x p-3"></i>
                </div>
                <h5>Secure Payment</h5>
                <p class="text-muted">100% secure checkout</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="text-center">
                <div class="feature-icon bg-primary bg-gradient text-white rounded-circle mb-3">
                    <i class="fas fa-headset fa-2x p-3"></i>
                </div>
                <h5>24/7 Support</h5>
                <p class="text-muted">Dedicated support team</p>
            </div>
        </div>
    </div>
</div>

<!-- Featured Categories -->
<div class="container my-5 py-4">
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card border-0 shadow-sm category-card">
                <img src="assets/images/suits-formals.jpg" class="card-img-top" alt="Suits & Formals">
                <div class="card-body text-center py-4">
                    <h3 class="card-title mb-3">Suits & Formals</h3>
                    <a href="category.php?type=formals" class="btn btn-outline-dark px-4">View Collection</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card border-0 shadow-sm category-card">
                <img src="assets/images/womens-collection.jpg" class="card-img-top" alt="Women's Collection">
                <div class="card-body text-center py-4">
                    <h3 class="card-title mb-3">Women's Collection</h3>
                    <a href="category.php?type=women" class="btn btn-outline-dark px-4">View Collection</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- New Arrivals Section -->
<div class="container-fluid bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="mb-3">New Arrivals</h2>
                <p class="text-muted">Check out our latest products</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm product-card">
                    <span class="badge bg-danger position-absolute top-0 end-0 m-2">New</span>
                    <div class="product-image-container">
                        <img src="assets/images/products/new-arrival-1.jpg" class="card-img-top" alt="New Arrival 1">
                        <div class="product-actions">
                            <a href="#" class="btn-product-action" data-bs-toggle="tooltip" title="Quick View"><i class="fas fa-eye"></i></a>
                            <a href="#" class="btn-product-action" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                            <a href="#" class="btn-product-action" data-bs-toggle="tooltip" title="Compare"><i class="fas fa-sync-alt"></i></a>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <span class="product-category">Men</span>
                        <h5 class="card-title">Slim Fit Blazer</h5>
                        <p class="card-text fw-bold">$89.99</p>
                        <button class="btn btn-primary add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm product-card">
                    <span class="badge bg-danger position-absolute top-0 end-0 m-2">New</span>
                    <div class="product-image-container">
                        <img src="assets/images/products/new-arrival-2.jpg" class="card-img-top" alt="New Arrival 2">
                        <div class="product-actions">
                            <a href="#" class="btn-product-action" data-bs-toggle="tooltip" title="Quick View"><i class="fas fa-eye"></i></a>
                            <a href="#" class="btn-product-action" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                            <a href="#" class="btn-product-action" data-bs-toggle="tooltip" title="Compare"><i class="fas fa-sync-alt"></i></a>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <span class="product-category">Women</span>
                        <h5 class="card-title">Floral Summer Dress</h5>
                        <p class="card-text fw-bold">$69.99</p>
                        <button class="btn btn-primary add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm product-card">
                    <span class="badge bg-danger position-absolute top-0 end-0 m-2">New</span>
                    <div class="product-image-container">
                        <img src="assets/images/products/new-arrival-3.jpg" class="card-img-top" alt="New Arrival 3">
                        <div class="product-actions">
                            <a href="#" class="btn-product-action" data-bs-toggle="tooltip" title="Quick View"><i class="fas fa-eye"></i></a>
                            <a href="#" class="btn-product-action" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                            <a href="#" class="btn-product-action" data-bs-toggle="tooltip" title="Compare"><i class="fas fa-sync-alt"></i></a>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <span class="product-category">Accessories</span>
                        <h5 class="card-title">Leather Watch</h5>
                        <p class="card-text fw-bold">$129.99</p>
                        <button class="btn btn-primary add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm product-card">
                    <span class="badge bg-danger position-absolute top-0 end-0 m-2">New</span>
                    <div class="product-image-container">
                        <img src="assets/images/products/new-arrival-4.jpg" class="card-img-top" alt="New Arrival 4">
                        <div class="product-actions">
                            <a href="#" class="btn-product-action" data-bs-toggle="tooltip" title="Quick View"><i class="fas fa-eye"></i></a>
                            <a href="#" class="btn-product-action" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                            <a href="#" class="btn-product-action" data-bs-toggle="tooltip" title="Compare"><i class="fas fa-sync-alt"></i></a>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <span class="product-category">Footwear</span>
                        <h5 class="card-title">Casual Sneakers</h5>
                        <p class="card-text fw-bold">$79.99</p>
                        <button class="btn btn-primary add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center mt-4">
                <a href="shop.php" class="btn btn-outline-primary px-4 py-2">View All New Arrivals</a>
            </div>
        </div>
    </div>
</div>

<!-- Featured Products -->
<div class="container my-5 py-4">
    <h2 class="text-center mb-5">Featured Products</h2>
    <div class="row">
        <?php
        // Sample product data (in a real application, this would come from a database)
        $products = [
            [
                'id' => 1, 
                'name' => 'Blue Checkered Shirt', 
                'price' => 49.99, 
                'image' => 'assets/images/products/blue-shirt.jpg',
                'category' => 'Men'
            ],
            [
                'id' => 2, 
                'name' => 'Navy Chinos', 
                'price' => 59.99, 
                'image' => 'assets/images/products/navy-pants.jpg',
                'category' => 'Men'
            ],
            [
                'id' => 3, 
                'name' => 'Brown Leather Shoes', 
                'price' => 89.99, 
                'image' => 'assets/images/products/brown-shoes.jpg',
                'category' => 'Footwear'
            ],
            [
                'id' => 4, 
                'name' => 'Red Plaid Shirt', 
                'price' => 45.99, 
                'image' => 'assets/images/products/plaid-shirt.jpg',
                'category' => 'Men'
            ]
        ];
        
        foreach ($products as $product) {
            echo '
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm product-card">
                    <div class="product-image-container">
                        <img src="' . $product['image'] . '" class="card-img-top" alt="' . $product['name'] . '">
                        <div class="product-actions">
                            <a href="#" class="btn-product-action" data-bs-toggle="tooltip" title="Quick View"><i class="fas fa-eye"></i></a>
                            <a href="#" class="btn-product-action" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                            <a href="#" class="btn-product-action" data-bs-toggle="tooltip" title="Compare"><i class="fas fa-sync-alt"></i></a>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <span class="product-category">' . $product['category'] . '</span>
                        <h5 class="card-title">' . $product['name'] . '</h5>
                        <p class="card-text fw-bold">$' . $product['price'] . '</p>
                        <form action="add-to-cart.php" method="post">
                            <input type="hidden" name="product_id" value="' . $product['id'] . '">
                            <button type="submit" class="btn btn-primary add-to-cart">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>';
        }
        ?>
    </div>
</div>

<!-- Testimonials Section -->
<div class="container-fluid py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2>What Our Customers Say</h2>
                <p class="text-muted">Trusted by thousands of customers worldwide</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <div class="d-flex mb-3">
                        <div class="me-3">
                            <img src="assets/images/testimonial-1.jpg" alt="Customer" class="rounded-circle" width="60" height="60">
                        </div>
                        <div>
                            <h5 class="mb-1">John Doe</h5>
                            <div class="text-warning mb-1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="card-text">"I've been shopping at Minimalin for years. The quality of their products is exceptional, and their customer service is top-notch. Highly recommended!"</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <div class="d-flex mb-3">
                        <div class="me-3">
                            <img src="assets/images/testimonial-2.jpg" alt="Customer" class="rounded-circle" width="60" height="60">
                        </div>
                        <div>
                            <h5 class="mb-1">Jane Smith</h5>
                            <div class="text-warning mb-1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p class="card-text">"The clothes I purchased from Minimalin are not only stylish but also very comfortable. The shipping was fast, and everything arrived in perfect condition."</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <div class="d-flex mb-3">
                        <div class="me-3">
                            <img src="assets/images/testimonial-3.jpg" alt="Customer" class="rounded-circle" width="60" height="60">
                        </div>
                        <div>
                            <h5 class="mb-1">Michael Johnson</h5>
                            <div class="text-warning mb-1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="card-text">"I love the minimalist design approach of their clothing. Everything I've bought fits perfectly and lasts for years. Their return policy is also very customer-friendly."</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Brands Section -->
<div class="container my-5 py-4">
    <h2 class="text-center mb-5">Our Brands</h2>
    <div class="row align-items-center">
        <div class="col-md-2 col-4 text-center mb-4">
            <img src="assets/images/brands/brand-1.png" alt="Brand 1" class="img-fluid" style="max-height: 60px;">
        </div>
        <div class="col-md-2 col-4 text-center mb-4">
            <img src="assets/images/brands/brand-2.png" alt="Brand 2" class="img-fluid" style="max-height: 60px;">
        </div>
        <div class="col-md-2 col-4 text-center mb-4">
            <img src="assets/images/brands/brand-3.png" alt="Brand 3" class="img-fluid" style="max-height: 60px;">
        </div>
        <div class="col-md-2 col-4 text-center mb-4">
            <img src="assets/images/brands/brand-4.png" alt="Brand 4" class="img-fluid" style="max-height: 60px;">
        </div>
        <div class="col-md-2 col-4 text-center mb-4">
            <img src="assets/images/brands/brand-5.png" alt="Brand 5" class="img-fluid" style="max-height: 60px;">
        </div>
        <div class="col-md-2 col-4 text-center mb-4">
            <img src="assets/images/brands/brand-6.png" alt="Brand 6" class="img-fluid" style="max-height: 60px;">
        </div>
    </div>
</div>

<!-- Newsletter -->
<div class="container-fluid bg-light py-5 newsletter-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h3 class="mb-3">Subscribe to Our Newsletter</h3>
                <p class="mb-4">Get the latest updates on new products and upcoming sales</p>
                <form class="row g-3 justify-content-center" action="subscribe.php" method="post">
                    <div class="col-auto">
                        <input type="email" class="form-control" name="email" placeholder="Your Email Address" required>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
// Include footer file
include 'includes/footer.php';
?>

