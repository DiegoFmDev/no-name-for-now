<?php
session_start();

// Initialize cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Process checkout
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // In a real application, you would process the payment here
    // For this demo, we'll just clear the cart and show a success message
    $_SESSION['cart'] = [];
    $_SESSION['message'] = 'Order placed successfully!';
    $_SESSION['message_type'] = 'success';
    
    // Redirect to confirmation page
    header('Location: order-confirmation.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Minimalin</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Top Bar -->
    <div class="container-fluid bg-dark text-white py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <small><i class="fas fa-envelope me-2"></i> example@example.com</small>
                    <small class="ms-3"><i class="fas fa-map-marker-alt me-2"></i> City, State, ZIP Code</small>
                </div>
                <div class="col-md-6 text-end">
                    <div class="dropdown d-inline-block">
                        <button class="btn btn-sm text-white dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            English
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                            <li><a class="dropdown-item" href="#">English</a></li>
                            <li><a class="dropdown-item" href="#">Spanish</a></li>
                            <li><a class="dropdown-item" href="#">French</a></li>
                        </ul>
                    </div>
                    <a href="#" class="text-white ms-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white ms-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white ms-2"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="text-white ms-2"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white ms-2"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <span class="fw-bold">Minimal</span><span class="fw-bold text-primary">in</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="homeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Home <span class="badge bg-danger ms-1">New</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="homeDropdown">
                            <li><a class="dropdown-item" href="index.php">Home v1</a></li>
                            <li><a class="dropdown-item" href="#">Home v2</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="shopDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Shop <span class="badge bg-primary ms-1">Hot</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="shopDropdown">
                            <li><a class="dropdown-item" href="shop.php">All Products</a></li>
                            <li><a class="dropdown-item" href="#">Product Details</a></li>
                            <li><a class="dropdown-item" href="cart.php">Cart</a></li>
                            <li><a class="dropdown-item" href="checkout.php">Checkout</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                            <li><a class="dropdown-item" href="category.php?type=men">Men's Clothing</a></li>
                            <li><a class="dropdown-item" href="category.php?type=women">Women's Clothing</a></li>
                            <li><a class="dropdown-item" href="category.php?type=accessories">Accessories</a></li>
                            <li><a class="dropdown-item" href="category.php?type=footwear">Footwear</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Blog
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="blogDropdown">
                            <li><a class="dropdown-item" href="blog.php">Blog List</a></li>
                            <li><a class="dropdown-item" href="blog-detail.php">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pages
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="pagesDropdown">
                            <li><a class="dropdown-item" href="contact.php">Contact</a></li>
                            <li><a class="dropdown-item" href="faq.php">FAQ</a></li>
                            <li><a class="dropdown-item" href="404.php">404 Page</a></li>
                        </ul>
                    </li>
                </ul>
                
                <div class="d-flex align-items-center">
                    <div class="dropdown me-3">
                        <button class="btn btn-sm dropdown-toggle" type="button" id="currencyDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            US (USD $)
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="currencyDropdown">
                            <li><a class="dropdown-item" href="#">US (USD $)</a></li>
                            <li><a class="dropdown-item" href="#">EUR (€)</a></li>
                            <li><a class="dropdown-item" href="#">GBP (£)</a></li>
                        </ul>
                    </div>
                    <a href="#" class="text-dark me-3"><i class="fas fa-search"></i></a>
                    <a href="account.php" class="text-dark me-3"><i class="fas fa-user"></i></a>
                    <a href="cart.php" class="text-dark position-relative">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                            <?php echo count($_SESSION['cart']); ?>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <h1 class="text-center">Checkout</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="cart.php">Cart</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Checkout Section -->
    <div class="container my-5">
        <?php if (empty($_SESSION['cart'])): ?>
            <div class="text-center py-5">
                <i class="fas fa-  ?>
            <div class="text-center py-5">
                <i class="fas fa-shopping-cart fa-4x mb-3 text-muted"></i>
                <h3>Your cart is empty</h3>
                <p class="mb-4">You need to add items to your cart before checkout.</p>
                <a href="shop.php" class="btn btn-primary">Continue Shopping</a>
            </div>
        <?php else: ?>
            <form method="post" action="checkout.php">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title mb-4">Billing Details</h5>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="firstName" class="form-label">First Name *</label>
                                        <input type="text" class="form-control" id="firstName" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastName" class="form-label">Last Name *</label>
                                        <input type="text" class="form-control" id="lastName" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="companyName" class="form-label">Company Name (Optional)</label>
                                        <input type="text" class="form-control" id="companyName">
                                    </div>
                                    <div class="col-12">
                                        <label for="country" class="form-label">Country / Region *</label>
                                        <select class="form-select" id="country" required>
                                            <option value="">Select a country</option>
                                            <option value="US">United States</option>
                                            <option value="CA">Canada</option>
                                            <option value="UK">United Kingdom</option>
                                            <option value="AU">Australia</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="address" class="form-label">Street Address *</label>
                                        <input type="text" class="form-control mb-2" id="address" placeholder="House number and street name" required>
                                        <input type="text" class="form-control" placeholder="Apartment, suite, unit, etc. (optional)">
                                    </div>
                                    <div class="col-12">
                                        <label for="city" class="form-label">Town / City *</label>
                                        <input type="text" class="form-control" id="city" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="state" class="form-label">State *</label>
                                        <input type="text" class="form-control" id="state" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="zip" class="form-label">ZIP Code *</label>
                                        <input type="text" class="form-control" id="zip" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label">Phone *</label>
                                        <input type="tel" class="form-control" id="phone" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email Address *</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title mb-4">Additional Information</h5>
                                <div class="mb-3">
                                    <label for="orderNotes" class="form-label">Order Notes (Optional)</label>
                                    <textarea class="form-control" id="orderNotes" rows="3" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title mb-4">Your Order</h5>
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-bold">Product</span>
                                    <span class="fw-bold">Subtotal</span>
                                </div>
                                <hr>
                                <?php 
                                $total = 0;
                                foreach ($_SESSION['cart'] as $item): 
                                    $itemTotal = $item['price'] * $item['quantity'];
                                    $total += $itemTotal;
                                ?>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span><?php echo $item['name']; ?> × <?php echo $item['quantity']; ?></span>
                                        <span>$<?php echo number_format($itemTotal, 2); ?></span>
                                    </div>
                                <?php endforeach; ?>
                                <hr>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Subtotal</span>
                                    <span>$<?php echo number_format($total, 2); ?></span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Shipping</span>
                                    <span>Free</span>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between mb-4">
                                    <span class="fw-bold">Total</span>
                                    <span class="fw-bold">$<?php echo number_format($total, 2); ?></span>
                                </div>
                                
                                <div class="mb-4">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="paymentMethod" id="directBank" checked>
                                        <label class="form-check-label" for="directBank">
                                            Direct Bank Transfer
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="paymentMethod" id="checkPayment">
                                        <label class="form-check-label" for="checkPayment">
                                            Check Payment
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="paymentMethod" id="cashDelivery">
                                        <label class="form-check-label" for="cashDelivery">
                                            Cash on Delivery
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="paymentMethod" id="paypal">
                                        <label class="form-check-label" for="paypal">
                                            PayPal
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        <?php endif; ?>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">About Us</h5>
                    <p>Minimalin is a modern fashion store offering the latest trends in clothing and accessories.</p>
                    <div class="mt-4">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="about.php" class="text-white text-decoration-none">About Us</a></li>
                        <li class="mb-2"><a href="contact.php" class="text-white text-decoration-none">Contact Us</a></li>
                        <li class="mb-2"><a href="faq.php" class="text-white text-decoration-none">FAQs</a></li>
                        <li class="mb-2"><a href="privacy-policy.php" class="text-white text-decoration-none">Privacy Policy</a></li>
                        <li class="mb-2"><a href="terms.php" class="text-white text-decoration-none">Terms & Conditions</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Categories</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="category.php?type=men" class="text-white text-decoration-none">Men's Clothing</a></li>
                        <li class="mb-2"><a href="category.php?type=women" class="text-white text-decoration-none">Women's Clothing</a></li>
                        <li class="mb-2"><a href="category.php?type=accessories" class="text-white text-decoration-none">Accessories</a></li>
                        <li class="mb-2"><a href="category.php?type=footwear" class="text-white text-decoration-none">Footwear</a></li>
                        <li class="mb-2"><a href="category.php?type=new" class="text-white text-decoration-none">New Arrivals</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Contact Us</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> 123 Fashion Street, City, Country</li>
                        <li class="mb-2"><i class="fas fa-phone me-2"></i> +1 234 567 8901</li>
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i> info@minimalin.com</li>
                        <li class="mb-2"><i class="fas fa-clock me-2"></i> Mon-Fri: 9AM - 6PM</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center p-3 mt-4" style="background-color: rgba(0, 0, 0, 0.2);">
            © <?php echo date('Y'); ?> Minimalin. All Rights Reserved.
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

